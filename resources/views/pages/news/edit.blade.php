{{-- resources/views/pages/news/edit.blade.php --}}

@extends('index') {{-- Meng-extend layout 'index' kamu --}}

@section('title', 'Edit Berita: ' . $news->title) {{-- Judul halaman akan sesuai dengan judul berita --}}

@section('content')
    <div class="pt-20"></div> {{-- Spacer dari header --}}
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-[#FFF8E1] p-6 rounded-lg shadow-md border border-[#FBEAB3]">
            <h2 class="text-2xl font-bold text-[#4B3C2F] mb-6">Edit Berita</h2>

            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- WAJIB: Method spoofing untuk PUT request --}}

                {{-- Input Judul Berita --}}
                <div class="mb-4">
                    <label for="title" class="block text-[#4E3D33] text-sm font-bold mb-2">Judul Berita</label>
                    <input type="text"
                           class="shadow appearance-none border border-[#FBEAB3] rounded w-full py-2 px-3 text-[#4B3C2F] leading-tight focus:outline-none focus:shadow-outline focus:border-[#4E3D33]
                                  @error('title') border-red-500 @enderror"
                           id="title"
                           name="title"
                           value="{{ old('title', $news->title) }}" {{-- old() dengan fallback ke data berita --}}
                           required> {{-- Tetap required untuk judul --}}
                    @error('title')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Input Konten Berita --}}
                <div class="mb-4">
                    <label for="content" class="block text-[#4E3D33] text-sm font-bold mb-2">Isi Berita</label>
                    <textarea class="shadow appearance-none border border-[#FBEAB3] rounded w-full py-2 px-3 text-[#4B3C2F] leading-tight focus:outline-none focus:shadow-outline h-32 resize-y focus:border-[#4E3D33]
                              @error('content') border-red-500 @enderror"
                              id="content"
                              name="content"
                              required>{{ old('content', $news->content) }}</textarea> {{-- old() dengan fallback ke data berita --}}
                    @error('content')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Tampilan Gambar Saat Ini dan Input Gambar Baru --}}
                <div class="mb-6">
                    <label class="block text-[#4E3D33] text-sm font-bold mb-2">Gambar Saat Ini</label>
                    @if ($news->image_url)
                        <div class="mb-4">
                            <img src="{{ asset($news->image_url) }}" alt="{{ $news->title }}" class="w-48 h-auto rounded-lg shadow-sm">
                        </div>
                    @else
                        <p class="text-gray-600 text-sm mb-4">Tidak ada gambar saat ini.</p>
                    @endif

                    <label for="image" class="block text-[#4E3D33] text-sm font-bold mb-2">Ganti Gambar (Opsional)</label> {{-- Label diubah --}}
                    <input type="file"
                           class="block w-full text-sm text-[#4B3C2F]
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-[#F7E7B5] file:text-[#4B3C2F]
                                  hover:file:bg-[#4E3D33] hover:file:text-white
                                  @error('image') border border-red-500 rounded @enderror"
                           id="image"
                           name="image"
                           accept="image/*"> {{-- Hapus 'required' dari sini, karena gambar opsional saat edit --}}
                    @error('image')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Tombol Submit dan Batal --}}
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-[#4B3C2F] hover:bg-[#4E3D33] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update Berita
                    </button>
                    <button type="button" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            onclick="return confirm('Perubahan tak disimpan. Anda yakin ingin batal?') ? window.location.href='{{ route('news.show', $news->id) }}' : false;">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
