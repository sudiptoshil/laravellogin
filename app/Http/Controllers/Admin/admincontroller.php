<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class admincontroller extends Controller
{
    public function index()
    {
    	return view('admin.admin_login');
    }

    public function admin_dashboard(Request $request)
    {   
    	$admin_email    = $request->admin_email; 
    	$admin_password = $request->admin_password; 

    	$result = DB::table('admins')
    	->where('admin_email',$admin_email)
    	->where('admin_password',md5($admin_password))
    	->first();
    	if ($result) {
    		Session::put('admin_id',$result->id);
    		Session::put('admin_name',$result->admin_name);
    		return view('admin.admin_master');
    	}
    	else {
    		return redirect('admin-login')->with('message','admin name and email invalid!');

    		// Session::put('message',"admin information doesnot match!");
    	}
    	
    }
}
