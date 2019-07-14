@extends('admin.dashboard')
@section('content')

  

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="col-md-6">
                        <h2>Tambah Sejarah Desa</h2>
                    </div>
                    <div class="col-md-6">

                      <a class="btn btn-primary" href="{{url('/sejarah/create')}}" style="float: right;">Tambah Sejarah Desa</a>
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
                                   
                                    <th>SEJARAH DESA </th>
                                    
                                    <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                   
                                    @foreach($sejarah as $sj)
                                    <tr>
                                     
                                      
                                      <td>{{ $sj->sejarah }}</td>
                                     
                                      <td>
                                          <div class="col-md-12">
                                              <a href="{{ url('/sejarah/'.$sj->id.'/edit')}}" class="btn btn-warning">DETAIL SEJARAH</a> 
                                              <br>
                                              <br>
                                          {{--  <div class="col-md-3">
                                            {{ link_to('#' . $pend->nik . '/edit', 'Edit', ['class' => 'btn btn-warning  btn-sm']) }}
                                          </div>  --}}
                                          <div class="col-md-3">
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['SejarahDesaController@destroy', $sj->id],'id'=>'delete']) !!}
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
