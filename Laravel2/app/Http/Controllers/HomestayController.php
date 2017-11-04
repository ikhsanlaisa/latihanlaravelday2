<?php

namespace App\Http\Controllers;

use App\homestay;
use App\Saldo;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homestay = homestay::all();
        $saldo = Saldo::all();
        return view('homestay.lihatdata')->with(['homstay'=>$homestay, 'saldo'=>$saldo]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homestay.insHomestay');
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
            return view('homestay.insHomestay', compact('home'));
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
        return view('homestay.edit', compact('homestay'));
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

        return redirect('homestay.lihatdata');
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
        return redirect('homestay.lihatdata');
    }
}
