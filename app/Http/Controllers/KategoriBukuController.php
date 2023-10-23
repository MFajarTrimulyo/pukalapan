<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriBukuController extends Controller
{
    public function index(): View{
        $renders = KategoriBuku::latest()->paginate(6);
        return view('admin.list_buku.kategori.index', compact('renders'));
    }

    public function create():View {
        return view('admin.list_buku.kategori.create');
    }

    public function store(Request $request): RedirectResponse {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        KategoriBuku::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        session()->flash('success', 'Form submitted successfully.');

        return redirect()->route('kategori.index');
    }

    public function edit(String $id): View {
        $render = KategoriBuku::findOrFail($id);
        return view('admin.list_buku.kategori.edit', compact('render'));
    }

    public function update(Request $request, $id): RedirectResponse {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        $render = KategoriBuku::findOrFail($id);

        $render->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        session()->flash('success', 'Form updated successfully.');

        return redirect()->route('kategori.index');
    }

    public function destroy($id):RedirectResponse {
        $render = KategoriBuku::findOrFail($id);

        $render->delete();

        session()->flash('success', 'Form deleted successfully.');
        return redirect()->route('kategori.index');
    }
}
