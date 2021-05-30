@extends('exam/layout')
@section('title', 'Tambah Data')
@section('judul', 'Tambah Data')
@section('konten')
<br/>
<a href="/kelompoka" class="btn btn-secondary mb-3">Balik</a>
<br />
<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

        <form method="post" action="/kelompoka/store">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul_70" class="form-control" value="{{ old('judul_70') }}" autofocus>

                @if($errors->has('judul_70'))
                <div class="text-danger">
                    {{ $errors->first('judul_70')}}
                </div>
                @endif

            </div>

            <div class="form-group">
                <label>Abstrak</label>
                <textarea name="abstrak_70" cols="30" rows="10" class="form-control">{{ old('abstrak_70') }}</textarea>

                @if($errors->has('abstrak_70'))
                <div class="text-danger">
                    {{ $errors->first('abstrak_70')}}
                </div>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
        @endsection
    </div>
</div>
