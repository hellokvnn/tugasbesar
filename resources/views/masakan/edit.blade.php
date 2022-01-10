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

<div class="col-md-8 offset-md-2">
    <br>
    <center><h3>Edit Mahasiswa</h3></center>

    <form method="POST" action="{{route('masakan.update', $masakan->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" value="{{$masakan->name}}">
        </div>
        <div class="form-group">
            <label for="type">Jenis</label> <br>
            <input type="radio" class="form-control-inline" name="type" value="ma" {{$masakan->type == 'ma' ? 'checked' : ''}}>Makanan
            <input type="radio" class="form-control-inline" name="type" value="mi" {{$masakan->type == 'mi' ? 'checked' : ''}}>Minuman
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="textbox" class="form-control" name="description" value="{{$masakan->description}}">
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control" name="price" value="{{$masakan->price}}">
        </div>
        <div class="form-group">
            <label for="photo">Gambar</label> <br>
            <input type="file" name="photo">
        </div>
        <center><button type="submit" class="btn btn-success">Simpan</button></center>
    </form>
</div>
@stop
