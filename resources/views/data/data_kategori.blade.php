@extends('template')

@section('judul')
Kategori Buku
@stop

@section('ac-kategori')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('kategori/input') }}"><button type="button" class="btn bg-green btn-flat margin">Tambah Kategori</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Alias</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($kategori as $rskat)
                <tr>
                    <td>{{ $rskat->kd_kategori }}</td>
                    <td>{{ $rskat->nama_kategori }}</td>                    
                    <td>{{ $rskat->singkatan }}</td>
                    <td>
                        <a href="{{ url('kategori/edit',$rskat->kd_kategori) }}"><button type="button" class="btn bg-blue btn"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('kategori/delete',$rskat->kd_kategori) }}"><button type="button" class="btn bg-red btn"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
