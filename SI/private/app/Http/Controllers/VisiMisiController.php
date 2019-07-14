<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\VisimisiRequest;
use App\VisiMisi;
use App\Helpers\Log;
use Auth;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visimisi= VisiMisi::orderBy('created_at','desc')-> paginate(2);
        return view('admin.visimisi.create_visi_misi',compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.visimisi.tambah_visi_misi');
        return redirect('visimisi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisimisiRequest $request)
    {
        //
           //
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'TAMBAH VISI MISI');
        $input = $request->all();

        VisiMisi::create($input);
        return redirect('visimisi');
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
        //
        
        $visimisi = \App\VisiMisi::find($id);
        return view('admin.visimisi.edit',compact('visimisi')); 
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
        //
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'EDIT VISI MISI');
        $visimisi = VisiMisi::findOrFail($id);
        $input = $request->all();

        $visimisi->update($input);
        return redirect('/visimisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'DELETE VISI MISI');
        $visimisi = VisiMisi::findOrFail($id);
        $visimisi->delete();
        return redirect('visimisi');
    }
}
