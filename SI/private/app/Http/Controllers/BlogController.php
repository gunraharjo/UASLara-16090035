<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Yajra\Datatables\Datatables;
use App\Http\Requests\BlogRequest;
use App\Helpers\Log;
use Auth;
use Storage;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //  $blog= Blog::orderBy('created_at','desc')->paginate(10);
        $list_berita = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.blog.index',compact('list_berita'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'TAMBAH BERITA');
        $input = $request->all();
        //validasi
        $this->validate($request, [
            'judul'     => 'required|max:50',
            'isiberita' => 'required|max:255',
            'foto'      => 'required|image|max:3000|mimes:jpeg,jpg,bmp,png'
          ]);
         //upload gambar
         if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
          }
        Blog::create($input);
        
        return redirect('blog');


      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadFoto(Request $request) {
        $foto = $request->file('foto');
        $ext  = $foto->getClientOriginalExtension();

        if($request->file('foto')->isValid()) {
          $foto_name   = 'foto/'.date('YmdHis'). ".$ext";
          $upload_path = 'foto';
          $request->file('foto')->move($upload_path, $foto_name);

          return $foto_name;
        }
        return false;
    }

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
        
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));

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
        
        $blog = Blog::findOrFail($id);
        $input = $request->all();

        //validasi
        // $this->validate($request, [
        //   'judul'     => 'required|max:50',
        //   'isiberita' => 'required|max:255',
        //   'foto'      => 'sometimes|image|max:3000|mimes:jpeg,jpg,bmp,png'
        // ]);

        if($request->hasFile('foto')) {
          //hapus foto lama
          $this->hapusFoto($blog);
          //upload foto baru
          $input['foto'] = $this->uploadFoto($request);
        }

        $blog->update($input);
        return redirect('/blog');
    }
    public function hapusFoto($blog) {
        $exist = Storage::disk('foto')->exists($blog->foto);
        if(isset($blog->foto) && $exist) {
          $delete = Storage::disk('foto')->delete($blog->foto);
          if($delete) {
            return true;
          }
          return false;
        }
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
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'HAPUS PENDUDUK');
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('blog');
    }
}
