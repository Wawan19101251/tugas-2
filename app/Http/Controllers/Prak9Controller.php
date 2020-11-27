<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Prak9Controller extends Controller
{
    //Menampilkan jumlah data: count()
    public function QB_tugas1(){
        $JRekProduk = DB::table('produks')->count();
        $JRekProduk = DB::table('kategori')->count();
     
        return view('paktikum9.tugas1', ['JRekproduk'=>$Jrekproduk,'JRekkategori'=>$JRekkategori]);
    }


}
