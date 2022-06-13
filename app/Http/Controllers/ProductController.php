<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Barang;

class ProductController extends Controller
{
   public function index () {
       $barangs = Barang::all();
       $data = array('title' => 'Product');

       return view('products.index', $data , compact(['barangs']));
    }

    public function create () {

         return view('products.create');
     }

     public function store (Request $request) {

        Barang::create($request->all());
        return redirect('/products');
    }

    public function edit ($id) {

        $barang = Barang::find($id);
        return view('products.edit' , compact(['barang']));
    }

    public function update (Request $request,$id) {

        $barang = Barang::find($id);
        $barang->update($request->all());
        return redirect('/products');
    }

    public function destroy ($id) {

        $barang = Product::find($id);
        $barang->delete();
        return redirect('/products');
    }
}
