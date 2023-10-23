@extends('admin.layouts.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

        <div class="flex">

            <div class="">
                <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4 mb-2">
                        <label for="kd_buku" class="mb-1 text-3xl text-brown font-bebas">KODE BUKU</label>
                        <hr class="w-72">
                        <input type="text" id="kd_buku"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            name="kd_buku" value="{{ old('kd_buku') }}" placeholder="Enter book code here">
                    </div>
                    @error('kd_buku')
                        <div id="error-message"
                            class="bg-red-100 border border-red-400 text-red-700 text-xs mt-4 px-4 py-3 w-72 rounded relative"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                            <span id="close-error" class="absolute top-1 bottom-0 right-0 px-4 py-2">
                                <svg class="fill-current h-5 w-5 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>
                    @enderror

                    <div class="mt-4 mb-2 ">
                        <label for="text" class="mb-1 text-3xl text-brown font-bebas">FOTO BUKU</label>
                        <hr class="w-72">
                        <input type="file" id="imagebuku"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown"
                            name="foto" value="{{ old('foto') }}">
                    </div>
                    @error('foto')
                        <div id="error-message"
                            class="bg-red-100 border border-red-400 text-red-700 text-xs mt-4 px-4 py-3 w-72 rounded relative"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                            <span id="close-error" class="absolute top-1 bottom-0 right-0 px-4 py-2">
                                <svg class="fill-current h-5 w-5 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>
                    @enderror

                    <div class="flex space-x-12">
                        <div class="mt-2 mb-2">
                            <label for="text" class="mb-1 text-3xl text-brown font-bebas">JUDUL BUKU</label>
                            <hr class="w-72">
                            <input type="text" id="judul"
                                class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                                placeholder="Enter your book title here" name="judul_buku" value="{{ old('judul_buku') }}">
                            @error('judul_buku')
                                <div id="error-message"
                                    class="bg-red-100 border border-red-400 text-red-700 text-xs mt-4 px-4 py-3 max-w-full rounded relative"
                                    role="alert">
                                    <strong class="font-bold">Error!</strong>
                                    <span class="block sm:inline">{{ $message }}</span>
                                    <span id="close-error" class="absolute top-1 bottom-0 right-0 px-4 py-2">
                                        <svg class="fill-current h-5 w-5 text-red-500" role="button"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <title>Close</title>
                                            <path
                                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                        </svg>
                                    </span>
                                </div>
                            @enderror
                        </div>


                        <div class="mt-2 mb-2">
                            <label for="text" class="mb-1 text-3xl text-brown font-bebas">AUTHOR</label>
                            <hr class="w-72">
                            <input type="text" id="author"
                                class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                                placeholder="Enter your book author here" name="author" value="{{ old('author') }}">
                            @error('author')
                                <div id="error-message"
                                    class="bg-red-100 border border-red-400 text-red-700 text-xs mt-4 px-4 py-3 max-w-full rounded relative"
                                    role="alert">
                                    <strong class="font-bold">Error!</strong>
                                    <span class="block sm:inline">{{ $message }}</span>
                                    <span id="close-error" class="absolute top-1 bottom-0 right-0 px-4 py-2">
                                        <svg class="fill-current h-5 w-5 text-red-500" role="button"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <title>Close</title>
                                            <path
                                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                        </svg>
                                    </span>
                                </div>
                            @enderror
                        </div>


                        <div class="mt-2 mb-2">
                            <label for="username" class="mb-1 text-3xl text-brown font-bebas">KATEGORI</label>
                            <hr class="w-72">
                            <select class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100"
                                name="kategoriId">
                                <option value="" disabled selected>PILIH KATEGORI</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="flex space-x-6">
                        <div class="mt-2 mb-2">
                            <label for="text" class="mb-1 text-3xl text-brown font-bebas">STOCK BUKU</label>
                            <hr class="w-72">
                            <input type="number" id="stock"
                                class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                                placeholder="Enter your book title here" name="stock" value="{{ old('stock') }}">
                            @error('stock')
                                <div id="error-message"
                                    class="bg-red-100 border border-red-400 text-red-700 text-xs mt-4 px-4 py-3 max-w-full rounded relative"
                                    role="alert">
                                    <strong class="font-bold">Error!</strong>
                                    <span class="block sm:inline">{{ $message }}</span>
                                    <span id="close-error" class="absolute top-1 bottom-0 right-0 px-4 py-2">
                                        <svg class="fill-current h-5 w-5 text-red-500" role="button"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <title>Close</title>
                                            <path
                                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                        </svg>
                                    </span>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-2 mb-2">
                        <label for="sinopsis" class="mb-1 text-3xl text-brown font-bebas">SINOPSIS</label>
                        <hr class="w-72">
                        <textarea
                            class="w-full mt-4 p-1 text-brown font-medium border-2 border-brown bg-white placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your book synopsis here" name="sinopsis" rows="5">{{ old('sinopsis') }}
                        </textarea>
                    </div>
                    @error('sinopsis')
                        <div id="error-message"
                            class="bg-red-100 border border-red-400 text-red-700 text-xs mt-4 px-4 py-3 max-w-full rounded relative"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                            <span id="close-error" class="absolute top-1 bottom-0 right-0 px-4 py-2">
                                <svg class="fill-current h-5 w-5 text-red-500" role="button"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>
                    @enderror
                    <button type="submit"
                        class="mt-4 p-2 px-10 bg-brown text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-brown hover:text-brown hover:duration-200 rounded-full">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('sinopsis');
    </script>
    <script>
        $(document).ready(function() {
            $('#close-error').on('click', function() {
                $('#error-message').hide();
            });
        });
    </script>

    </html>
@endsection
