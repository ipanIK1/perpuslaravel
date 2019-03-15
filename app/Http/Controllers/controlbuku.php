<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mglob;
use App\Mbuku;
use App\Mpengarang;
use App\Mpenerbit;
use App\Mkategori;




class controlbuku extends Controller
{
    function index(){
        $buku = DB::select('SELECT tb_buku.kd_buku,tb_buku.judul,tb_pengarang.nama_pengarang,tb_penerbit.nama_penerbit,
        tb_buku.tempat_terbit,tb_buku.tahun_terbit,tb_kategori.nama_kategori,tb_buku.halaman,tb_buku.edisi,
        tb_buku.ISBN FROM tb_buku,tb_pengarang,tb_penerbit,tb_kategori 
        WHERE tb_buku.kd_pengarang = tb_pengarang.kd_pengarang AND tb_buku.kd_penerbit=tb_penerbit.kd_penerbit AND
        tb_buku.kd_kategori = tb_kategori.kd_kategori');
        return view('data.data_buku',compact('buku'));
    }

    function input(){
        $buku = Mglob::Get_Row_Empty('tb_buku');
        $pengarang = Mpengarang::all();
        $penerbit = Mpenerbit::all();
        $kategori = Mkategori::all();
        return view('form.form_buku',compact('buku','pengarang','penerbit','kategori'));
    }

    function edit($id){
        $buku = Mbuku::where("kd_buku",$id)->first();
        $pengarang = Mpengarang::all();
        $penerbit = Mpenerbit::all();
        $kategori = Mkategori::all();
        return view('form.form_buku',compact('buku','pengarang','penerbit','kategori'));
    }

    function save(Request $req){

        if($req->file('foto')){
            $foto = $req->file('foto');
            $nama_foto = date('m-Y-').$foto->getClientOriginalName();
        } else {
            $nama_foto = $req->get('old_foto');
        }

        if($req->get('kd_buku')==""){
            // Tambahkan Validasi buat sendiri

             // Simpan Ke Tabel Buku
            $anggota = new Mbuku([
                'judul' => $req->get('judul'),
                'kd_pengarang' => $req->get('pengarang'),
                'kd_penerbit' => $req->get('penerbit'),
                'tempat_terbit' => $req->get('tempat_terbit'),
                'tahun_terbit' => $req->get('tahun_terbit'),
                'kd_kategori' => $req->get('kategori'),
                'halaman' => $req->get('halaman'),
                'edisi' => $req->get('edisi'),
                'ISBN' => $req->get('isbn'),
                'cover' => $nama_foto,
            ]);
            $anggota->save();
        } else {
            $anggota = Mbuku::where("kd_buku",$req->get('kd_buku'));  
            $anggota->update([
                'judul' => $req->get('judul'),
                'kd_pengarang' => $req->get('pengarang'),
                'kd_penerbit' => $req->get('penerbit'),
                'tempat_terbit' => $req->get('tempat_terbit'),
                'tahun_terbit' => $req->get('tahun_terbit'),
                'kd_kategori' => $req->get('kategori'),
                'halaman' => $req->get('halaman'),
                'edisi' => $req->get('edisi'),
                'ISBN' => $req->get('isbn'),
                'cover' => $nama_foto,             
            ]);
        }

        // Upload setelah data anggota tersimpan
        if($req->file('foto')){
            $foto->move(public_path()."/img", $nama_foto);
        }

        return redirect('buku');
    }

    function delete($id){
        $anggota = Mbuku::where("kd_buku",$id);        
        $anggota->delete();
        return redirect('buku');
    }    

}
