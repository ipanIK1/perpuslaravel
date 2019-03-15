<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;
use App\Manggota;
use App\Mkoleksi;

class controlreport extends Controller
{
    function report_anggota(){
        $anggota = Manggota::all();
        $content = view('report.report_anggota',compact('anggota'));

        $pdf = new MPdf([
            'orientation'=>"L",
            'format'=>"Folio"
        ]);

        $pdf->WriteHTML($content);
        $pdf->Output(public_path().'/Laporan Anggota.pdf','I');

        return view('report.report_anggota',compact('anggota'));
    }
    

    function report_qrcode(){
        $buku = Mkoleksi::all();

        $content = view('report.report_qrcode',compact('buku'));

        $pdf = new MPdf([
            'orientation'=>"P",
            'format'=>"Folio"
        ]);

        $pdf->WriteHTML($content);
        $pdf->Output(public_path().'/Laporan QR Code Buku.pdf','I');

    }

}
