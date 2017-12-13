<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mlatihan;
use Session;
use App\Http\Requests\ArticleRequest;

class Latihan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mlatihan::all();
        return view('isimenu.pesan')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("isimenu.contact");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $data = new Mlatihan;

        $data->email = $request->email;
        $data->pesan = $request->pesan;

        $data->save();

        return redirect()->route('pesan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mlatihan::all();
        $pesan = Mlatihan::find($id); 
        return view('isimenu.detail')->with(array('data' => $data, 'detail' => $pesan));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mlatihan::all();
        $pesan = Mlatihan::find($id); 
        return view('isimenu.edit')->with(array('data' => $data, 'detail' => $pesan));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $email = $request->email;
        $pesan = $request->pesan;
        $data = Mlatihan::where('id',$id)->update(array('email' => $email, 'pesan' => $pesan));
        return redirect()->route('pesan.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mlatihan::find($id);
        $data->delete();
        Session::flash("notice", "data berhasil di hapus");
        return redirect()->route('pesan.index');
    }
}
