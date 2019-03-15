<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mpenerbit;
use App\Mglob;

class controlpenerbit extends Controller
{
    function index(){
        $penerbit = Mpenerbit::all();
        return view('data.data_penerbit',compact('penerbit'));
    }

    function input(){
        $penerbit = Mglob::Get_Row_Empty('tb_penerbit');
        
        return view('form.form_penerbit',compact('penerbit'));
    }

    function edit($id){
        $penerbit = Mpenerbit::where("kd_penerbit",$id)->first();
        return view('form.form_penerbit',compact('penerbit'));
    }

    function delete($id){
        $penerbit = Mpenerbit::where("kd_penerbit",$id);        
        $penerbit->delete();
        return redirect('penerbit');
    }
    function save(Request $req){

 
        if($req->get('kd_penerbit')==""){
            // Generate No Induk Buku
            $newid = DB::select('SHOW TABLE STATUS LIKE "tb_kategori"');
            $nopenerbit = "A".sprintf('%04d',$newid[0]->Auto_increment).date('mY');
           // Proses SImpan
           $penerbit = new Mpenerbit([
                'nama_penerbit'=> $req->get('nama_penerbit'),
                                 
           ]);
           $penerbit->save();
        } else{
            $penerbit = Mpenerbit::where("kd_penerbit",$req->get('kd_penerbit'));
            $penerbit -> update([
            'nama_penerbit'=> $req->get('nama_penerbit'),
                            
            ]);
        }
    return redirect('/penerbit');        
    
    }
}
