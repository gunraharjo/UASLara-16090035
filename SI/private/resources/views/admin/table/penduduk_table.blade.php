@extends('admin.dashboard')
@section('content')
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
              <div class="col-md-6">
                  <h2>
                      DATA PENDUDUK
                    </h2>
              </div>
                
                <div class="col-md-6">
                    <a class="btn btn-primary" href="{{url('/penduduk/create')}}" style="float: right;">Tambah Penduduk Desa</a>
                  </div>                     
                  
              <br>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                    <tr>
                                    <th>NIK </th>
                                    <th>NAMA</th>
                                    <th>TEMPAT LAHIR</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>ALAMAT</th>
                                    <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                   
                                    @foreach($penduduk as $pend)
                                    <tr>
                                      <td>{{ $pend->nik }}</td>
                                      <td>{{ $pend->nama }}</td>
                                      <td>{{ $pend->tempat_lahir }}</td>
                                      <td>{{ $pend->tanggal_lahir }}</td>
                                      <td>{{ $pend->jenis_kelamin }}</td>
                                      <td>{{ $pend->alamat }}</td>
                                      <td>
                                        
                                        <div class="col-md-12">
                                          <a href="{{ url('/penduduk/'.$pend->nik.'/edit')}}" class="btn btn-warning">DETAIL PENDUDUK</a> 
                                          <br>
                                          <br>
                                          
                                          <div class="col-md-3">
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['PendudukController@destroy', $pend->nik],'id'=>'delete']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                          </div>
                                          
                                        </div>
                                      </td>
                                    </tr>
                                    @endforeach
                                    
                       </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->  
@endsection

    

    