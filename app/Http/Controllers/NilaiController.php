<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
   	public function input(){
        return view('nilai.index');
		$n = compact(['nama']);
		$i = compact(['nilai']);
    }
    public function proses(Request $request){
        $name = $request->input('$n');
        $nilai = $request->input('$i');
		
		if($nilai > 90){
            echo "Nama $name predikat A ";
        }else if($nilai > 80){
            echo "Nama $name predikat B ";
        }else if($nilai > 70){
            echo "Nama $name predikat C ";
        }else if($nilai > 60){
            echo "Nama $name predikat D ";
        }else{
            echo "Nama $name predikat E ";
        }
		
		return view('nilai.hasil');
    }
}
