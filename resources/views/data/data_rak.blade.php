@extends('template')

@section('judul')
Nama rak Buku
@stop

@section('ac-rak')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('rak/input') }}"><button type="button" class="btn bg-green btn-flat margin">Nama rak</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama rak Buku</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($rak as $rsrk)
                <tr>
                    <td>{{ $rsrk->kd_rak }}</td>
                    <td>{{ $rsrk->nama_rak }}</td>                    
                    <td>
                        <a href="{{ url('rak/edit',$rsrk->kd_rak) }}"><button type="button" class="btn bg-blue btn"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('rak/delete',$rsrk->kd_rak) }}"><button type="button" class="btn bg-red btn"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
