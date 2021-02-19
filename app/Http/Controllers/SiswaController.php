<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {   	
    	$siswa = DB::table('siswa')->get();
    	return view('index',['siswa' => $siswa]);
    }

    public function tambah()
    {
        
        return view('tambah');  
    }

    public function kursus(Request $request)
    {
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'status' => $request->status,
            'position' => $request->position
        ]);
        return redirect('/siswa');
    
    }

    public function edit($id)
    {
        $siswa = DB::table('siswa')->where('user_id',$id)->get();
        return view('edit',['siswa' => $siswa]);
    
    }

    public function update(Request $request)
    {
        DB::table('siswa')->where('user_id',$request->id)->update([
            'nama' => $request->nama,
            'status' => $request->status,
            'position' => $request->position
        ]);

        return redirect('/siswa');
    }
    public function hapus($id)
    {
        DB::table('siswa')->where('user_id',$id)->delete();
        return redirect('/siswa');
    }
}
