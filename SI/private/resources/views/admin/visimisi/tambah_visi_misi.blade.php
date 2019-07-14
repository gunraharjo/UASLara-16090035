@extends('admin.dashboard')
@section('content')

  
<form method="post" action="{{url('visimisi')}}" enctype="multipart/form-data">
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="col-md-6">
                        <h2>Tambah Visi Misi</h2>
                    </div>
                  
                </div>
                <div class="body">
                  <table class="table table-striped">

                  </table>
               
                      {!! Form::open(['url' => 'visimisi', 'files' => true]) !!}
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                     
                      
                         
                                
                                @if ($errors -> any())
                                <div class="{{ $errors -> has('visi') ? 'has-error' : 'has-success' }}">
                                  @else
                                  <div class="">
                                    @endif
                                    {!! Form::label('vivi', 'VISI: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('visi', null, ['class' => 'form-control']) !!}
                              
                                    @if ($errors -> has('visi'))
                                      <span class="help-block">{{ $errors -> first('visi') }}</span>
                                    @endif
                                  </div>

                                  @if ($errors -> any())
                                  <div class="{{ $errors -> has('misi') ? 'has-error' : 'has-success' }}">
                                    @else
                                    <div class="">
                                      @endif
                                      {!! Form::label('misi', 'MISI: ', ['class' => 'control-label']) !!}
                                      {!! Form::textarea('misi', null, ['class' => 'form-control'])!!}
                                
                                      @if ($errors -> has('misi'))
                                        <span class="help-block">{{ $errors -> first('misi') }}</span>
                                      @endif
                                    </div>
                                
                                
                                 
                                 
                                  



                         <br> 
                        <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                        
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->

    

@endsection
