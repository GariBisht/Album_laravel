<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index(){

        //$detail= Detail::all()->first();
        
     //   $detail = DB::table('details')->get();
        $details = Detail::get();
        
       // dd($details);
        return view('welcome' , ['details'=>$details]);    //variable name.. stores in array

    }

    

    public function detailPost(){
        return view("detail");      //detail is blade file in views if subfolder use "folder.file"
    }
}
