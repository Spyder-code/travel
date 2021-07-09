<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Wisata;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $wisata = Wisata::all()->sortByDesc('visitor')->take(6);
        return view('user.index',compact('wisata'));
    }

    public function detail_wisata(Wisata $wisata)
    {
        Wisata::find($wisata->id)->update([
            'visitor' => $wisata->visitor +1
        ]);
        $data = Kunjungan::all()->where('wisata',$wisata->id);
        return view('user.detail_wisata',compact('wisata','data'));
    }

    public function wisata()
    {
        $data = Wisata::all();
        return view('user.wisata',compact('data'));
    }

    public function search($nama)
    {
        $data = Wisata::where('nama','LIKE',"%{$nama}%")->get();
        return view('user.wisata',compact('data'));
    }
}
