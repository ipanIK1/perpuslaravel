<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BukuReq;
use Illuminate\Support\Facades\DB;
use App\Mglob;
use App\Mbuku;

class controldashboard extends Controller
{
     function index(){
         $buku = DB::select('select count(*) as jumlah from tb_buku');
         $jumlahbuku = $buku[0]->jumlah;
         $anggota = DB::select('select count(*) as jumlah from tb_anggota');
         $jumlahanggota = $anggota[0]->jumlah;
         $user = DB::select('select count(*) as jumlah from users');
         $jumlahuser = $user[0]->jumlah;
         $pinjam = DB::select('select COUNT(*) AS Jumlah from tb_peminjaman where tgl_pinjam=DATE(NOW())');
        $harian = $pinjam[0]->Jumlah;
        $pinjemm = DB::select('select COUNT(*) AS Jumlah from tb_peminjaman where month(tgl_pinjam)=month(curdate())');
        $bulanan = $pinjemm[0]->Jumlah;
        $order = DB::select('select tb_peminjaman.no_pinjam,tb_anggota.nama,tb_buku.judul,tb_peminjaman.tgl_pinjam from tb_peminjaman,tb_anggota,tb_buku,tb_koleksi_buku where tb_peminjaman.no_anggota=tb_anggota.no_anggota and tb_peminjaman.no_induk_buku=tb_koleksi_buku.no_induk_buku and tb_koleksi_buku.kd_buku=tb_buku.kd_buku order by tgl_pinjam desc LIMIT 7;
        ');
        $tpbuku = DB::select('SELECT tb_buku.kd_buku,tb_buku.judul,tb_penerbit.kd_penerbit,tb_penerbit.nama_penerbit,
        tb_buku.tempat_terbit,tb_buku.tahun_terbit,tb_buku.cover FROM tb_buku,tb_pengarang,tb_penerbit,tb_kategori  WHERE tb_buku.kd_pengarang = tb_pengarang.kd_pengarang AND tb_buku.kd_penerbit=tb_penerbit.kd_penerbit AND tb_buku.kd_kategori = tb_kategori.kd_kategori order by kd_buku desc LIMIT 4;');
        return view('dashboard', compact('jumlahbuku','jumlahanggota','jumlahuser','harian','bulanan','order','tpbuku'));
     }   
}
