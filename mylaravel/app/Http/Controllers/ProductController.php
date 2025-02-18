<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductList;

class ProductController extends Controller
{
    //
    function index(){
        $c = Categories::with('products')->get();
        return view('product', compact('c'));
    }

    function store(Request $req){
        // print_r($req);
        $c = new Categories();
        $c->name = $req->category;
        $c->save();

        foreach($req->product_name as $value){
            $p = new ProductList();
            $p->name = $value;
            $p->category_id = $c->id;
            $p->user_id = session()->get('user')->id;
            $p->save();
        }
        return redirect('/product');
    }
}
