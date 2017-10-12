<?php

namespace App\Http\Controllers;

use App\homestay;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\HttpException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class insHomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('insHomestay');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $home = new homestay();
        $home->nama = $request->input('nama');
        $home->alamat = $request->input('alamat');
        $home->no_telp = $request->input('no_telp');
        $home->deskrpsi = $request->input('deskrpsi');
        $home->harga = $request->input('harga');
        $home->status = $request->input('status');
        if($home->save()){
            throw new HttpResponseException(new JsonResponse(['Success input data'], Response::HTTP_INTERNAL_SERVER_ERROR));
        }else{
            throw new HttpResponseException(new JsonResponse(['Fail input data'], Response::HTTP_INTERNAL_SERVER_ERROR));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homestay = homestay::find($id);
        return view('edit', compact('homestay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homestay = homestay::find($id);
        $homestay->nama = $request->input('nama');
        $homestay->alamat = $request->input('alamat');
        $homestay->no_telp = $request->input('no_telp');
        $homestay->deskrpsi = $request->input('deskrpsi');
        $homestay->harga =$request->input('harga');
        $homestay->status =$request->input('status');
        $homestay->save();

        return redirect('homestay');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homestay = homestay::find($id);
        $homestay->delete();
        return redirect('homestay');
    }
}
