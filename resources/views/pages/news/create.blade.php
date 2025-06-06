@extends('index')
@section('content')
    <div class="pt-20"></div>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-[#FFF8E1] p-6 rounded-lg shadow-md border border-[#FBEAB3]">
            <h2 class="text-2xl font-bold text-[#4B3C2F] mb-6">Tambah Berita Baru</h2>

            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-[#4E3D33] text-sm font-bold mb-2">Judul Berita</label>
                    <input type="text"
                           class="shadow appearance-none border border-[#FBEAB3] rounded w-full py-2 px-3 text-[#4B3C2F] leading-tight focus:outline-none focus:shadow-outline focus:border-[#4E3D33]
                                  @error('title') border-red-500 @enderror"
                           id="title"
                           name="title"
                           value="{{ old('title') }}"
                           >
                    @error('title')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-[#4E3D33] text-sm font-bold mb-2">Isi Berita</label>
                    <textarea class="shadow appearance-none border border-[#FBEAB3] rounded w-full py-2 px-3 text-[#4B3C2F] leading-tight focus:outline-none focus:shadow-outline h-32 resize-y focus:border-[#4E3D33]
                              @error('content') border-red-500 @enderror"
                              id="content"
                              name="content"
                              >{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="image" class="block text-[#4E3D33] text-sm font-bold mb-2">Gambar Berita</label>
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
                           accept="image/*"
                           required>
                    @error('image')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-[#4B3C2F] hover:bg-[#4E3D33] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Simpan Berita
                    </button>
                    <a href="{{ route('news.index') }}" class="inline-block align-baseline font-semibold text-sm text-[#4E3D33] hover:text-[#4B3C2F]">
                        Kembali ke Daftar Berita
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

