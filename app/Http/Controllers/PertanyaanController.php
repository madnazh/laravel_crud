<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create () {
        return view ('pertanyaan.create');
    }

    public function store (Request $request) {
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul"=> $request["judul"],
            "isi"=> $request["isi"]
        ]);

        return redirect('/pertanyaan')->with('success','Pertanyaan Berhasil Disimpan!');
    }

    public function index () {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('pertanyaan.index' , compact('pertanyaan'));
    }
}
