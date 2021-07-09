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

                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table no-wrap" id="myTable">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Bulan</th>
                                    <th class="border-top-0">Tahun</th>
                                    <th class="border-top-0">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->bulan }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>{{ $item->jumlah_pengunjung }}</td>
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
