@extends('admin.dashboard')
@section('content')

<form method="post" action="{{url('blog')}}" enctype="multipart/form-data">
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Tambah Berita</h2>

                </div>
                <div class="body">
               
                      {!! Form::open(['url' => 'blog', 'files' => true]) !!}
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      @if ($errors -> any())
                      <div class="{{ $errors -> has('judul') ? 'has-error' : 'has-success' }}">
                        @else
                        <div class="">
                          @endif
                          {!! Form::label('judul', 'JUDUL BERITA: ', ['class' => 'control-label']) !!}
                          {!! Form::text('judul', null, ['class' => 'form-control']) !!}
                    
                          @if ($errors -> has('judul'))
                            <span class="help-block">{{ $errors -> first('judul') }}</span>
                          @endif
                        </div>

                      @if ($errors -> any())
                      <div class="{{ $errors -> has('sisiberita') ? 'has-error' : 'has-success' }}">
                        @else
                        <div class="">
                          @endif
                          {!! Form::label('isiberita', 'ISI BERITA: ', ['class' => 'control-label']) !!}
                          {!! Form::textarea('isiberita', null, ['class' => 'form-control']) !!}
                    
                          @if ($errors -> has('isiberita'))
                            <span class="help-block">{{ $errors -> first('isiberita') }}</span>
                          @endif
                        </div>

                        @if($errors -> any())
    <div class="body {{ $errors -> has('foto') ? 'has-error' : 'has-success'}}">
	@else
	<div class="body">
		@endif
		{!! Form::label('foto', 'Gambar Berita : ') !!}
		{!! Form::file('foto') !!}
		@if($errors->has('foto'))
		<span class="help-block">{{ $errors->first('foto') }}</span>
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