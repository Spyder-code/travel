@extends('layouts.user')
@section('content')
<main>

    <!-- Hero Start-->
    <div class="hero-area3 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="hero-cap text-center pt-50 pb-20">
                        <h2>Our Listing</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!-- listing Area Start -->
    <div class="listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="count mb-35">
                                <span>{{ $data->count() }} Listings are available</span>
                            </div>
                        </div>
                    </div>
                    <!-- listing Details Stat-->
                    <div class="listing-details-area">
                        <div class="container">
                            <div class="row">
                                @foreach ($data as $item)
                                <div class="col-lg-4 ">
                                    <div class="single-listing mb-30">
                                        <div class="list-img">
                                            <img src="{{ $item->image }}" style="height: 200px">
                                            <!-- <span>Open</span> -->
                                        </div>
                                        <div class="list-caption">
                                            <span>Open</span>
                                            <h3><a href="{{ route('wisata.detail',['wisata'=>$item->id]) }}">{{ $item->nama }}</a></h3>
                                            <p>{{ Str::limit($item->deskripsi, 100, '...') }}</p>
                                            <div class="list-footer">
                                                <ul>
                                                    <li>{{ $item->visitor }} Pengunjung</li>
                                                    <li>{{ $item->jam }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- listing Details End -->
                </div>
            </div>
        </div>
    </div>
    <!-- listing-area Area End -->

</main>
@endsection