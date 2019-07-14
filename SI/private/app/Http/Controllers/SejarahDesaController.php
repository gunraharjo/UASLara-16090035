<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\SejarahRequest;
use App\Sejarah;
use App\Helpers\Log;
use Auth;


class SejarahDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sejarah= Sejarah::orderBy('created_at','desc')-> paginate(1);
        return view('admin.sejarahdesa.create_sejarah_desa',compact('sejarah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sejarahdesa.tambah_sejarah_desa');
        return redirect('sejarah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SejarahRequest $request)
    {
        //
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'TAMBAH SEJARAH DESA');
        $input = $request->all();

        sejarah::create($input);
        return redirect('sejarah');
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
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'HAPUS SEJARAH DESA');
        $sejarah = Sejarah::findOrFail($id);
        $sejarah->delete();
        return redirect('sejarah');
    }
}
