<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }

    public function index()
    {
        $produk = Product::all();

        if (count($produk) > 0) {
            return $this->sendResponse(true, "Data Loaded", $produk, 200);
        }
        return $this->sendResponse(false, "Data Empty !", NULL, 400);
    }

    public function show($id)
    {
        $produk = Product::find($id);

        if ($produk) {
            return $this->sendResponse(true, "Data Loaded", $produk, 200);
        }
        return $this->sendResponse(false, "Data Not Exist !", NULL, 400);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'active' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendResponse(false, "Require All Field !", NULL, 400);
        };

        $produk = new Product();
        $produk->name = $request->name;
        $produk->price = $request->price;
        $produk->quantity = $request->quantity;
        $produk->active = $request->active;
        $produk->description = $request->description;

        if (!$produk->save()) {
            return $this->sendResponse(false, "Product Add Failed", NULL, 400);
        }
        return $this->sendResponse(true, "Data Success Added", $produk, 202);
    }

    public function update(Request $request, $id)
    {

        $produk = Product::find($id);

        // dd($produk);

        if ($produk) {
            $produk->name = $request->name ? $request->name : $produk->name;
            $produk->price = $request->price ? $request->price : $produk->price;
            $produk->quantity = $request->quantity ? $request->quantity : $produk->quantity;
            $produk->active = $request->active ? $request->active : $produk->active;
            $produk->description = $request->description ? $request->description : $produk->description;

            $produk->save();

            // echo $produk;
            // die();

            return $this->sendResponse(true, "Data Success Updated", $produk, 202);
        }

        return $this->sendResponse(false, "Data Update Failed !", NULL, 400);
    }

    public function destroy($id)
    {
        $produk = Product::find($id);

        if ($produk) {
            Product::destroy($id);

            return $this->sendResponse(true, "Product Deleted", $produk, 200);
        }

        return $this->sendResponse(false, "Data Not Exist !", NULL, 400);
    }
}
