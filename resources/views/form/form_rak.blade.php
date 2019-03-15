@extends('template')

@section('judul')
Form rak
@stop

@section('ac-rak')
active
@stop

@section('content')
<form id="frmRak" class="form-horizontal" action="{{ url('rak/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">        
        <div class="fForm col-md-12">
            <div class="box">
                <!-- Bidodata buku -->
                <div class="box-header with-border">
                    <h3 class="box-title">rak buku</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_rak" class="col-sm-2 control-label">Nama rak</label>
                        <input type="hidden" name="kd_rak" value="{{ $rak ['kd_rak'] }}">
                        <input type="text" class="form-control" placeholder="Nama rak" name="nama_rak" id="nama_rak" value="{{ $rak ['nama_rak'] }}">
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
