<?php

namespace App\Http\Controllers;

use App\Models\Belajar;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
   public function index(){
      $data = Belajar::all();
    return view("siswa", compact("data"));
   }
}


