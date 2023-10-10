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
                <div class="mt-2 mb-2">
                    <label for="text" class="mb-1 text-3xl text-brown font-bebas">KODE BUKU</label>
                    <hr class="w-72">
                    <input type="text" id="kodebuku"
                        class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                        placeholder="Enter your book code here">
                </div>

                <div class="mt-4 mb-2 ">
                        <label for="text" class="mb-1 text-3xl text-brown font-bebas">FOTO BUKU</label>
                        <hr class="w-72">
                        <input type="file" id="imagebuku"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75">
                </div>

                <div class="flex space-x-6">
                    <div class="mt-2 mb-2">
                        <label for="text" class="mb-1 text-3xl text-brown font-bebas">JUDUL BUKU</label>
                        <hr class="w-72">
                        <input type="text" id="judul"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your book title here">
                    </div>

                    <div class="mt-2 mb-2">
                        <label for="text" class="mb-1 text-3xl text-brown font-bebas">AUTHOR</label>
                        <hr class="w-72">
                        <input type="text" id="author"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your book author here">
                    </div>

                    
                    <div class="mt-2 mb-2">
                        <label for="username" class="mb-1 text-3xl text-brown font-bebas">KATEGORI</label>
                        <hr class="w-72">
                        <select class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100" name="" id="">
                            <option value="1">SEJARAH</option>
                            <option value="2">FIKSI</option>
                            <option value="3">KOMIK</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 mb-2">
                        <label for="email" class="mb-1 text-3xl text-brown font-bebas">SINOPSIS</label>
                        <hr class="w-72">
                        <textarea class="w-full mt-4 p-1 text-brown font-medium border-2 border-brown bg-white placeholder-brown placeholder-opacity-75" name="" id="" rows="5"></textarea>
                    </div>
                <button type="button"
                        class="mt-4 p-2 px-10 bg-brown text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-brown hover:text-brown hover:duration-200 rounded-full"><a
                            href="">SUBMIT</a></button>
            </div>
        </div>
    </body>

    </html>
@endsection
