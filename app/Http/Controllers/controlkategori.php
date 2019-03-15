<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mkategori;
use App\Mglob;
use App\Mkoleksi;

class controlkategori extends Controller
{
    function index(){
        $kategori = Mkategori::all();
        return view('data.data_kategori',compact('kategori'));
    }

    function input(){
        $kategori = Mglob::Get_Row_Empty('tb_kategori');
        
        return view('form.form_kategori',compact('kategori'));
    }

    function edit($id){
        $kategori = Mkategori::where("kd_kategori",$id)->first();
        return view('form.form_kategori',compact('kategori'));
    }

    function delete($id){
        $kategori = Mkategori::where("kd_kategori",$id);        
        $kategori->delete();
        return redirect('kategori');
    }
    function save(Request $req){

 
        if($req->get('kd_kategori')==""){
            // Generate No Induk Buku
            $newid = DB::select('SHOW TABLE STATUS LIKE "tb_kategori"');
            $nokategori = "A".sprintf('%04d',$newid[0]->Auto_increment).date('mY');
           // Proses SImpan
           $kategori = new Mkategori([
                'nama_kategori'=> $req->get('nama_kategori'),
                'singkatan' => $req->get('singkatan'),                 
           ]);
           $kategori->save();
        } else{
            $kategori = Mkategori::where("kd_kategori",$req->get('kd_kategori'));
            $kategori -> update([
            'nama_kategori'=> $req->get('nama_kategori'),
            'singkatan' => $req->get('singkatan'),                 
       ]);
        }
              
        
    
    return redirect('/kategori');        
}
}