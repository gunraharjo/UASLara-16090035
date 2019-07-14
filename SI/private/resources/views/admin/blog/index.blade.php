@extends('admin.dashboard')
@section('content')
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
              <div class="col-md-6">
                  <h2>
                    Berita Desa
                    </h2>
              </div>
                
                <div class="col-md-6">
                    <a class="btn btn-primary" href="{{url('/blog/create')}}" style="float: right;">Tambah Berita Desa</a>
                  </div>                     
                  
              <br>
            </div>
    <section class="body">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                      <div class="row col-md-12">
                        
                      
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Judul Berita</th>
                              <th>Isi Berita</th>
                              <th>Foto</th>
                              <th>Tanggal</th>
                              <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_berita as $berita)
                            <tr>
                              <td>{{ $berita->judul }}</td>
                              <td>{{ $berita->isiberita }}</td>
                              <td>
                                <img src="{{ './'.$berita->foto }}" alt="foto" style="max-height: 50px">
                              </td>
                              <td>{{ $berita->created_at->format('d-m-Y')}}</td>
                              <td>
                                 <div class="col-md-3">
                                   {{ link_to('/blog/' . $berita->id . '/edit', 'Edit', ['class' => 'btn btn-warning  btn-sm']) }}
                                 </div>
                                 <div class="col-md-3">
                                   {!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@destroy', $berita->id], 'id' => 'delete']) !!}
                                   {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                   {!! Form::close() !!}
                                 </div>
                              </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection