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
                <th>Gambar</th>
                <th>Jenis</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th colspan=2>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        @foreach ($masakans as $masakan)
                <tr>
                    <td> {{$loop->iteration}} </td>
                    <td> {{$masakan->name}} </td>
                    <td> {{$masakan->photo}} </td>
                    <td> {{$masakan->type}} </td>
                    <td> {{$masakan->description}} </td>
                    <td> {{$masakan->price}} </td>
                    <td align="center"> 
                        <a href="" class="btn btn-success">Edit</a>
                    </td>
                    <td align="center"> 
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        @endforeach 
    </table>
@stop