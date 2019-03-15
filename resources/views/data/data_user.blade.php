@extends('template')

@section('judul')
Data pengguna
@stop

@section('ac-pengguna')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('user/input') }}"><button type="button" class="btn bg-green btn-flat margin">Tambah usser</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Telpon</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($user as $rsuse)
                <tr>
                    <td>{{ $rsuse->id }}</td>
                    <td>{{ $rsuse->name }}</td>
                    <td>{{ $rsuse->email }}</td>                    
                    <td>{{ $rsuse->alamat }}</td>
                    <td>{{ $rsuse->telp }}</td>
                    <td>{{ $rsuse->avatar }}</td>                    
                    <td>
                        <a href="{{ url('user/edit',$rsuse->id) }}"><button type="button" class="btn bg-blue btn"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('user/delete',$rsuse->id) }}"><button type="button" class="btn bg-red btn"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
