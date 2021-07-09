@extends('layouts.admin')
@section('page','Wisata page')
@section('breadcrumb')
    <li><a href="{{ route('home') }}" class="breadcrumb-item nav-link">Dashboard </a></li>
    <li><a href="#" class="breadcrumb-item nav-link disabled">/ </a></li>
    <li><a href="#" class="breadcrumb-item active nav-link active"> Wisata</a></li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="row">
                        <div class="col mt-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                @endif
                <a href="{{ route('wisata.create') }}" class="btn btn-success my-3"><i class="fas fa-plus-circle"></i> Tambah data</a>
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table no-wrap" id="myTable">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tempat wisata</th>
                                    <th class="border-top-0">Jam buka</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jam }}</td>
                                    <td class="d-flex">
                                        <div class="mx-1">
                                            <form action="{{ route('wisata.destroy',['wisatum'=>$item->id]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="retutn confirm('Are you sure?')" type="submit" class="btn btn-danger text-white"><i class="fas fa-trash"></i> Delete</button>
                                            </form>
                                        </div>
                                        <div class="mx-1">
                                            <a href="{{ route('wisata.edit',['wisatum'=>$item->id]) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        </div>
                                        <div class="mx-1">
                                            <a href="{{ route('wisata.show',['wisatum'=>$item->id]) }}" class="btn btn-info text-white"><i class="fas fa-eye"></i> Statistik</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
@endsection
