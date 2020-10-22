<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$product = Product::paginate(7);
        //return view('admin.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaBarang'  => 'required',
            'hargaBarang' => 'required'
        ]);

        /* CARA PANJANG
        || ====================================
        || $db_field = new Product();
        || $db_field->namaBarang = $request->namaBarang;
        || $db_field->hargaBarang = $request->hargaBarang;
        || $db_field->save();
        || ====================================
        */


        $product = new Product();

        $product->namaBarang = $request->namaBarang;
        $product->slug = Str::slug($request->namaBarang . '-' . Str::random(7), '-');
        $product->hargaBarang = $request->hargaBarang;

        $product->save();

        // CARA CEPAT
        // Product::create($request->all());

        return redirect('/home')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('admin.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'namaBarang' => 'required',
            'hargaBarang' => 'required'
        ]);

        // CARA PERTAMA
        $product->namaBarang    = $request->namaBarang;
        $product->hargaBarang   = $request->hargaBarang;
        $product->slug          = Str::slug($request->namaBarang . '-' . Str::random(7), '-');

        $product->save();

        /* CARA KEDUA
        // ==============================================
        //  Product::where('id', $product->id)
        //     ->update([
        //         "namaBarang" => $request->namaBarang,        // <== Cara Baca = Carikan id di tabel product yang id nya sama dengan id $student
        //         "hargaBarang" => $request->hargaBarang
        //     ]);
        // ==============================================
        */

        return redirect("/home")->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect('/home')->with('status', 'Data Berhasil Dihapus');
    }
}
