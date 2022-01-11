@extends("layouts.app")

@section("content")
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<br>
<div class="col-md-8 offset-md-2">
    <center><h3>Tambah Masakan</h3></center>

    <form method="POST" action="{{route('masakan.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="type">Jenis</label> <br>
            <input type="radio" class="form-control-inline" name="type" value="ma">Makanan
            <input type="radio" class="form-control-inline" name="type" value="mi">Minuman
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="textbox" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="photo">Gambar</label> <br>
            <input type="file" name="photo">
        </div>

        <center><button type="submit" class="btn btn-primary">Simpan</button></center>
    </form>
</div>
@stop
