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
        
        <div class="" id="form-input">
            <div class="mt-4 mb-2">
                <label for="file" class="block mb-1 text-3xl text-brown font-bebas">FOTO PROFILE</label>
                <hr class="w-56">
                <input type="file" id="foto" class="w-56 mt-4 text-brown border-2 border-brown bg-lightbrown">
            </div>
    
            <div class="flex space-x-6">
                
                <div class="mt-2 mb-2">
                    <label for="file" class="mb-1 text-3xl text-brown font-bebas">NAMA</label>
                    <hr class="w-72">
                    <input type="text" id="nama" class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-lightbrown placeholder-brown placeholder-opacity-75" placeholder="Enter your name here">
                </div>
        
                <div class="mt-2 mb-2">
                    <label for="text" class="mb-1 text-3xl text-brown font-bebas">USERNAME</label>
                    <hr class="w-72">
                    <input type="text" id="username" class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-lightbrown placeholder-brown placeholder-opacity-75" placeholder="Enter your username here">
                </div>
            </div>

            <div class="mt-2 mb-2">
                    <label for="text" class="mb-1 text-3xl text-brown font-bebas"></label>
                    <hr class="w-72">
                    <input type="text" id="username" class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-lightbrown placeholder-brown placeholder-opacity-75" placeholder="Enter your username here">
                </div>
            </div>
    
            <div class="mt-2 mb-2">
                <label for="email" class="mb-1 text-3xl text-brown font-bebas">EMAIL</label>
                <hr class="w-72">
                <input type="text" id="email" class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-lightbrown placeholder-brown placeholder-opacity-75" placeholder="Enter your email here">
            </div>
    
            <div class="mt-2 mb-2">
                <label for="username" class="mb-1 text-3xl text-brown font-bebas">PASSWORD</label>
                <hr class="w-72">
                <input type="text" id="password" class="w-72 mt-4 p-1 text-brown font-medium border-2 border-brown bg-lightbrown placeholder-brown placeholder-opacity-75" placeholder="Enter your password here">
            </div>
            <button type="button" class="mt-6 p-2 px-5 bg-lightbrown text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-lightbrown hover:text-lightbrown hover:duration-200 rounded-full" ><a href="">ADD ACCOUNT</a></button>
        </div>

        <div class="w-40 h-40 ml-24 bg-slate-400 rounded-full"></div>
    </div>
        
    </body>
    </html>
@endsection