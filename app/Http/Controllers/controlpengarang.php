<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mpengarang;
use App\Mglob;

class controlpengarang extends Controller
{
    function index(){
        $pengarang = Mpengarang::all();
        return view('data.data_pengarang',compact('pengarang'));
    }

    function input(){
        $pengarang = Mglob::Get_Row_Empty('tb_pengarang');
        
        return view('form.form_pengarang',compact('pengarang'));
    }

    function edit($id){
        $pengarang = Mpengarang::where("kd_pengarang",$id)->first();
        return view('form.form_pengarang',compact('pengarang'));
    }

    function delete($id){
        $pengarang = Mpengarang::where("kd_pengarang",$id);        
        $pengarang->delete();
        return redirect('pengarang');
    }
    function save(Request $req){

 
        if($req->get('kd_pengarang')==""){
            // Generate No Induk Buku
            $newid = DB::select('SHOW TABLE STATUS LIKE "tb_kategori"');
            $nopengarang = "A".sprintf('%04d',$newid[0]->Auto_increment).date('mY');
           // Proses SImpan
           $pengarang = new Mpengarang([
                'nama_pengarang'=> $req->get('nama_pengarang'),
                                 
           ]);
           $pengarang->save();
        } else{
            $pengarang = Mpengarang::where("kd_pengarang",$req->get('kd_pengarang'));
            $pengarang -> update([
            'nama_pengarang'=> $req->get('nama_pengarang'),
                            
            ]);
        }
    return redirect('/pengarang');        
    
    }
}
