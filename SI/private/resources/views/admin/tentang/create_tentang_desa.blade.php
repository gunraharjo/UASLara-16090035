@extends('admin.dashboard')
@section('content')

  
<form method="post" action="{{url('visimisi')}}" enctype="multipart/form-data">
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="col-md-6">
                        <h2>Tambah Tentang Desa</h2>
                    </div>
                    <div class="col-md-6">

                      <a class="btn btn-primary" href="{{url('/visimisi/create')}}" style="float: right;">Tambah Tentang Desa</a>
                    </div>                     
                    <br>
                </div>
                <div class="body">
                  <table class="table table-striped">

                  </table>
               
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->

    

@endsection
