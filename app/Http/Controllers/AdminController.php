<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use App\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_status();

class AdminController extends Controller
{
    public function index(){
        return view('pages.admin_login');
    }

    public function showDashboard(){
        return view('pages.admin.dashboard');
    }

    public function dashboard(Request $request){
         $admin_email = $request->username;
         $admin_password = md5($request->password);

         $result = DB::table('tbl_admin')
             ->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
//         echo '<pre>';
//         print_r($result);
//        echo '</pre>';
         if($result){
             Session::put('admin_name',$result->admin_name);
             Session::put('admin_id',$result->admin_id);
             return Redirect::to('/dashboard');
//             var_dump(Session::get('admin_id'));
         }else{
             Session::put('msg',"Tài khoản hoặc mật khẩu sai. Vui lòng nhập lại!");
             return Redirect::to('/admin');
         }
    }

    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
