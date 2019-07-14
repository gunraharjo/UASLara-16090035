@extends('admin.dashboard') 
@section('content')

{{--  4 menu utama  --}}
<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <i class="material-icons">account_circle</i>
            </div>
            
            <div class="content">
                <div class="text">JUMLAH PENDUDUK</div>
                <div class="number count-to" data-from="0" data-to="999" data-speed="15" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
                <i class="material-icons">account_box</i>
            </div>
            <div class="content">
                <div class="text">JUMLAH KELUARGA</div>
                <div class="number count-to" data-from="0" data-to="999" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">supervisor_account</i>
                </div>
                <div class="content">
                    <div class="text">JUMLAH ORGANISASI</div>
                    <div class="number count-to" data-from="0" data-to="999" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
   </div>
@endsection

