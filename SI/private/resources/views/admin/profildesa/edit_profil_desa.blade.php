@extends('admin.dashboard')
@section('content')

  


    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="col-md-6">
                        <h2>Edit Profil Desa</h2>
                    </div>
                  
                </div>
                <div class="body">
                  <table class="table table-striped">

                  </table>
                  {!! Form::model($profil, ['method'=>'patch', 'action'=>['ProfilDesaController@update', $profil->id]]) !!}
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                     
                      
                         
                                
                                @if ($errors -> any())
                                <div class="{{ $errors -> has('kepala') ? 'has-error' : 'has-success' }}">
                                  @else
                                  <div class="">
                                    @endif
                                    {!! Form::label('kepala', 'KEPALA DESA: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('kepala', null, ['class' => 'form-control']) !!}
                              
                                    @if ($errors -> has('kepala'))
                                      <span class="help-block">{{ $errors -> first('kepala') }}</span>
                                    @endif
                                  </div>

                                  @if ($errors -> any())
                                  <div class="{{ $errors -> has('sejarah') ? 'has-error' : 'has-success' }}">
                                    @else
                                    <div class="">
                                      @endif
                                      {!! Form::label('sejarah', 'sejarah: ', ['class' => 'control-label']) !!}
                                      {!! Form::textarea('sejarah', null, ['class' => 'form-control'])!!}
                                
                                      @if ($errors -> has('sejarah'))
                                        <span class="help-block">{{ $errors -> first('sejarah') }}</span>
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
