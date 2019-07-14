@extends('admin.dashboard')
@section('content')

  

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="col-md-6">
                        <h2>Tambah PROFIL DESA</h2>
                    </div>
                    <div class="col-md-6">

                      <a class="btn btn-primary" href="{{url('/profil/create')}}" style="float: right;">Tambah Data Profil Desa</a>
                    </div>                     
                    <br>
                </div>
                <div class="body">
                  <table class="table table-striped">

                  </table>
               
                     
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                    <tr>
                                    
                                    <th>KEPALA DESA</th>
                                    <th>TENTANG KEPALA DESA </th>
                                    
                                    <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                   
                                    @foreach($profil as $pf)
                                    <tr>
                                     
                                      <td>{{ $pf->kepala }}</td>
                                      <td>{{ $pf->sejarah }}</td>
                                     
                                      <td>
                                          <div class="col-md-12">
                                              <a href="{{ url('/profil/'.$pf->id.'/edit')}}" class="btn btn-warning">DETAIL PROFIL</a> 
                                              <br>
                                              <br>
                                          {{--  <div class="col-md-3">
                                            {{ link_to('#' . $pend->nik . '/edit', 'Edit', ['class' => 'btn btn-warning  btn-sm']) }}
                                          </div>  --}}
                                          <div class="col-md-3">
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['ProfilDesaController@destroy', $pf->id],'id'=>'delete']) !!}
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
    </div>
    <!-- #END# Basic Validation -->

    

@endsection
