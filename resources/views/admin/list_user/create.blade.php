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

        <div class="flex flex-col">

            <div class="">
                <div class="mt-2 mb-2 ">
                        <label for="text" class="mb-1 text-3xl text-brown font-bebas">PHOTO PROFILE</label>
                        <hr class="w-72">
                        <input type="file" id="image"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your image here">
                </div>

                <div class="flex space-x-6">
                    <div class="mt-2 mb-2">
                        <label for="file" class="mb-1 text-3xl text-brown font-bebas">NAMA</label>
                        <hr class="w-72">
                        <input type="text" id="nama"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your name here">
                    </div>

                    <div class="mt-2 mb-2">
                        <label for="text" class="mb-1 text-3xl text-brown font-bebas">USERNAME</label>
                        <hr class="w-72">
                        <input type="text" id="username"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your username here">
                    </div>
                </div>

                <div class="flex space-x-6">
                    <div class="mt-2 mb-2">
                        <label for="email" class="mb-1 text-3xl text-brown font-bebas">EMAIL</label>
                        <hr class="w-72">
                        <input type="text" id="email"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your email here">
                    </div>

                    <div class="mt-2 mb-2">
                        <label for="username" class="mb-1 text-3xl text-brown font-bebas">PASSWORD</label>
                        <hr class="w-72">
                        <input type="text" id="username"
                            class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-slate-100 placeholder-brown placeholder-opacity-75"
                            placeholder="Enter your password here">
                    </div>
                </div>
                <button type="button"
                        class="mt-20 p-2 px-5 bg-brown text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-brown hover:text-brown hover:duration-200 rounded-full"><a
                            href="">ADD ACCOUNT</a></button>
            </div>
        </div>

<script>
    CKEDITOR.replace( 'content' );
</script>
    </body>

    </html>
@endsection
