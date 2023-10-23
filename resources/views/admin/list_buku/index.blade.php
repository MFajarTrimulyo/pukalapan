@extends('admin.layouts.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Dashboard</title>
    </head>

    <body>
        <h1 class="text-3xl text-center w-full mb-10 p-4 py-2 rounded-lg bg-brown text-white font-black">LIST BUKU</h1>
        <button type="button" onclick="location.href='{{ route('buku.create') }}'"
            class="mb-1 p-2 px-5 bg-bgbtn text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-bgbtn hover:text-bgbtn hover:duration-200 rounded-full">TAMBAH
            BUKU</button>
        <hr class="my-3">
        <table class="w-full bg-white shadow-md rounded my-6">
            <thead class="bg-brown text-white">
                <tr>
                    <th class="py-2 px-4">No</th>
                    <th class="py-2 px-4">Kode</th>
                    <th class="py-2 px-4">Sampul</th>
                    <th class="py-2 px-4">Judul</th>
                    <th class="py-2 px-4">Kategori</th>
                    <th class="py-2 px-4">Author</th>
                    <th class="w-60 py-2 px-4">Sinopsis</th>
                    <th class="py-2 px-4">Jumlah</th>
                    <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($renders as $item)
                    <tr class="{{ $loop->odd ? 'bg-gray-100' : 'bg-gray-200' }}">
                        <td class="py-2 px-4 text-center">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4">{{ $item->kd_buku }}</td>
                        <td class="py-2 px-4"><img class="w-24 rounded" src="{{ asset('/storage/bukus/' . $item->foto) }}">
                        </td>
                        <td class="py-2 px-4">{{ $item->judul_buku }}</td>
                        <td class="py-2 px-4">{{ $item->kategori_bukus->nama_kategori }}</td>
                        <td class="py-2 px-4">{{ $item->author }}</td>
                        <td class="py-2 px-4">{!! Str::limit($item->sinopsis, 50) !!}</td>
                        <td class="py-2 px-4">{{ $item->stock }}</td>
                        <td class="py-2 px-4 text-center relative">
                            <button class="text-blue-500 hover:underline menu-button">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul
                                class="hidden bg-white text-gray-600 border border-gray-300 py-1 px-2 absolute top-8 right-0 z-10 space-y-1 menu">
                                <li>
                                    <a href="{{ route('buku.edit', $item->id) }}"
                                        class="flex items-center hover:text-blue-500">
                                        <i class="fas fa-edit mr-2"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('buku.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah anda yakin?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center hover:text-red-500">
                                            <i class="fas fa-trash mr-2"></i> Delete
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <div class="mt-4 flex justify-between">
            <div class="w-1/2">
                @if ($renders->onFirstPage())
                    <span class="px-4 font-medium py-1 bg-gray-200 text-gray-600 rounded-md cursor-not-allowed"
                        aria-disabled="true">Previous</span>
                @else
                    <a href="{{ $renders->previousPageUrl() }}"
                        class="px-3 font-medium py-1 bg-brown text-white rounded-md hover:bg-white hover:text-brown">Previous</a>
                @endif
            </div>
            <div class="w-1/2 text-right">
                @if ($renders->hasMorePages())
                    <a href="{{ $renders->nextPageUrl() }}"
                        class="px-4 font-medium py-1 bg-brown text-white rounded-md hover:bg-white hover:text-brown">Next</a>
                @else
                    <span class="px-3 font-medium py-1 bg-gray-200 text-gray-600 rounded-md cursor-not-allowed"
                        aria-disabled="true">Next</span>
                @endif
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".menu-button").click(function(e) {
                    e.stopPropagation(); // Mencegah event klik mencapai dokumen
                    $(".menu").not($(this).next(".menu")).addClass("hidden");
                    $(this).next(".menu").toggleClass("hidden");
                });

                $(document).click(function(e) {
                    if (!$(e.target).hasClass("menu-button") && !$(e.target).hasClass("menu")) {
                        $(".menu").addClass("hidden");
                    }
                });
            });
        </script>
    </body>

    </html>
@endsection
