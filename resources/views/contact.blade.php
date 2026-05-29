@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="/admin/contact/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $contact->alamat }}">
                </div>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $contact->email }}">
                </div>
                @error('email')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="{{ $contact->telepon }}">
                </div>
                @error('telepon')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="telepon_2">Telepon 2</label>
                    <input type="text" class="form-control" id="telepon_2" name="telepon_2" placeholder="Telepon" value="{{ $contact->telepon_2 }}">
                </div>
                @error('telepon_2')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="jam_buka">Jam Buka</label>
                    <input type="text" class="form-control" id="jam_buka" name="jam_buka" placeholder="Jam Buka" value="{{ $contact->jam_buka }}">
                </div>
                @error('jam_buka')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="maps_embed">Maps Embed</label>
                    <textarea name="maps_embed" id="maps_embed" cols="30" rows="10" class="form-control" placeholder="Maps Embed">{{ $contact->maps_embed }}</textarea>
                </div>
                @error('maps_embed')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" value="{{ $contact->twitter }}">
                </div>
                @error('twitter')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="{{ $contact->facebook }}">
                </div>
                @error('facebook')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" value="{{ $contact->instagram }}">
                </div>
                @error('instagram')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="lynkin">LinkedIn</label>
                    <input type="text" class="form-control" id="lynkin" name="lynkin" placeholder="LinkedIn" value="{{ $contact->lynkin }}">
                </div>
                @error('lynkin')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
