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

        <div>
            <form action="{{ route('kategori.update', $render->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mt-2 mb-2">
                    <label for="kategori" class="mb-1 text-3xl text-brown font-bebas">NAMA KATEGORI BUKU</label>
                    <hr class="w-72">
                    <input type="text" id="kategori"
                        class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                        name="nama_kategori" value="{{ old('nama_kategori', $render->nama_kategori) }}"
                        placeholder="Enter your category book here">
                </div>

                @error('nama_kategori')
                    <div id="error-message"
                        class="bg-red-100 border border-red-400 text-red-700 mt-4 px-4 py-3 max-w-md rounded relative"
                        role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ $message }}</span>
                        <span id="close-error" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                    </div>
                @enderror


                <button type="submit"
                    class="mt-4 mr-2 p-2 px-10 bg-brown text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-brown hover:text-brown hover:duration-200 rounded-full">
                    SUBMIT
                </button>
                <button type="reset"
                    class="mt-4 p-2 px-10 bg-brown text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-brown hover:text-brown hover:duration-200 rounded-full">
                    RESET
                </button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#close-error').on('click', function() {
                $('#error-message').hide();
            });
        });
    </script>

    </html>
@endsection
