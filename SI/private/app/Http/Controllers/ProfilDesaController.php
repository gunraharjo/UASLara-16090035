<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Helpers\Log;
use App\Http\Requests\ProfilRequest;
use Auth;
use Yajra\Datatables\Datatables;

class ProfilDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profil= Profil::orderBy('created_at','desc')-> paginate(1);;
        return view('admin.profildesa.create_profil_desa',compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        return view('admin.profildesa.tambah_profil_desa');
        return redirect('profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfilRequest $request)
 
    {
        //
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'TAMBAH PROFILE');
        $input = $request->all();

        Profil::create($input);
        return redirect('profil');

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
            
        $profil = \App\Profil::find($id);
        return view('admin.profildesa.edit_profil_desa',compact('profil')); 
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
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'EDIT PROFIL DESA');
        $profil = Profil::findOrFail($id);
        $input = $request->all();

        $profil->update($input);
        return redirect('/profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'DELETE PROFILE');
        $profil = Profil::findOrFail($id);
        $profil->delete();
        return redirect('profil');
    }
}
