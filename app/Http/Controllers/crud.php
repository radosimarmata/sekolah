<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class crud extends Controller
{
    public function index(){
        $hasil = User::all();

        return view('lihatdata',['liat'=>$hasil]);
   }
}
