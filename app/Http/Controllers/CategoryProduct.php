<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use App\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_status();

class CategoryProduct extends Controller
{
    //
    public function addCategoryProduct(){
//        var_dump("123");
//        echo "1";
        return view('pages.admin.add_category_product');
    }

    public function allCategoryProduct(){
        $allCategoryProduct = DB::table('category_product')->orderByRaw('category_code ASC')->get();
        $managerCategoryProduct = view('pages.admin.all_category_product')->with('categories',$allCategoryProduct);
        return view('pages.admin_layout')->with('pages.admin.all_category_product',$managerCategoryProduct);
    }

    public function saveCategoryProduct(Request $req){
        $data = array();
//        $data['product_type'] = $req->product_type;
        $data['category_code'] = $req->category_code;
        $data['category_name'] = $req->category_name;
//        $data['product_unit'] = $req->product_unit;
//        $data['product_price'] = $req->product_price;
        $data['category_description'] = $req->category_description;
        $data['category_status'] = $req->category_status;

        DB::table('category_product')->insert($data);

        Session::put('msg','Thêm danh mục mặt hàng thành công');
        return Redirect::to('add-category-product');
    }

    public function editCategoryProduct($categoryId){
//        echo $productId;
        $editCategoryProduct = DB::table('category_product')->where('category_id',$categoryId)->get();
        $managerCategoryProduct = view('pages.admin.edit_category_product')->with('category',$editCategoryProduct);
//        var_dump($managerCategoryProduct);
        return view('pages.admin_layout')->with('pages.admin.edit_category_product',$managerCategoryProduct);
    }

    public function updateCategoryProduct(Request $req, $categoryId){
        $data = array();
//        $data['product_type'] = $req->product_type;
        $data['category_code'] = $req->category_code;
        $data['category_name'] = $req->category_name;
//        $data['product_unit'] = $req->product_unit;
//        $data['product_price'] = $req->product_price;
        $data['category_description'] = $req->category_description;
        $data['category_status'] = $req->category_status;

        DB::table('category_product')->where('category_id',$categoryId)->update($data);
        Session::put('msg','Cập nhật danh mục mặt hàng thành công');
        return Redirect::to('all-category-product');
    }

    public function deleteCategoryProduct($categoryId){
        DB::table('category_product')->where('category_id',$categoryId)->delete();
        Session::put('msg','Xóa danh mục mặt hàng thành công');
        return Redirect::to('all-category-product');
    }

}
