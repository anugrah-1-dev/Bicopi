@extends('layouts.app')

@section('title', 'Data Specials')

@section('content')

<div class="container">
    <a href="/admin/specials" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('specials.update', $special->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="{{ $special->judul }}">
                </div>
                @error('judul')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $special->deskripsi }}</textarea>
                </div>
                @error('deskripsi')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{ $special->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
