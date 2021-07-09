@extends('layouts.user')
@section('content')
<main>
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
       <div class="container">
             <div class="row">
                <div class="col-xl-12">
                   <div class="hero-cap text-center pt-50">
                         <h2>{{ $wisata->nama }}</h2>
                   </div>
                </div>
             </div>
       </div>
    </div>
    <!--Hero End -->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
       <div class="container">
          <div class="row">
             <div class="col-lg-8 posts-list">
                <div class="single-post">
                   <div class="feature-img">
                      <img class="img-fluid" src="{{ $wisata->image }}" alt="">
                   </div>
                   <div class="blog_details">
                      <h2>{{ $wisata->nama }}
                      </h2>
                      <ul class="blog-info-link mt-3 mb-4">
                         <li><a href="#"><i class="fa fa-user"></i> Travel, Hiburan</a></li>
                         <li><a href="#"><i class="fa fa-comments"></i> {{$wisata->alamat}}</a></li>
                      </ul>
                      <p class="excert">
                        {{ $wisata->deskripsi }}
                      </p>
                   </div>
                </div>
                <div class="comments-area">
                    <h4>Statistik pengunjung</h4>
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
             <div class="col-lg-4">
                <div class="blog_right_sidebar">
                   <aside class="single_sidebar_widget search_widget">
                      <form action="#">
                         <div class="form-group">
                            <div class="input-group mb-3">
                               <input type="text" id="search" class="form-control" placeholder='Search Keyword'
                                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                               <div class="input-group-append">
                                  <a class="link-search" href="#"><i class="ti-search"></i></a>
                               </div>
                            </div>
                         </div>
                         <a href="#" class="link-search button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            >Search</a>
                      </form>
                   </aside>
                   <aside class="single_sidebar_widget post_category_widget">
                      <h4 class="widget_title">Category</h4>
                      <ul class="list cat-list">
                         <li>
                            <a href="#" class="d-flex">
                               <p>Resaurant food</p>
                               <p>(37)</p>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="d-flex">
                               <p>Travel news</p>
                               <p>(10)</p>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="d-flex">
                               <p>Modern technology</p>
                               <p>(03)</p>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="d-flex">
                               <p>Product</p>
                               <p>(11)</p>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="d-flex">
                               <p>Inspiration</p>
                               <p>(21)</p>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="d-flex">
                               <p>Health Care</p>
                               <p>(21)</p>
                            </a>
                         </li>
                      </ul>
                   </aside>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--================ Blog Area end =================-->
 </main>
@endsection

@section('script')
    <script>
        $('#search').keyup(function (e) {
            var val = $(this).val();
            var url = {!! json_encode(url('/search')) !!};
            $('.link-search').attr('href',url+'/'+val);
        });
    </script>
@endsection