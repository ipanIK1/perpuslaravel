@extends('template')

@section('judul')
Form Ketegori
@stop

@section('content')
<form id="frmKategori" class="form-horizontal" action="{{ url('kategori/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">        
        <div class="fForm col-md-12">
            <div class="box">
                <!-- Bidodata buku -->
                <div class="box-header with-border">
                    <h3 class="box-title">kategori buku</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                    
                        <label for="nama_kategori" class="col-sm-2 control-label">Nama Kategori</label>
                        <input type="hidden" name="kd_kategori" id="kd_kategori" value="{{ $kategori ['kd_kategori'] }}">
                            <input type="text" place holder="Nama Kategori" name=nama_kategori id="nama_kategori" value="{{ $kategori ['nama_kategori'] }}">
                    </div> 
                    <div class="form-group">
                        <label for="singkatan" class="col-sm-2 control-label">Nama Alias</label>
                            <input type="text" place holder="singkatan" name=singkatan id="singkatan" value="{{ $kategori ['singkatan'] }}">
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
