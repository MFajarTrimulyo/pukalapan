<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $renders = User::latest()->paginate(5);
        return view('admin.list_user.index', compact('renders'));
    }

    public function edit(string $id){

        $renders = User::findOrFail($id);
        return view('admin.list_user.edit', compact('renders'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        

        //get post by ID
        $renders = User::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $foto = $request->file('image');
            $foto->storeAs('public/profil/foto', $image->hashName());

            //delete old image
            Storage::delete('public/profil/foto/'.$dokters->image);

            //update post with new image
            $dokters->update([
                'foto'     => $foto->hashName(),
                'name'     => $request->name,
                'email'   => $request->email,
                'password' => $request->password,
                'role'   => $request->role,
                'activation' => $request->activation,
    
            ]);

        } else {

            //update post without image
            $dokters->update([
                'name'     => $request->name,
                'email'   => $request->email,
                'password' => $request->password,
                'role'   => $request->role,
                'activation' => $request->activation,                
            ]);
        }

        //redirect to index
        return redirect()->route('admin.list_user.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

}
