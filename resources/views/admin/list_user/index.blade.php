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
        <h1 class="text-3xl text-center w-full mb-10 p-4 py-2 rounded-lg bg-brown text-white font-black">LIST USER</h1> 
        <button type="button" onclick="location.href='{{route('admin.user.create')}}'" class="mb-1 p-2 px-5 bg-bgbtn text-sm text-white font-bold hover:bg-white hover:border-solid border-2 border-bgbtn hover:text-bgbtn hover:duration-200 rounded-full" >TAMBAH AKUN</button>
        <hr class="my-3">
        <table class="w-full text-sm text-center">
            <thead class="bg-brown bg-opacity-10 uppercase text-brown">
                <tr>
                    <th class="border border-r-lightbrown" scope="col">No</th>
                    <th class="border border-r-lightbrown" scope="col">Foto Profil</th>
                    <th class="border border-r-lightbrown" scope="col">Nama</th>
                    <th class="border border-r-lightbrown" scope="col">Username</th>
                    <th class="border border-r-lightbrown" scope="col">Email</th>
                    <th class="border border-r-lightbrown" scope="col">Password</th>
                    <th class="border border-r-lightbrown" scope="col">Activation</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="font-medium">
                <tr class="odd:bg-white even:bg-slate-100">
                    <td class="border border-r-lightbrown text-semibrown">1</td>
                    <td class="border border-r-lightbrown text-semibrown">7112323476</td>
                    <td class="border border-r-lightbrown text-semibrown">7112323476</td>
                    <td class="border border-r-lightbrown text-semibrown">7112323476</td>
                    <td class="border border-r-lightbrown text-semibrown">7112323476</td>
                    <td class="border border-r-lightbrown text-semibrown">7112323476</td>
                    <td class="border border-r-lightbrown text-semibrown">7112323476</td>
                    <td>
                        <a href="#" class="text-semibrown hover:text-bgbtn hover:duration-200"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" class="text-semibrown hover:text-red-600 hover:duration-200"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
</body>
</html>
@endsection