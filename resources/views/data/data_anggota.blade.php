@extends('template')

@section('judul')
Data Anggota
@stop

@section('ac-anggota')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('anggota/input') }}"><button type="button" class="btn bg-green btn-flat margin">Input Baru</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>No Anggota</th>
                    <th>Nama</th>
                    <th>Lahir</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($anggota as $rsAng)
                <tr>
                    <td>{{ $rsAng['kd_anggota'] }}</td>
                    <td>{{ $rsAng['no_anggota'] }}</td>                    
                    <td>{{ $rsAng['nama'] }}</td>
                    <td>{{ $rsAng['tempat']." , ".$rsAng['tgl_lahir'] }}</td>
                    <td>{{ $rsAng['alamat']." ".$rsAng['kota'] }}</td>
                    <td>{{ $rsAng['email'] }}</td>
                    <td>
                        <a href="/anggota/form/edit/{{ $rsAng->kd_anggota }}"><button type="button" class="btn bg-blue btn"><i class="fa fa-pencil"></i></button></a>
                        <a href="/anggota/delete/{{ $rsAng->kd_anggota }}"><button type="button" class="btn bg-red btn"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
