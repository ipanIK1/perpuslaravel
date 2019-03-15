@extends('template')

@section('judul')
Form Anggota
@stop

@section('content')
<form id="formAnggota" class="form-horizontal" action="{{ asset('anggota/update') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Foto</h3>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box">
                <!-- Bidodata Anggota -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Anggota</h3>
                </div>
                <div class="box-body">
                <input type="hidden" class="form-control" id="kd_anggota" value="{{$anggota['kd_anggota']}}" name="kd_anggota">
                <input type="hidden" class="form-control" id="no_anggota" value="{{$anggota['no_anggota']}}" name="no_anggota">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" value="{{$anggota['nama']}}" placeholder="Nama Anggota" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lahir" class="col-sm-2 control-label">Tempat, tgl lahir</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="tempat" value="{{$anggota['tempat']}}" placeholder="Tempat Lahir" name="tempat">
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>     
                                <input id="datepicker" type="text" class="form-control" id="tempat" value="{{$anggota['tgl_lahir']}}" placeholder="Tanggal Lahir" name="tgl_lahir">
                            </div>
                        </div>                        
                    </div> 
                    <div class="form-group">
                        <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jk">
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                                <option value="3">Lainnya</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" value="{{$anggota['alamat']}}"placeholder="Alamat" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kota" class="col-sm-2 control-label">Kota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kota" value="{{$anggota['kota']}}" placeholder="Kota" name="kota">
                        </div>
                    </div>                        
                    <div class="form-group">
                        <label for="telp" class="col-sm-2 control-label">Telepon</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" value="{{$anggota['telp']}}" placeholder="Telepon" name="telp">
                            </div> 
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control"value="{{$anggota['email']}}" placeholder="Email" name="email">
                            </div> 
                        </div>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Login</h3>
                    </div>                                                                                      
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="username" value="{{$anggota['username']}}" placeholder="Username" name="user_name">
                            </div>                         
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>             
                                <input type="password" class="form-control" id="password" value="{{$anggota['user_password']}}" placeholder="Password" name="user_password">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary left">SAVE</button>
                </div>                   
            </div>
        </div>       
    </div>
</form>
@stop