<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Wisata::all();
        return view('admin.wisata.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jam' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:2048|required',
        ]);

        $wisata = Wisata::create($request->all());

        if ($files = $request->file('image')) {
            $profileImage = $wisata->id.'.jpg';
            $path = $files->storeAs('public/wisata', $profileImage);
            $url = Storage::url($path);
            $imgUrl = url($url);
            Wisata::find($wisata->id)->update(['image'=>$imgUrl]);
            return redirect()->route('wisata.index')->with('success','Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisatum)
    {
        $data = Kunjungan::all()->where('wisata',$wisatum->id);
        return view('admin.wisata.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $wisatum)
    {
        return view('admin.wisata.edit',compact('wisatum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $wisatum)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jam' => 'required',
            'deskripsi' => 'required',
        ]);

        $wisata = Wisata::find($wisatum->id)->update($request->all());

        return redirect()->route('wisata.index')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $wisatum)
    {
        Wisata::destroy($wisatum->id);
        return back()->with('success','Data berhasil dihapus!');
    }
}
