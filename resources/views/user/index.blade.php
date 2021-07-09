@extends('layouts.user')
@section('content')
<main>

    <!-- Hero Area Start-->
    <div class="slider-area hero-overly">
        <div class="single-slider hero-overly  slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <span>Explore the city</span>
                            <h1>Discover Great Places</h1>
                        </div>
                        <!--Hero form -->
                        <form class="search-box">
                            <div class="input-form" style="width: 79%">
                                <input type="text" name="nama" id="search" placeholder="What are you looking for?">
                            </div>
                            <div class="search-form">
                                <a href="#" id="link-search">Search</a>
                            </div>	
                        </form>	
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Hero Area End-->
    <!-- Popular Locations Start -->
    <div class="popular-location section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Most visited places</span>
                        <h2>Popular Locations</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($wisata as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-location mb-30">
                        <div class="location-img">
                            <img src="{{ $item->image }}" style="height: 200px">
                        </div>
                        <div class="location-details">
                            <p>{{ $item->nama }}</p>
                            <a href="{{ route('wisata.detail',['wisata'=>$item->id]) }}" class="location-btn">{{ $item->visitor }} <i class="ti-plus"></i> Pengunjung</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- More Btn -->
            <div class="row justify-content-center">
                <div class="room-btn pt-20">
                    <a href="#" class="btn view-btn1">View All Places</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Locations End -->
    <!-- Services Area Start -->
    <div class="services-area pt-150 pb-150 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-80">
                        <span>Easy to explore</span>
                        <h2>How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6">
                    <div class="single-services text-center mb-50">
                        <div class="services-icon">
                            <span class="flaticon-list"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">1. Choose a Place</a></h5>
                            <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
                        </div>
                        <!-- Shpape -->
                        <img class="shape1 d-none d-lg-block" src="{{ asset('/') }}assets/img/icon/serices1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-services text-center mb-50">
                        <div class="services-icon">
                            <span class="flaticon-problem"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">2. what you want</a></h5>
                            <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
                        </div>
                        <img class="shape2 d-none d-lg-block" src="{{ asset('/') }}assets/img/icon/serices2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-services text-center mb-50">
                        <div class="services-icon">
                            <span class="flaticon-respect"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">3. Go out & Explore</a></h5>
                            <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>We are offering for you</span>
                        <h2>Featured Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-bed"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Leving Hotel</a></h5>
                            <p>Must explain your how this keind denoun pleasure</p>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-drink"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Night Life</a></h5>
                            <p>Must explain your how this keind denoun pleasure</p>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-home"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Culture Place</a></h5>
                            <p>Must explain your how this keind denoun pleasure</p>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-food"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Resturent</a></h5>
                            <p>Must explain your how this keind denoun pleasure</p>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <!-- Categories Area End -->
     <!-- peoples-visit Start -->
     <div class="peoples-visit dining-padding-top">
        <!-- Single Left img -->
        <div class="single-visit left-img">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="visit-caption">
                            <span>We are offering for you</span>
                            <h3>Every Month, Millions of People 
                                visit this site We’ve Built.</h3>
                            <p>Unlike what its name implies, dry cleaning is not actually a 'dry' process. Clothes are soaked in a different solvent.</p>
                            <!--Single Visit categories -->
                            <div class="visit-categories mb-40">
                                <div class="visit-location">
                                    <span class="flaticon-travel"></span>
                                </div>
                                <div class="visit-cap">
                                    <h4>Great places in the world</h4>
                                    <p>Unlike what its name implies, dry cleaning is not actu  process. Clothes soaked differentent.
                                    </p>
                                </div>
                            </div>
                            <!--Single Visit categories -->
                            <div class="visit-categories">
                                <div class="visit-location">
                                    <span class="flaticon-work"></span>
                                </div>
                                <div class="visit-cap">
                                    <h4>Biggest category listing</h4>
                                    <p>Unlike what its name implies, dry cleaning is not actu  process. Clothes soaked differentent.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- peoples-visit End -->

</main>
@endsection

@section('script')
    <script>
        $('#search').keyup(function (e) {
            var val = $(this).val();
            var url = {!! json_encode(url('/search')) !!};
            $('#link-search').attr('href',url+'/'+val);
        });
    </script>
@endsection