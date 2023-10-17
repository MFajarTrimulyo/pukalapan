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
        <button type="button" onclick="location.href='{{route('buku.create')}}'" class="mb-1 p-2 px-5 bg-bgbtn text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-bgbtn hover:text-bgbtn hover:duration-200 rounded-full" >TAMBAH BUKU</button>
        <hr class="my-3">
        <table class="w-full text-sm text-center">
            <thead class="bg-brown bg-opacity-10 uppercase text-brown">
                <tr>
                    <th class="border border-r-lightbrown" scope="col">No</th>
                    <th class="border border-r-lightbrown" scope="col">Kode Buku</th>
                    <th class="border border-r-lightbrown" scope="col">Foto Buku</th>
                    <th class="border border-r-lightbrown" scope="col">Judul Buku</th>
                    <th class="border border-r-lightbrown" scope="col">Kategori Buku</th>
                    <th class="border border-r-lightbrown" scope="col">Author</th>
                    <th class="border border-r-lightbrown" scope="col">Sinopsis</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="font-medium">
                @forelse ($renders as $item)
                    <tr class="odd:bg-white even:bg-slate-100">
                        <td class="border border-r-lightbrown text-semibrown">{{ $loop->iteration }}</td>
                        <td class="border border-r-lightbrown text-semibrown">{{ $item->kd_buku }}</td>
                        <td class="border border-r-lightbrown text-semibrown">
                            <img src="{{asset('storage/bukus/'. $item->foto)}}" alt="" class="rounded w-28" >
                        </td>
                        <td class="border border-r-lightbrown text-semibrown">{{ $item->judul_buku }}</td>
                        <td class="border border-r-lightbrown text-semibrown">{{ $item->kategori }}</td>
                        <td class="border border-r-lightbrown text-semibrown">{{ $item->author }}</td>
                        <td class="border border-r-lightbrown text-semibrown">{{ $item->sinopsis }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah anda yakin?')" action="{{route('buku.destroy', $item->id)}}" method="POST"></form>
                            <a href="{{route('buku.edit', $item->id)}}" class="text-semibrown hover:text-bgbtn hover:duration-200"><i class="fa-solid fa-pencil"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-semibrown hover:text-red-600 hover:duration-200">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
                
            </tbody>
        </table>
        {{ $renders->links()}}
</body>
</html>
@endsection