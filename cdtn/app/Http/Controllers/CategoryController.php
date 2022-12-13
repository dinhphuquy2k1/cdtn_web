<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function getPhone(){
        $products =  DB::table('products')->where('category_id', 1)->paginate(15);
        return view('users.PhonePage',['products'=> $products]);
    }
    public function getIpad(){
        $products =  DB::table('products')->where('category_id', 2)->paginate(15);
        return view('users.PhonePage',['products'=> $products]);
    }
    public function getAirpods(){
        $products =  DB::table('products')->where('category_id', 3)->paginate(15);
        return view('users.PhonePage',['products'=> $products]);
    }
}
