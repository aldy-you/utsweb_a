@extends('exam/layout')
@section('title', 'Tampil Data')
@section('judul', 'Tampil Data')
@section('konten')
<div class="row">
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <a href="/kelompoka/tambah" class="btn btn-primary mt-4 mb-2">Tambah Data</a>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <table>
            <tr>
                <th><b>Nama</b></th>
                <th><b>:</b></th>
                <td>Muhammad Aldi Zarkhasy</td>
            </tr>
            <tr>
                <th><b>Nim</b></th>
                <th><b>:</b></th>
                <td>1710510070</td>
            </tr>
            <tr>
                <th><b>Prodi</b></th>
                <th><b>:</b></th>
                <td>S1 Ilmu Komputer</td>
            </tr>
        </table>
    </div>
</div>
<table class="table table-bordered table-hover table-striped mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Abstrak</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($exam as $no => $d)
        <tr>
            <td>{{ ++$no }}</td>
            <td>{{ $d->judul_70 }}</td>
            <td>{{ $d->abstrak_70 }}</td>
            <td>
                {{-- <a href="/kelompoka/edit/{{ $d->id }}" class="btn btn-warning">Edit</a> --}}
                <a href="/kelompoka/hapus/{{ $d->id_a }}" class="btn btn-danger" 
                    onclick="return confirm('Anda yakin ingin Hapus!!!')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
