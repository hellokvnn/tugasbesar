@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br/>
@endif

<br>
<center>
<h3>Data Masakan</h3>
<br>
    <a href="{{route('masakan.create')}}" class="btn btn-success" >Tambah Data</a>
</center>
<br>
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
                    <td> {{asset('storage/' . $masakan->photo)}} </td>
                    <td> {{$masakan->type == "ma" ? "Makanan" : "Minuman" }} </td>
                    <td> {{$masakan->description}} </td>
                    <td> {{$masakan->price}} </td>
                    <td align="center"> 
                        <a href="{{route('masakan.edit', $masakan->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td align="center"> 
                        <form action="{{route('masakan.destroy', $masakan->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        @endforeach 
    </table>
@stop