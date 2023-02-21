<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    public function index()
    {
        $data = DB::table('tbl_users')->get();

        return view('user.index',compact('data'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function insert(Request $request)
    {
        $tambah_data = DB::table('tbl_users')->insert([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if($tambah_data){
            return redirect('/user/index');
        }else{
            return 'Gagal!';
        }
    }

    public function edit($id)
    {
        $data = DB::table('tbl_users')->where('id', $id)->first();
        // dd($data);
        return view('user.edit',compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('tbl_users')->where('id', $request->id)
        ->update([
            'username' => $request->username,
            'password' => $request->password
        ]);

        return redirect('/user/index');
    }

    public function delete($id)
    {
        DB::table('tbl_users')->where('id', $id)->delete();
        
        return redirect('/user/index');
    }
}
