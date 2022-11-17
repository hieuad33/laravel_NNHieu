<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(15)->get();

        return view('pages.home')->with('all_product',$all_product); /*->with('category',$cate_product)->with('brand',$brand_product)*/
    }
}
