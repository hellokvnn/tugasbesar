@extends('layouts.app')

@section('content')
<br>
<center>
<h3>Data Masakan</h3>
<br>
    <a href="" class="btn btn-success">Tambah Data</a>
</center>
<br>

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
        <thead class="thead-light" align="center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah Masakan</th>
                <th colspan=2>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@stop