<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mrak;
use App\Mglob;

class controlrak extends Controller
{
    function index(){
        $rak = Mrak::all();
        return view('data.data_rak',compact('rak'));
    }

    function input(){
        $rak = Mglob::Get_Row_Empty('tb_rak');
        
        return view('form.form_rak',compact('rak'));
    }

    function edit($id){
        $rak = Mrak::where("kd_rak",$id)->first();
        return view('form.form_rak',compact('rak'));
    }

    function delete($id){
        $rak = Mrak::where("kd_rak",$id);        
        $rak->delete();
        return redirect('rak');
    }
    function save(Request $req){

 
        if($req->get('kd_rak')==""){
            // Generate No Induk Buku
            $newid = DB::select('SHOW TABLE STATUS LIKE "tb_kategori"');
            $norak = "A".sprintf('%04d',$newid[0]->Auto_increment).date('mY');
           // Proses SImpan
           $rak = new Mrak([
                'nama_rak'=> $req->get('nama_rak'),
                                 
           ]);
           $rak->save();
        } else{
            $rak = Mrak::where("kd_rak",$req->get('kd_rak'));
            $rak -> update([
            'nama_rak'=> $req->get('nama_rak'),
                            
            ]);
        }
    return redirect('/rak');        
    
    }
}
