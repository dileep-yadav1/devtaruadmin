<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_detail;
use DB;
use App\Http\Requests;

class UserController extends Controller
{
    function index()
    {
        $data = User_detail::all();
        return view('user.index',['users'=>$data]);
    }

    function delete($id)
    {
        $data = User_detail::find($id);
        $data->delete();
        return redirect('user');
    }

    function edituser($id)
    {
        $data = User_detail::find($id);
        return view('user.edit',['user'=>$data]);
    }

    function update(Request $request)
    {
        $data = User_detail::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->role=$request->role;
        $data->save();
        return redirect('user');
    }


    function adduser()
    {
        return view('user.add');
    }

    function insert(Request $request)
    {
        $name     = $request->input('name');
        $email    = $request->input('email');
        $mobile   = $request->input('mobile');
        $password = $request->input('password');
        $role     = $request->input('role');

        $data     = array('name'=>$name,"email"=>$email,"mobile"=>$mobile,"password"=>$password,"role"=>$role);
        DB::table('user_details')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add_user">Click Here</a> to go back.';
    }
}
