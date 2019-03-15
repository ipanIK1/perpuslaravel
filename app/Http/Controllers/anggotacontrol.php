<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Manggota;
use App\Mglob;

class anggotacontrol extends Controller
{
    function index(){
        $anggota = Manggota::all();
        return view('data.data_anggota',compact('anggota'));
    }

    function input(){
        $anggota = Mglob::Get_Row_Empty('tb_anggota');
        return view('form.form_anggota',compact('anggota'));
    }

    function edit($id){
        $anggota = Manggota::where("kd_anggota",$id)->first();
        return view('form.form_anggota',compact('anggota'));
    }

    function save(Request $req){

        if($req->file('foto')){
            $foto = $req->file('foto');
            $nama_foto = date('m-Y-').$foto->getClientOriginalName();
        } else {
            $nama_foto = $req->get('old_foto');
        }

        if($req->get('kd_anggota')==""){
            $newid = DB::select('SHOW TABLE STATUS LIKE "tb_anggota"');
            $noanggota = "A".sprintf('%04d',$newid[0]->Auto_increment).date("mY");

            // Simpan Ke Tabel Anggota
            $anggota = new Manggota([
                'no_anggota' => $noanggota,
                'nama' => $req->get('nama'),
                'tempat' => $req->get('tempat'),
                'tgl_lahir' => date("Y-m-d",strtotime($req->get('tgl_lahir'))),
                'jk' => $req->get('jk'),
                'alamat' => $req->get('alamat'),
                'kota' => $req->get('kota'),
                'telp' => $req->get('telp'),
                'email' => $req->get('email'),
                'user_name' => $req->get('user_name'),
                'user_password' => md5($req->get('user_password')),
                'foto' => $nama_foto,
                'status'=>1
            ]);
            $anggota->save();
        } else {
            $anggota = Manggota::where("kd_anggota",$req->get('kd_anggota'));  
            $anggota->update([
                'nama' => $req->get('nama'),
                'tempat' => $req->get('tempat'),
                'tgl_lahir' => date("Y-m-d",strtotime($req->get('tgl_lahir'))),
                'jk' => $req->get('jk'),
                'alamat' => $req->get('alamat'),
                'kota' => $req->get('kota'),
                'telp' => $req->get('telp'),
                'email' => $req->get('email'),
                'user_name' => $req->get('user_name'),
                'user_password' => $req->get('user_password')!="" ? md5($req->get('user_password')) : $req->get('old_password'),
                'foto' => $nama_foto,
                'status'=>1               
            ]);
        }

        // Upload setelah data anggota tersimpan
        if($req->file('foto')){
            $foto->move(public_path()."/img", $nama_foto);
        }

        return redirect('anggota');
    }

    function delete($id){
        $anggota = Manggota::where("kd_anggota",$id);        
        $anggota->delete();
        return redirect('anggota');
    }
    
   
}
