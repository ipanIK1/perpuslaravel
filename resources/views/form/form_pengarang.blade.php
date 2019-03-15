@extends('template')

@section('judul')
Form pengarang
@stop

@section('ac-pengarang')
active
@stop

@section('content')
<form id="frmpengarang" class="form-horizontal" action="{{ url('pengarang/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">        
        <div class="fForm col-md-12">
            <div class="box" style="background-color:rgba(75, 234, 91, 0.4)">
                <!-- Bidodata buku -->
                <div class="box-header with-border"style="background-color:rgba(79, 146, 234, 0.5)">
                    <h3 class="box-title">Pengarang Buku</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_pengarang" class="col-sm-2 control-label">Nama pengarang</label>
                        <input type="hidden" name="kd_pengarang" value="{{ $pengarang ['kd_pengarang'] }}">
                        <input type="text" class="col-sm-10" placeholder="Nama pengarang" name="nama_pengarang" id="nama_pengarang" value="{{ $pengarang ['nama_pengarang'] }}">
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
