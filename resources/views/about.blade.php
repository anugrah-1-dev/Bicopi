@extends('layouts.app')

@section('title', 'Data Tentang')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('message'))
                    <div class="alert alert-success">
                        <strong>Berhasil</strong>
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data"
                    @if(!$about->id) style="pointer-events:none;opacity:.6" @endif>
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul"
                            value="{{ $about->judul }}">
                    </div>
                    @error('judul')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="subjudul">Subjudul</label>
                        <textarea name="subjudul" id="subjudul" cols="30" rows="5" class="form-control" placeholder="Subjudul">{{ $about->subjudul }}</textarea>
                    </div>
                    @error('subjudul')
                        <small style="color:red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="kelebihan_1">Kelebihan 1</label>
                        <input type="text" class="form-control" id="kelebihan_1" name="kelebihan_1" placeholder="Kelebihan 1"
                            value="{{ $about->kelebihan_1 }}">
                    </div>
                    @error('kelebihan_1')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="kelebihan_2">Kelebihan 2</label>
                        <input type="text" class="form-control" id="kelebihan_2" name="kelebihan_2" placeholder="Kelebihan 2"
                            value="{{ $about->kelebihan_2 }}">
                    </div>
                    @error('kelebihan_2')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="kelebihan_3">Kelebihan 3</label>
                        <input type="text" class="form-control" id="kelebihan_3" name="kelebihan_3" placeholder="Kelebihan 3"
                            value="{{ $about->kelebihan_3 }}">
                    </div>
                    @error('kelebihan_3')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    @if($about->image)
                    <img src="/image/{{ $about->image }}" alt="" class="img-fluid mb-2">
                    @endif
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    @error('image')
                        <small style="color:red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
