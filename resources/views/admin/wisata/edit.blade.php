@extends('layouts.admin')
@section('page','Wisata Edit')
@section('breadcrumb')
    <li><a href="{{ route('home') }}" class="breadcrumb-item nav-link">Dashboard </a></li>
    <li><a href="#" class="breadcrumb-item nav-link disabled">/ </a></li>
    <li><a href="#" class="breadcrumb-item active nav-link active"> Wisata</a></li>
    <li><a href="#" class="breadcrumb-item nav-link disabled">/ </a></li>
    <li><a href="#" class="breadcrumb-item active nav-link active"> Edit</a></li>
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
                    <form action="{{ route('wisata.update',['wisatum'=>$wisatum->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama wisata</label>
                            <input type="text" name="nama" class="form-control" value="{{ $wisatum->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Jam buka</label>
                            <input type="text" name="jam" class="form-control" value="{{ $wisatum->jam }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" cols="30" rows="10" class="form-control">{{ $wisatum->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" cols="30" rows="10" class="form-control">{{ $wisatum->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Update data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
