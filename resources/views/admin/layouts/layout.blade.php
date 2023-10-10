<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    @vite('public/css/app.css')
    <style type="text/tailwindcss"></style>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- ICON -->
    <script src="https://kit.fontawesome.com/f7091fe396.js" crossorigin="anonymous"></script>

    <!-- TEXT AREA EDITOR -->
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</head>
<body>
  <!-- component -->
<div class="h-screen w-full p-5 relative flex overflow-hidden" style="background-image: url({{asset('img/picture.png')}});"> {{-- style="background-image: url({{asset('img/picture.png')}});" --}}
  <div class="w-full h-full flex flex-col justify-between">
    <nav class="relative flex w-full flex-wrap items-center justify-between h-20 mb-4 p-4 item-center rounded-lg bg-brown">
      <img class="w-36" src="{{asset('img/logo.png')}}" alt="">
      
    </nav>
    <!-- Main -->
    <main class="max-w-full h-full flex relative overflow-y-hidden">
      <!-- Container -->
      <div class="h-full w-full mr-4 flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-">

        <!-- Sidebar -->
        <aside class="h-full w-auto p-4 flex flex-col items-left justify-left relative rounded-lg bg-white text-brown">
          <!-- Profile -->
          
          <a href="{{route('admin.user.index')}}">
            <div class="h-10 w-auto p-2 items-center justify-center rounded-lg cursor-pointer text-brown hover:text-white hover:bg-brown  hover:duration-200 hover:ease-linear focus:bg-lightbrown">
              <i class="fa-solid fa-user"></i>
              <span class="ml-2 text-sm font-bold">LIST USER</span>
            </div>
          </a>
          
          <a href="{{route('admin.buku.index')}}">
            <div class="h-10 w-auto p-2 items-center justify-center rounded-lg cursor-pointer text-brown hover:text-white hover:bg-brown  hover:duration-200 hover:ease-linear focus:bg-lightbrown">  
              <i class="fa-solid fa-book"></i>
              <span class="ml-2 text-sm font-bold">LIST BUKU</span>
            </div>
          </a>
          
          
          <div class="h-10 w-auto p-2 items-center justify-center rounded-lg cursor-pointer text-brown hover:text-white hover:bg-brown  hover:duration-200 hover:ease-linear focus:bg-lightbrown">
            <i class="fa-solid fa-book"></i>
            <span class="ml-2 text-sm font-bold">LIST PEPUSTAKAAN</span>
          </div>
        </aside> 

        <div class="h-full rounded-lg p-5 -mr-4 ml-4 flex-shrink-0 flex-grow bg-white overflow-y-scroll">
        @yield('content')
        </div>
      </div>
    </main>
  </div>
</div>
</body>
</html>