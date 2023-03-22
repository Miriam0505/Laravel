<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table_heros;

class table_herosController extends Controller
{
   public function index (){
    $page_title = "Superheroes";
    $superheros = table_heros::all();
    return view ('superheros', compact('page_title', 'superheros'));
   }
   public function index_woman (){
    $page_title = "Superheroes - Only Famale Members";
    $women = table_heros::where('gender','=', 'Female')->get();
    return view ('superheros_women', compact('page_title', 'women'));
   }
   public function index_man (){
    $page_title = "Superheroes - Only Male Menbers";
    $Men = table_heros::where('gender','=', 'Male')->get();
    return view ('superheros_men', compact('page_title', 'men'));
   }

}