@extends('template')

@section('judul')
Form Penerbit
@stop

@section('ac-penerbit')
active
@stop

@section('content')
<form id="frmKategori" class="form-horizontal" action="{{ url('penerbit/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">        
        <div class="fForm col-md-12">
            <div class="box">
                <!-- Bidodata buku -->
                <div class="box-header with-border">
                    <h3 class="box-title">Penerbit buku</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_penerbit" class="col-sm-2 control-label">Nama Penerbit</label>
                        <input type="hidden" name="kd_penerbit" value="{{ $penerbit ['kd_penerbit'] }}">
                        <input type="text" class="form-control" placeholder="Nama Penerbit" name="nama_penerbit" id="nama_penerbit" value="{{ $penerbit ['nama_penerbit'] }}">
                    </div> 
                    
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                </div>                   
            </div>
        </div>       
    </div>
</form>
@stop
