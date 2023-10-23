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
            <form action="{{route('buku.store')}}"method="POST" enctype="multipart/form-data">
            <div class="">
                <div class="mt-2 mb-2">
                    <label for="kode" class="mb-1 text-3xl text-brown font-bebas">KODE BUKU</label>
                    <hr class="w-72">
                    <input type="text" class="invalid"
                        class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                        placeholder="Enter your book code here">
                </div>

                <div class="mt-4 mb-2 ">
                        <label for="foto" class="mb-1 text-3xl text-brown font-bebas">FOTO BUKU</label>
                        <hr class="w-72">
                        <input type="file" id="imagebuku"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75">
                </div>

                <div class="flex space-x-6">
                    <div class="mt-2 mb-2">
                        <label for="judul" class="mb-1 text-3xl text-brown font-bebas">JUDUL BUKU</label>
                        <hr class="w-72">
                        <input type="text" id="judul"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your book title here">
                    </div>

                    <div class="mt-2 mb-2">
                        <label for="author" class="mb-1 text-3xl text-brown font-bebas">AUTHOR</label>
                        <hr class="w-72">
                        <input type="text" id="author"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your book author here">
                    </div>

                    
                    <div class="mt-2 mb-2">
                        <label for="kategori" class="mb-1 text-3xl text-brown font-bebas">KATEGORI</label>
                        <hr class="w-72">
                        <select class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100" name="" id="">
                            <option value="SEJARAH">SEJARAH</option>
                            <option value="FIKSI">FIKSI</option>
                            <option value="KOMIK">KOMIK</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 mb-2">
                        <label for="sinopsis" class="mb-1 text-3xl text-brown font-bebas">SINOPSIS</label>
                        <hr class="w-72 mb-4">
                        <textarea class="w-full mt-4 p-1 text-brown font-medium border-2 border-brown bg-white placeholder-brown placeholder-opacity-75" name="sinopsis" rows="5" placeholder="Enter your synopsis here"></textarea>
                    </div>
                <button type="submit"
                    class="mt-4 p-2 px-10 bg-brown text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-brown hover:text-brown hover:duration-200 rounded-full">
                    SUBMIT
                </button>
            </div>
            </form>
        </div>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'sinopsis' );
</script>
    </body>
    </html>
@endsection
