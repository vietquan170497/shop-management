<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    //
    public function addCategoryProduct(){
//        var_dump("123");
//        echo "1";
        return view('pages.admin.add_category_product');
    }
    public function allCategoryProduct(){

    }
}
