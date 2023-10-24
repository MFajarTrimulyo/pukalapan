<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View{
        $renders = Buku::with('kategori_bukus')->paginate(3);
        return view('admin.list_buku.index', compact('renders'));
    }

    public function create(): View{
        $kategoris = KategoriBuku::all();
        return view('admin.list_buku.create', compact('kategoris'));
    }

    public function store(Request $request): RedirectResponse{
        $this->validate($request, [
            'kd_buku' => 'required|max:5',
            'foto' => 'required|image|mimes:jpg, jpeg, png',
            'judul_buku' => 'required',
            'kategoriId' => 'required|exists:kategori_bukus,id',
            'author' => 'required',
            'stock' => 'required|numeric',
            'sinopsis' => 'required',
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/bukus', $image->hashName());

        Buku::create([
            'kd_buku' => $request->kd_buku,
            'foto' => $image->hashName(),
            'judul_buku' => $request->judul_buku,
            'kategoriId' => $request->kategoriId,
            'author' => $request->author,
            'stock' => $request->stock,
            'sinopsis' => $request->sinopsis,
        ]);

        session()->flash('success', 'Form submitted successfully.');
        return redirect()->route('buku.index');
    }

    public function edit(String $id): View{
        $render = Buku::findOrFail($id);
        $kategoris = KategoriBuku::all();
        return view('admin.list_buku.edit', compact('render', 'kategoris'));
    }

    public function update(Request $request, $id): RedirectResponse{
        $this->validate($request, [
            'kd_buku' => 'required|max:5',
            'foto' => 'image',
            'judul_buku' => 'required',
            'kategoriId' => 'required|exists:kategori_bukus,id',
            'author' => 'required',
            'stock' => 'required|numeric',
            'sinopsis' => 'required',
        ]);

        $render = Buku::findOrFail($id);

        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $image->storeAs('public/bukus', $image->hashName());

            Storage::delete('public/bukus'. $render->foto);

            $render->update([
                'kd_buku' => $request->kd_buku,
                'foto' => $image->hashName(),
                'judul_buku' => $request->judul_buku,
                'kategoriId' => $request->kategoriId,
                'author' => $request->author,
                'stock' => $request->stock,
                'sinopsis' => $request->sinopsis,
            ]);
        }else{
            $render->update([
                'kd_buku' => $request->kd_buku,
                'judul_buku' => $request->judul_buku,
                'kategoriId' => $request->kategoriId,
                'author' => $request->author,
                'stock' => $request->stock,
                'sinopsis' => $request->sinopsis,
            ]);
        }

        session()->flash('success', 'Form updated successfully.');
        return redirect()->route('buku.index');
    }

    public function destroy($id): RedirectResponse{
        $render = Buku::findOrFail($id);

        Storage::delete('public/bukus'. $render->foto);

        $render->delete();

        session()->flash('success', 'Form deleted successfully.');
        return redirect()->route('buku.index');
    }
}
