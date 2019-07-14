<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\PendudukRequest;
use App\Penduduk;
use App\Helpers\Log;
use Auth;


class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    
    {
        
        $penduduk= Penduduk::orderBy('created_at','desc')->paginate(10);
        return view('admin.table.penduduk_table',compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_agama = [
            'Islam'      => 'Islam',
            'Kristen'    => 'Kristen',
            'Buddha'         => 'Buddha',
            'Hindu'       => 'Hindu',
            'Katolik'          => 'Katolik',
          ];
        return view('admin.table.create_penduduk',compact('list_agama'));
        
      
         
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendudukRequest $request)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'TAMBAH PENDUDUK');
        $input = $request->all();

        Penduduk::create($input);
        return redirect('penduduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        
        $penduduk = \App\Penduduk::find($nik);
        return view('admin.table.edit_penduduk',compact('penduduk')); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PendudukRequest $request, $nik)

    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'EDIT PENDUDUK');
        $penduduk = Penduduk::findOrFail($nik);
        $input = $request->all();

        $penduduk->update($input);
        return redirect('/penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        //
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'HAPUS PENDUDUK');
        $penduduk = Penduduk::findOrFail($nik);
        $penduduk->delete();
        return redirect('penduduk');
        

    }
  
}
