<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $berita = DB::table('beritas')
            ->join('tags', 'beritas.id_tag', '=', 'tags.id')
            ->select('tags.tag', 'tags.id as tag_id', 'beritas.*',)
            ->orderByDesc('id')
            ->get();

        $tag = Tag::get();

        return view('welcome', compact('berita', 'tag'));
    }

    public function show($slug)
    {

        // untuk nav
        $berita = DB::table('beritas')
            ->join('tags', 'beritas.id_tag', '=', 'tags.id')
            ->select('tags.tag', 'tags.id as tag_id', 'beritas.*')
            ->orderByDesc('id')
            ->get();

        // untuk show
        $show = DB::table('beritas')
            ->join('users', 'beritas.id_user', '=', 'users.id')
            ->select('beritas.*', 'users.name',)
            ->where('slug', $slug)
            ->first();

        $tag = Tag::get();

        return view('pages.read', compact('berita', 'show', 'tag'));
    }

    public function find($tag)
    {
        $berita = DB::table('tags')
            ->join('beritas', 'tags.id', '=', 'beritas.id_tag')
            ->select('tags.*', 'beritas.*')
            ->where('tag', $tag)
            ->get();

        $tag = Tag::get();

        return view('pages.kategori', compact('berita', 'tag'));
    }

    public function all()
    {
        $berita = Berita::get();

        $tag = Tag::get();

        return view('pages.kategori', compact('berita', 'tag'));
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        if ($cari == null) {
            $cari = 'a';
        }

        $berita = DB::table('tags')
            ->join('beritas', 'tags.id', '=', 'beritas.id_tag')
            ->select('tags.*', 'beritas.*')
            ->where('judul_berita', 'like', "%" . $cari . "%")
            ->get();

        $tag = Tag::get();

        return view('pages.kategori', compact('berita', 'tag'));
    }
}
