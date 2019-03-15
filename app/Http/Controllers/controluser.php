<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Mglob;

class controluser extends Controller
{
    function index(){
        $user =  User::all();
        return view('data.data_user',compact('user'));
    }
    function input(){
        $user = Mglob::Get_Row_Empty('users');
        return view('form.form_user',compact('user'));
    }
    function edit($id){
        $user = User::where("id",$id)->first();
        return view('form.form_user',compact('user'));
    }    
    function save(Request $req){
        if($req->file('avatar')){
            $foto = $req->file('avatar');
            $nama_foto = date('m-Y-').$foto->getClientOriginalName();
        } else {
            $nama_foto = $req->get('old_avatar');
        }
        if($req->get('id')==""){
            // Simpan Ke Tabel Anggota
            $user = new User([
                'name' => $req->get('name'),
                'alamat' => $req->get('alamat'),
                'telp' => $req->get('telp'),
                'email' => $req->get('email'),
                'password' => Hash::make($req->get('password')),
                'avatar' => $nama_foto,
            ]);
            $user->save();
        } else {
            $user = user::where("id",$req->get('id'));  
            $user->update([
                'name' => $req->get('name'),
                'alamat' => $req->get('alamat'),
                'telp' => $req->get('telp'),
                'email' => $req->get('email'),
                'password' => $req->get('password') != "" ? Hash::make($req->get('password')) : $req->get('old_password'),
                'avatar' => $nama_foto,            
            ]);
        }
        // Upload setelah data anggota tersimpan
        if($req->file('avatar')){
            $foto->move(public_path()."/img", $nama_foto);
        }
        return redirect('user');
    }
    function delete($id){
        $user = User::where("id",$id);        
        $user->delete();
        return redirect('user');
    }  
}
