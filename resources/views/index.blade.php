@extends('template.blog')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>About</h3>
                        <h2>PMII UNIRA PAMEKASAN.</h2>
                        <p>
                            Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor
                            consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est
                            corrupti.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>GALLERY</h2>
                <p>OF PMII UNIRA</p>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($filter as $item)
                            <li data-filter="{{ '.' . $item }}">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($gallery as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $item->filter_gallery }}">
                        <div class="portfolio-wrap">
                            <img src="{{ url('/storage/uploads/images') . '/' . $item->images }}" class="img-fluid"
                                alt="{{ $item->images }}">
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="{{ url('/storage/uploads/images') . '/' . $item->images }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="{!! $item->description !!}"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Blog</h2>
                <p>Recent posts form our Blog</p>
            </header>

            <div class="row">

                @foreach ($recent as $item)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img">
                                <img src="{{ url('/storage/uploads/images') . '/' . $item->images }}" class="img-fluid"
                                    alt="{{ $item->images }}">
                            </div>
                            <span class="post-date">{{ $item->created_at->diffForHumans() }}</span>
                            <h3 class="post-title">{{ $item->title_post }}</h3>
                            <a href="{{ url('/blog/detail') . '/' . $item->slug_post }}" class="readmore stretched-link mt-auto">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->
@endsection
