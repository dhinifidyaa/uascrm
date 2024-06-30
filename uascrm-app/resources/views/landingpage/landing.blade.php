@extends('landing.layout')
@section('content')

 <!-- Carousel Start -->
 <div class="container-fluid carousel-header px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="front/img/ggbackground.png" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-primary text-uppercase mb-3">Hair & Beauty Center</h4>
                                <h1 class="display-1 text-capitalize text-dark mb-3">Glamour Glow</h1>
                                <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="front/img/login.png" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty Center</h4>
                                <h1 class="display-1 text-capitalize text-dark mb-3">Facial Treatment</h1>
                                <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="front/img/carousel-2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty Center</h4>
                                <h1 class="display-1 text-capitalize text-dark">Cellulite Treatment</h1>
                                <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Services Start -->
        <div class="container-fluid services py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                    <h1 class="display-3">Spa & Beauty Services</h1>
                </div>
                <div class="row g-4">
    @foreach($layanan as $l)
    <div class="col-lg-6">
        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
            <div class="row align-items-center">
                <div class="col-8">
                    <div class="services-content text-end">
                        <h3>{{$l->nama}}</h3>
                        <p>{{$l->deskripsi}}</p>
                        <a href="{{url('/landingpage/booking/{id}')}}" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                        <img src="{{asset('front/img')}}/{{$l->foto}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-12">
        <div class="services-btn text-center">
            <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Service More</a>
        </div>
    </div>
</div>

            </div>
        </div>
        <!-- Services End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                            <img src="front/img/about-1.jpg" class="img-fluid rounded" alt="">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                                <img src="front/img/about-2.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <p class="fs-4 text-uppercase text-primary">About Us</p>
                            <h1 class="display-4 mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-gitkraken fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Special Offers</h5>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-gift fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Special Offers</h5>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Gallery Start -->
        <div class="container-fluid gallery py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-primary">Our Gallery</p>
                    <h1 class="display-4 mb-4">Let's See Our Gallery</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All Gallery</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Skin Care</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Stream Bath</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Stone Therapy</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">Face Massage</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-1.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-1.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-2.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-2.jpg" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-3.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-3.jpg" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-4.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-4.jpg" data-lightbox="Gallery-4" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-5.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-5.jpg" data-lightbox="Gallery-5" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-6.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-6.jpg" data-lightbox="Gallery-6" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-7.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-7.jpg" data-lightbox="Gallery-7" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-8.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-8.jpg" data-lightbox="Gallery-8" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-9.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-9.jpg" data-lightbox="Gallery-9" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-10.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-10.jpg" data-lightbox="Gallery-10" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-5.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-5.jpg" data-lightbox="Gallery-11" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-1.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-1.jpg" data-lightbox="Gallery-12" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-11.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-11.jpg" data-lightbox="Gallery-13" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-12.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-12.jpg" data-lightbox="Gallery-14" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-2.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-2.jpg" data-lightbox="Gallery-15" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-6.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-6.jpg" data-lightbox="Gallery-16" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-13.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-13.jpg" data-lightbox="Gallery-17" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-2.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-2.jpg" data-lightbox="Gallery-18" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-3.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-3.jpg" data-lightbox="Gallery-19" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-7.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-7.jpg" data-lightbox="Gallery-20" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-4.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-4.jpg" data-lightbox="Gallery-21" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-6.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-6.jpg" data-lightbox="Gallery-22" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-8.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-8.jpg" data-lightbox="Gallery-23" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-14.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-14.jpg" data-lightbox="Gallery-24" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-4.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-4.jpg" data-lightbox="Gallery-25" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="front/img/gallery-8.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="front/img/gallery-8.jpg" data-lightbox="Gallery-26" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Newsletter</h4>
                            <p class="text-white">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tempor dui, non consectetur enim.</p>
                            <div class="position-relative mx-auto rounded-pill">
                                <input class="form-control rounded-pill border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary btn-primary-outline-0 rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Our Services</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Facials</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Waxing</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Message</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Minarel baths</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Body treatments</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Aroma Therapy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Stone Spa</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Schedule</h4>
                            <p class="text-muted mb-0">Monday: <span class="text-white"> 09:00 am – 10:00 pm</span></p>
                            <p class="text-muted mb-0">Saturday: <span class="text-white"> 09:00 am – 08:00 pm</span></p>
                            <p class="text-muted mb-0">Sunday: <span class="text-white"> 09:00 am – 05:00 pm</span></p>
                            <h4 class="my-4 text-white">Address</h4>
                            <p class="mb-0"><i class="fas fa-map-marker-alt text-secondary me-2"></i> 123 ranking street North tower New York, USA</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Follow Us</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Faceboock</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Instagram</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Twitter</a>
                            <h4 class="my-4 text-white">Contact Us</h4>
                            <p class="mb-0"><i class="fas fa-envelope text-secondary me-2"></i> info@example.com</p>
                            <p class="mb-0"><i class="fas fa-phone text-secondary me-2"></i> (+012) 3456 7890 123</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
@endsection