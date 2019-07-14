@extends('admin.dashboard')
@section('content')



        
        <form method="post" action="{{url('penduduk')}}" enctype="multipart/form-data">
          <!-- Basic Validation -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>Tambah Data Penduduk</h2>

                      </div>
                      <div class="body">
                     
                            {!! Form::open(['url' => 'penduduk', 'files' => true]) !!}
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @if ($errors -> any())
                            <div class="{{ $errors -> has('kk') ? 'has-error' : 'has-success' }}">
                              @else
                              <div class="">
                                @endif
                                {!! Form::label('kk', 'NO KK: ', ['class' => 'control-label']) !!}
                                {!! Form::text('kk', null, ['class' => 'form-control']) !!}
                          
                                @if ($errors -> has('kk'))
                                  <span class="help-block">{{ $errors -> first('kk') }}</span>
                                @endif
                              </div>

                            @if ($errors -> any())
                            <div class="{{ $errors -> has('nik') ? 'has-error' : 'has-success' }}">
                              @else
                              <div class="">
                                @endif
                                {!! Form::label('nik', 'NIK: ', ['class' => 'control-label']) !!}
                                {!! Form::text('nik', null, ['class' => 'form-control']) !!}
                          
                                @if ($errors -> has('nik'))
                                  <span class="help-block">{{ $errors -> first('nik') }}</span>
                                @endif
                              </div>
                              @if ($errors -> any())
                              <div class="{{ $errors -> has('nama') ? 'has-error' : 'has-success' }}">
                                @else
                                <div class="">
                                  @endif
                                  {!! Form::label('nama', 'NAMA: ', ['class' => 'control-label']) !!}
                                  {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                            
                                  @if ($errors -> has('nama'))
                                    <span class="help-block">{{ $errors -> first('nama') }}</span>
                                  @endif
                                </div>
                                @if ($errors -> any())
                                <div class="{{ $errors -> has('tempat_lahir') ? 'has-error' : 'has-success' }}">
                                  @else
                                  <div class="">
                                    @endif
                                    {!! Form::label('tempat_lahir', 'TEMPAT LAHIR: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
                              
                                    @if ($errors -> has('tempat_lahir'))
                                      <span class="help-block">{{ $errors -> first('tempat_lahir') }}</span>
                                    @endif
                                  </div>
                                  @if ($errors -> any())
                                  <div class="{{ $errors -> has('tangal_lahir') ? 'has-error' : 'has-success' }}">
                                    @else
                                    <div class="">
                                      @endif
                                      {!! Form::label('tanggal_lahir', 'TANGGAL LAHIR: ', ['class' => 'control-label']) !!}
                                      {!! Form::date('tanggal_lahir', null, ['class' => 'form-control']) !!}
                                
                                      @if ($errors -> has('tanggal_lahir'))
                                        <span class="help-block">{{ $errors -> first('tanggal_lahir') }}</span>
                                      @endif
                                    </div>
                                    @if ($errors -> any())
                                    <div class="{{ $errors -> has('jenis_kelamin') ? 'has-error' : 'has-success' }}">
                                      @else
                                      <div class="">
                                        @endif
                                        <h2 class="card-inside-title">JENIS KELAMIN:</h2>
                                        <div class="demo-radio-button">
                                            <input name="jenis_kelamin" value="L" type="radio" id="radio_1"  />
                                            <label for="radio_1">Laki-Laki</label>
                                            <input name="jenis_kelamin" value="P" type="radio" id="radio_2" />
                                            <label for="radio_2">Perempuan</label>
                                        @if ($errors -> has('jenis_kelamin'))
                                          <span class="help-block">{{ $errors -> first('jenis_kelamin') }}</span>
                                        @endif
                                        </div>
                                      </div>
                                      
                                      @if ($errors -> any())
                                      <div class="{{ $errors -> has('alamat') ? 'has-error' : 'has-success' }}">
                                        @else
                                        <div class="">
                                          @endif
                                          {!! Form::label('alamat', 'ALAMAT: ', ['class' => 'control-label']) !!}
                                          {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
                                    
                                          @if ($errors -> has('alamat'))
                                            <span class="help-block">{{ $errors -> first('alamat') }}</span>
                                          @endif
                                        </div>
                                        @if ($errors -> any())
                                      <div class="{{ $errors -> has('rt') ? 'has-error' : 'has-success' }}">
                                        @else
                                        <div class="">
                                          @endif
                                          {!! Form::label('rt', 'RT: ', ['class' => 'control-label']) !!}
                                          {!! Form::text('rt', null, ['class' => 'form-control']) !!}
                                    
                                          @if ($errors -> has('rt'))
                                            <span class="help-block">{{ $errors -> first('rt') }}</span>
                                          @endif
                                        </div>
                                        @if ($errors -> any())
                                      <div class="{{ $errors -> has('rw') ? 'has-error' : 'has-success' }}">
                                        @else
                                        <div class="">
                                          @endif
                                          {!! Form::label('rw', 'RW: ', ['class' => 'control-label']) !!}
                                          {!! Form::text('rw', null, ['class' => 'form-control']) !!}
                                    
                                          @if ($errors -> has('rw'))
                                            <span class="help-block">{{ $errors -> first('rw') }}</span>
                                          @endif
                                        </div>
                                        @if ($errors -> any())
                                      <div class="{{ $errors -> has('desa') ? 'has-error' : 'has-success' }}">
                                        @else
                                        <div class="">
                                          @endif
                                          {!! Form::label('desa', 'DESA: ', ['class' => 'control-label']) !!}
                                          {!! Form::text('desa', null, ['class' => 'form-control']) !!}
                                    
                                          @if ($errors -> has('desa'))
                                            <span class="help-block">{{ $errors -> first('desa') }}</span>
                                          @endif
                                        </div>
                                        @if ($errors -> any())
                                      <div class="{{ $errors -> has('kecamatan') ? 'has-error' : 'has-success' }}">
                                        @else
                                        <div class="">
                                          @endif
                                          {!! Form::label('kecamatan', 'KECAMATAN: ', ['class' => 'control-label']) !!}
                                          {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
                                    
                                          @if ($errors -> has('kecamatan'))
                                            <span class="help-block">{{ $errors -> first('kecamatan') }}</span>
                                          @endif
                                        </div>
                                        @if ($errors -> any())
                                        <div class="{{ $errors -> has('agama') ? 'has-error' : 'has-success' }}">
                                          @else
                                          <div class="">
                                            @endif
                                            <h2 class="card-inside-title">AGAMA:</h2>
                                            <div class="demo-radio-button">
                                                <input name="agama" value="islam" type="radio" id="agama_1"  />
                                                <label for="agama_1">ISLAM</label>
                                                <input name="agama" value="kristen" type="radio" id="agama_2" />
                                                <label for="agama_2">KRISTEN</label>
                                                <input name="agama" value="khatolik" type="radio" id="agama_3" />
                                                <label for="agama_3">KHATOLIK</label>
                                                <input name="agama" value="hindu" type="radio" id="agama_4" />
                                                <label for="agama_4">HINDU</label>
                                                <input name="agama" value="budha" type="radio" id="agama_5" />
                                                <label for="agama_5">BUDHA</label>
                                            @if ($errors -> has('agama'))
                                              <span class="help-block">{{ $errors -> first('agama') }}</span>
                                            @endif
                                            </div>
                                          </div>
                                       
                                          @if ($errors -> any())
                                          <div class="{{ $errors -> has('status_perkawinan') ? 'has-error' : 'has-success' }}">
                                            @else
                                            <div class="">
                                              @endif
                                              <h2 class="card-inside-title">STATUS PERKAWINAN:</h2>
                                              <div class="demo-radio-button">
                                                  <input name="status_perkawinan" value="sudah" type="radio" id="status_1"  />
                                                  <label for="status_1">SUDAH MENIKAH</label>
                                                  <input name="status_perkawinan" value="belum" type="radio" id="status_2" />
                                                  <label for="status_2">BELUM</label>
    
                                              @if ($errors -> has('status_perkawinan'))
                                                <span class="help-block">{{ $errors -> first('status_perkawinan') }}</span>
                                              @endif
                                              </div>
                                            </div>
                                            @if ($errors -> any())
                                            <div class="{{ $errors -> has('pekerjaan') ? 'has-error' : 'has-success' }}">
                                              @else
                                              <div class="">
                                                @endif
                                                <h2 class="card-inside-title">PEKERJAAN:</h2>
                                                <div class="demo-radio-button">
                                                    <input name="pekerjaan" value="wirausaha" type="radio" id="p_1"  />
                                                    <label for="p_1">WIRAUSAHA</label>
                                                    <input name="pekerjaan" value="wiraswasta" type="radio" id="p_2" />
                                                    <label for="p_2">WIRASWASTA</label>
                                                    <input name="pekerjaan" value="pns" type="radio" id="p_3" />
                                                    <label for="p_3">PNS</label>
                                                    <input name="pekerjaan" value="abdi negara" type="radio" id="p_4" />
                                                    <label for="p_4">ABDI NEGARA(TNI/POLISI)</label>
                                                    <input name="pekerjaan" value="lainnya" type="radio" id="p_5" />
                                                    <label for="p_5">LAINNYA</label>
                                                @if ($errors -> has('pekerjaan'))
                                                  <span class="help-block">{{ $errors -> first('pekerjaan') }}</span>
                                                @endif
                                                </div>
                                                @if ($errors -> any())
                                                <div class="{{ $errors -> has('gol_darah') ? 'has-error' : 'has-success' }}">
                                                  @else
                                                  <div class="">
                                                    @endif
                                                    <h2 class="card-inside-title">GOLONGAN DARAH:</h2>
                                                    <div class="demo-radio-button">
                                                        <input name="gol_darah" value="a" type="radio" id="g_1"  />
                                                        <label for="g_1">A</label>
                                                        <input name="gol_darah" value="b" type="radio" id="g_2" />
                                                        <label for="g_2">B</label>
                                                        <input name="gol_darah" value="o" type="radio" id="g_3" />
                                                        <label for="g_3">O</label>
                                                        <input name="gol_darah" value="ab" type="radio" id="g_4" />
                                                        <label for="g_4">AB</label>
                                                    @if ($errors -> has('gol_darah'))
                                                      <span class="help-block">{{ $errors -> first('gol_darah') }}</span>
                                                    @endif
                                                    </div>
                                                  </div>
                                                  @if ($errors -> any())
                                                  <div class="{{ $errors -> has('warga_negara') ? 'has-error' : 'has-success' }}">
                                                    @else
                                                    <div class="">
                                                      @endif
                                                      <h2 class="card-inside-title">WARGA NEGARA:</h2>
                                                      <div class="demo-radio-button">
                                                          <input name="warga_negara" value="wni" type="radio" id="w_1"  />
                                                          <label for="w_1">WNI</label>
                                                          <input name="warga_negara" value="wna" type="radio" id="w_2" />
                                                          <label for="w_2">WNA</label>
                                                          
                                                      @if ($errors -> has('warga_negara'))
                                                        <span class="help-block">{{ $errors -> first('warga_negara') }}</span>
                                                      @endif
                                                      </div>
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

    

          