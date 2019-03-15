@extends('template')

@section('judul')
Nama Pengarang Buku
@stop

@section('ac-pengarang')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('pengarang/input') }}"><button type="button" class="btn bg-green btn-flat margin">Nama Pengarang</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Pengarang Buku</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($pengarang as $rskarang)
                <tr>
                    <td>{{ $rskarang->kd_pengarang }}</td>
                    <td>{{ $rskarang->nama_pengarang }}</td>                    
                    <td>
                        <a href="{{ url('pengarang/edit',$rskarang->kd_pengarang) }}"><button type="button" class="btn bg-blue btn"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('pengarng/delete',$rskarang->kd_pengarang) }}"><button type="button" class="btn bg-red btn"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
