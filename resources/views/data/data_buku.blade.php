@extends('template')

@section('judul')
Data Buku
@stop

@section('ac-buku')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('buku/input') }}"><button type="button" class="btn bg-green btn-flat margin">Input Buku</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Kategori</th>
                    <th>Halaman</th>
                    <th>Edisi</th>
                    <th>ISBN</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($buku as $rsBook)
                <tr>
                    <td>{{ $rsBook->kd_buku }}</td>
                    <td>{{ $rsBook->judul }}</td>                    
                    <td>{{ $rsBook->nama_pengarang }}</td>
                    <td>{{ $rsBook->nama_penerbit." / ".$rsBook->tempat_terbit."/".$rsBook->tahun_terbit }}</td>
                    <td>{{ $rsBook->nama_kategori }}</td>
                    <td>{{ $rsBook->halaman }}</td>
                    <td>{{ $rsBook->edisi }}</td>
                    <td>{{ $rsBook->ISBN }}</td>
                    <td>
                        <a href="{{ url('buku/form/edit',$rsBook->kd_buku) }}"><button type="button" class="btn bg-blue btn"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('buku/delete',$rsBook->kd_buku) }}"><button type="button" class="btn bg-red btn"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
