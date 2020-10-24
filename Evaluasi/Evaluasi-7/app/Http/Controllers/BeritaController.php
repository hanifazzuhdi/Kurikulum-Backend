<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class BeritaController extends Controller
{
    public function index()
    {
        $data = DB::table('beritas')
            ->join('tags', 'beritas.id_tag', '=', 'tags.id')
            ->join('users', 'beritas.id_user', '=', 'users.id')
            ->select('tags.tag', 'users.name', 'beritas.*',)
            ->paginate(6);

        // $data = Berita::paginate(6);

        return view('admin.home', compact('data'));
    }

    public function create()
    {
        $tag = DB::table('tags')->get();
        $user = DB::table('users')->get();

        return view('admin.create', compact('tag', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'required|mimes:jpeg,png,jpg'
        ]);

        // validasi gambar
        $image = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('image'), $image);

        // Create Berita
        Berita::create([
            'judul_berita' => $request->judul_berita,
            'slug' => Str::slug($request->judul_berita . '-' . Str::random(4) . '-' . now(), '-'),
            'thumbnail' => $image,
            'deskripsi' => $request->deskripsi,
            'id_tag' => $request->id_tag,
            'id_user' => $request->id_user
        ]);

        return redirect('/admin')->with('status', 'Berita Berhasil ditambahkan');
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('admin.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        $tag = DB::table('tags')->get();
        return view('admin.edit', compact('berita', 'tag'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'required|mimes:jpeg,png,jpg'
        ]);

        $image = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('image'), $image);

        Berita::where('id', $berita->id)->update([
            'judul_berita' => $request->judul_berita,
            'slug' => Str::slug($request->judul_berita . '-' . Str::random(4) . '-' . now(), '-'),
            'thumbnail' => $image,
            'deskripsi' => $request->deskripsi,
            'id_tag' => $request->id_tag
        ]);

        return redirect('/admin')->with('status', 'Berita Berhasil diubah');
    }

    public function destroy(Berita $berita)
    {
        Berita::destroy($berita->id);
        return redirect('/admin')->with('status', 'Berita Berhasil dihapus');
    }
}
