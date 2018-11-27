<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Auth, Session, Redirect;
use Mytuta;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        if($request->hasFile('foto'))
        {
          $upload = Mytuta::uploadImage($request->file('foto'), 'products', 512, null);
          $product->foto = $upload;
        }
        $product->save();

        Session::flash('message', 'Product has been saved');
        return Redirect::to('admin/product');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        if($request->hasFile('foto'))
          {
            $upload = Mytuta::uploadImageEdit($request->file('foto'), 'products', $product->foto, 512, null);
            $product->foto = $upload;
          }
        $product->save();
        Session::flash('message', 'product has been updated');
        return Redirect::to('admin/product');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('message', 'Product telah dihapus');
        return Redirect::to('admin/product');
    }
}
