<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();

        return view('pages.news.index', compact('news'));
    }

    public function getLastNews()
    {
        $news = News::latest()->take(4)->get();

        return view('pages.landing-page', compact('news'));
    }

    public function create()
    {
        return view('pages.news.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ], [
            'title.required' => 'Judul berita wajib diisi.',
            'content.required' => 'Isi berita wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.max' => 'Ukuran gambar maksimal 5MB.',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/news-img'), $fileName);
            $imagePath = 'img/news-img/' . $fileName;
        }

        News::create([
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['title']),
            'content' => $validatedData['content'],
            'image_url' => $imagePath,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show(News $news)
    {
        return view('pages.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('pages.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        $imagePath = $news->image_url;

        if ($request->hasFile('image')) {
            if ($imagePath && File::exists(public_path($imagePath))) {
                File::delete(public_path($imagePath));
            }

            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/news-img'), $fileName);
            $imagePath = 'img/news-img/' . $fileName;
        }

        $news->update([
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['title']),
            'content' => $validatedData['content'],
            'image_url' => $imagePath,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(News $news)
    {
        if ($news->image_url && File::exists(public_path($news->image_url))) {
            File::delete(public_path($news->image_url));
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus!');
    }
}