@extends('layouts.app')

@section('content')
<br>
<h3>Data Masakan</h3>

    <a href="" class="btn btn-success">Tambah Data</a>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br/>
    @endif

    <table class="table table-bordered">
        <thead class="thead-dark" align="center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah Mahasiswa</th>
                <th colspan=2>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@stop