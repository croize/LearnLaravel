<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
   	public function input(){
        return view('nilai.index');
    }
    public function proses(Request $request){
        $namet = $request->nama; //nama dari form
        $nilait = $request->nilai;
		
		if($nilait >= 90){
            $ket = "A";
        }else if($nilait >= 80){
            $ket = "B";
        }else if($nilait >= 70){
            $ket = "C";
        }else if($nilait >= 60){
            $ket = "D";
        }else{
            $ket = "E";
        }
		
		return view('nilai.hasil', compact("namet","nilait","ket"));
		/*gausah pake $*/
    }
}
