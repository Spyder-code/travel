@extends('layouts.admin')
@section('page','Wisata create')
@section('breadcrumb')
    <li><a href="{{ route('home') }}" class="breadcrumb-item nav-link">Dashboard </a></li>
    <li><a href="#" class="breadcrumb-item nav-link disabled">/ </a></li>
    <li><a href="#" class="breadcrumb-item active nav-link active"> Wisata</a></li>
    <li><a href="#" class="breadcrumb-item nav-link disabled">/ </a></li>
    <li><a href="#" class="breadcrumb-item active nav-link active"> Create</a></li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="white-box">
                    <form action="{{ route('wisata.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama wisata</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                            <label>Jam buka</label>
                            <input type="text" name="jam" class="form-control" value="{{ old('jam') }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" cols="30" rows="10" class="form-control">{{ old('alamat') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" cols="30" rows="10" class="form-control">{{ old('deskripsi') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
