<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    // public function index(){

    //     //$detail= Detail::all()->first();
        
    //  //   $detail = DB::table('details')->get();
    //     $details = Detail::get();

    //    // dd($details);
    //     return view('welcome' , ['details'=>$details]);    //variable name.. stores in array

    // }


    // public function index(Request $request){
       
    // //     $details = Detail::get();
    // //   //  dd($details);
    // //     return view('detail', ['details' => $details]);
    // }



    public function detailPost(){


        $details = Detail::get();
        //  dd($details);
          return view('detail', ['details' => $details]);
       // return view("detail");      //detail is blade file in views if subfolder use "folder.file"
    }
}


// public function store(Request $request){
//     $request->validate([
//         'title' => 'required',
//         'excerpt' => 'required',
//         'content' => 'required',
//         'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image file
//     ]);

//     $detail = new Detail();
//     $detail->title = $request->title;
//     $detail->excerpt = $request->excerpt;
//     $detail->content = $request->content;

//     if ($request->hasFile('images')) {
//         $imagePaths = [];
//         foreach ($request->file('images') as $image) {
//             $imageName = time() . '_' . $image->getClientOriginalName();
//             $image->move(public_path('images'), $imageName);
//             $imagePaths[] = '/images/' . $imageName;
//         }
//         $detail->images = implode(',', $imagePaths);
//     }

//     $detail->save();

//     return redirect()->route('details.index');

// }




// @foreach(explode(',', $detail->images) as $image)
//     <img src="{{ $image }}" alt="Image">
// @endforeach