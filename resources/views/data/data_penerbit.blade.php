@extends('template')

@section('judul')
Nama Penerbit Buku
@stop

@section('ac-penerbit')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('penerbit/input') }}"><button type="button" class="btn bg-green btn-flat margin">Nama Penerbit</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Penerbit Buku</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($penerbit as $rsterbit)
                <tr>
                    <td>{{ $rsterbit->kd_penerbit }}</td>
                    <td>{{ $rsterbit->nama_penerbit }}</td>                    
                    <td>
                        <a href="{{ url('penerbit/edit',$rsterbit->kd_penerbit) }}"><button type="button" class="btn bg-blue btn"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('penerbit/delete',$rsterbit->kd_penerbit) }}"><button type="button" class="btn bg-red btn"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
