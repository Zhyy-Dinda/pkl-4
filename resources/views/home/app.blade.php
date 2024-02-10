@include('component.header')
<div class="body-wrapper overflow-hidden">
    <section class=" hero-section position-relative overflow-hidden mb-0 mb-lg-11">
        <div class="bg-img-info col-xl-6 d-none d-xl-block"></div>
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    {{-- main --}}
                    <div class="hero-content  my-1 my-xl-0 my-xl-text-secondary"><i
                            class="ti ti-rocket text-secondary fs-6"></i>
                        @forelse ($data as $dt)
                            <h1 class="fw-bolder mb-4 fs-13" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="1000">
                                <span class="text-primary ">{{ $dt->title }}
                                    <P style="font-size: 12px">{{ $dt->sub_title }}</P>
                                </span>{{ $dt->heading }}
                            </h1>

                            <h6 class="d-flex align-items-center text-center gap-2 fs-4 fw-semibold mb-3"
                                data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">{{ $dt->content }}
                            </h6>
                        @empty
                            {{-- jika data Tidak ada --}}
                            <section class=" hero-section position-relative overflow-hidden mb-0 mb-lg-11">
                                <div class="bg-img-info col-xl-6 d-none d-xl-block"></div>
                                <div class="container ">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6">
                                            <div class="hero-content  my-1 my-xl-0 my-xl-text-secondary">
                                                <h1 class="fw-bolder mb-4 fs-13" data-aos="fade-up" data-aos-delay="400"
                                                    data-aos-duration="1000">
                                                    <span class="text-primary ">exemple
                                                        <P style="font-size: 12px">exemle</P>
                                                    </span>exemple
                                                </h1>

                                                <h6 class="d-flex align-items-center text-center gap-2 fs-4 fw-semibold mb-3"
                                                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                                    exemple
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endforelse

                        {{-- modal --}}

                        {{-- end modal --}}

                        <div class="d-sm-flex align-items-center gap-3 mb-6" data-aos="fade-up" data-aos-delay="700"
                            data-aos-duration="1000">
                            <div class="button-group">
                                <button type="button" class="btn mb-1 me-1 btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#scrollable-modal" fdprocessedid="flss0a"> Read More </button>
                            </div>

                            <a class="btn btn-light d-block scroll-link" href="/dashboard">Lapor Insident</a>
                        </div>
                        <div class="d-sm-flex align-items-center text-primary gap-3 mb-4" data-aos="fade-up"
                            data-aos-delay="1000" data-aos-duration="1000">
                            <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start mb-3 mb-sm-0">
                                <h5 class="mb-1 fw-bolder">425+</h5>
                                <p class="mb-0 ">Page Templates</p>
                            </div>
                            <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start mb-3 mb-sm-0">
                                <h5 class="mb-1 fw-bolder">150+</h5>
                                <p class="mb-0">UI Components</p>
                            </div>
                            <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start">
                                <h5 class="mb-1 fw-bolder">2000+</h5>
                                <p class="mb-0">Font Icons</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="hero-img-slide position-relative p-4 rounded">
                        <div class="d-flex flex-row">
                            <div class="">
                                <div class="banner-img-1 slideup">
                                    <img src="dist/images/hero-img/banner.svg" alt="" class="img-fluid">
                                </div>
                                <div class="banner-img-1 slideup">
                                    <img src="dist/images/hero-img/banner.svg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="">
                                <div class="banner-img-2 slideDown">
                                    <img src="dist/images/hero-img/banner-2.svg" alt="" class="img-fluid">
                                </div>
                                <div class="banner-img-2 slideDown">
                                    <img src="dist/images/hero-img/banner-2.svg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Post --}}
    <section class="production pb-10 pb-md-14 border-bottom" id="bootstrap-demos">
        <div class="container">
            <h2 class="text-center fs-9 fw-bolder">Postingan Terbaru</h2>
            <p class="mb-0 fs-5 text-center">Collection of live demos included with package.</p>
            <div class="domo-contect position-relative">
                <div class="demos-view mt-11 pt-lg-8">
                    <div class="row justify-content-center">
                        {{-- ================= 2 ==================== --}}
                        @forelse ($data_berita as $dt)
                        <div class="col-sm-6 col-lg-4 mb-8">
                            <div
                                class="border shadow d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                <img src="{{Storage::url('public/berita/').$dt->image}}" alt="" class="img-fluid">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6 class="fs-4 mb-1 fw-semibold">{{$dt->title}}</h6>
                                                <p class="mb-0 text-dark">{{$dt->info}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-4 mb-0 text-dark">{!!$dt->content!!}</p>
                                </div>
                                <a target="_blank"
                                    href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/dark/index.html"
                                    class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Read
                                    More</a>
                            </div>
                        </div>
                        @empty
                            <div class="aler alert-danger">
                                <h1>kosong</h1>
                            </div>
                        @endforelse
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="bg-light py-5 py-lg-10 py-xl-12">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <h2 class="fs-9 text-center mb-5 fw-bolder">Increase speed of your development and launch quickly
                        with Modernize</h2>
                </div>
            </div>
            <div class="sliding-wrapper position-relative overflow-hidden">
                <div class="slide-background d-flex flex-row w-100">
                    <div class="slide">
                        <img src="dist/images/slider/component-slider.png" alt="slide" height="100%">
                    </div>
                    <div class="slide">
                        <img src="dist/images/slider/slider-group.png" alt="slide" height="100%">
                    </div>
                    <div class="slide">
                        <img src="dist/images/slider/slider-group.png" alt="slide" height="100%">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="review-section pt-5 pt-lg-10 pt-xl-12 pb-8 pb-lg-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fs-9 text-center mb-4 mb-lg-5 fw-bolder" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">Kegiatan Organisasi</h2>
                </div>
            </div>
            <div class="review-slider" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-1.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me
                                    provide a clean
                                    and sleek look to my dashboard and made it look exactly the way I wanted it to,
                                    mainly without
                                    having.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-2.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and
                                    flexibility
                                    much better than the other products available in the market. I strongly recommend
                                    the AdminMart to
                                    other buyers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-3.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although
                                    it is pretty
                                    much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                    recomended!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-1.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me
                                    provide a clean
                                    and sleek look to my dashboard and made it look exactly the way I wanted it to,
                                    mainly without
                                    having.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-2.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and
                                    flexibility
                                    much better than the other products available in the market. I strongly recommend
                                    the AdminMart to
                                    other buyers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-3.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although
                                    it is pretty
                                    much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                    recomended!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-1.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me
                                    provide a clean
                                    and sleek look to my dashboard and made it look exactly the way I wanted it to,
                                    mainly without
                                    having.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-2.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and
                                    flexibility
                                    much better than the other products available in the market. I strongly recommend
                                    the AdminMart to
                                    other buyers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-3.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although
                                    it is pretty
                                    much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                    recomended!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-1.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me
                                    provide a clean
                                    and sleek look to my dashboard and made it look exactly the way I wanted it to,
                                    mainly without
                                    having.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-2.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and
                                    flexibility
                                    much better than the other products available in the market. I strongly recommend
                                    the AdminMart to
                                    other buyers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-3.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although
                                    it is pretty
                                    much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                    recomended!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-1.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me
                                    provide a clean
                                    and sleek look to my dashboard and made it look exactly the way I wanted it to,
                                    mainly without
                                    having.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-2.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and
                                    flexibility
                                    much better than the other products available in the market. I strongly recommend
                                    the AdminMart to
                                    other buyers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-3.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although
                                    it is pretty
                                    much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                    recomended!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-1.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me
                                    provide a clean
                                    and sleek look to my dashboard and made it look exactly the way I wanted it to,
                                    mainly without
                                    having.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-2.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                            <p class="mb-0 text-dark">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and
                                    flexibility
                                    much better than the other products available in the market. I strongly recommend
                                    the AdminMart to
                                    other buyers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="dist/images/profile/user-3.jpg" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul
                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="dist/images/svgs/icon-star.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although
                                    it is pretty
                                    much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                    recomended!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <small class="text-primary fw-bold mb-2 d-block fs-3">ALMOST COVERED EVERYTHING</small>
                        <h2 class="fs-9 text-center mb-4 mb-lg-9 fw-bolder">Other Amazing Features & Flexibility
                            Provided</h2>
                    </div>
                </div>
            </div>
            <div class="demo-app-tabs">
                <nav>
                    <div class="nav nav-tabs position-relative justify-content-center mb-5" id="nav-tab"
                        role="tablist">
                        <button class="nav-link p-3 me-2 active" id="nav-bootstrap-features-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-bootstrap-features" type="button" role="tab"
                            aria-controls="nav-bootstrap-features" aria-selected="true"><img
                                src="dist/images/svgs/icon-bootstrap.svg" alt="" class="img-fluid"><span
                                class="d-block mt-2 fw-bold">Bootstrap</span></button>
                        <button class="nav-link p-3 me-2" id="nav-react-features-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-react-features" type="button" role="tab"
                            aria-controls="nav-react-features" aria-selected="false"><img
                                src="dist/images/svgs/icon-reactjs.svg" alt="" class="img-fluid"><span
                                class="d-block mt-2 fw-bold">React</span></button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-bootstrap-features" role="tabpanel"
                        aria-labelledby="nav-bootstrap-features-tab" tabindex="0">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-wand text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                                    <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant
                                        Admin.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-layout-sidebar text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Dark & Light Sidebar</h5>
                                    <p class="mb-0 text-dark">Included Dark and Light Sidebar for getting desire look
                                        and feel.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-archive text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">425+ Page Templates</h5>
                                    <p class="mb-0 text-dark">Yes, we have 5 demos & 79+ Pages per demo to make it
                                        easier.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">150+ UI Components</h5>
                                    <p class="mb-0 text-dark">Almost 150+ UI Components being given with Modernize
                                        Admin Pack.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-tag text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Bootstrap 5x</h5>
                                    <p class="mb-0 text-dark">Its been made with Bootstrap 5 and full responsive
                                        layout.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-diamond text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">2000+ Font Icons</h5>
                                    <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of
                                        Elegant Admin.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-device-desktop text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Fully Responsive</h5>
                                    <p class="mb-0 text-dark">All the layout of Modernize Admin is Fully Responsive and
                                        widely tested.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-database text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">SassBase CSS</h5>
                                    <p class="mb-0 text-dark">Our Css is written Sass Base to make your life easier.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                                    <p class="mb-0 text-dark">Customization will be easy as we understand your pain.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                                    <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for
                                        Charts.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                                    <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-refresh text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                                    <p class="mb-0 text-dark">We are constantly updating our pack with new features.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-book text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                                    <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to
                                        use.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-calendar text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                                    <p class="mb-0 text-dark">Calendar is available with our package & in nice design.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-brand-wechat text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                                    <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-react-features" role="tabpanel"
                        aria-labelledby="nav-react-features-tab" tabindex="0">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-wand text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                                    <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant
                                        Admin.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-shield-lock text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">JWT + Firebase Auth</h5>
                                    <p class="mb-0 text-dark">It is JSON Object is used to securely transfer
                                        information over the web.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-archive text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">50+ Page Templates</h5>
                                    <p class="mb-0 text-dark">Yes, we have 5 demos & 50+ Pages per demo to make it
                                        easier.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">45+ UI Components</h5>
                                    <p class="mb-0 text-dark">Almost 45+ UI Components being given with Modernize
                                        Admin Pack.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-tag text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Material Ui</h5>
                                    <p class="mb-0 text-dark">Its been made with Material Ui and full responsive
                                        layout.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-diamond text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">3400+ Font Icons</h5>
                                    <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of
                                        Elegant Admin.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-database text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Axios</h5>
                                    <p class="mb-0 text-dark">Axios is a promise-based HTTP Client for node.js and the
                                        browser.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-language text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">i18 React</h5>
                                    <p class="mb-0 text-dark">react-i18 is a powerful internationalization framework
                                        for React.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-building-carousel text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Slick Carousel</h5>
                                    <p class="mb-0 text-dark">The Last React Carousel You will Ever Need!</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                                    <p class="mb-0 text-dark">Customization will be easy as we understand your pain.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                                    <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for
                                        Charts.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                                    <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-refresh text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                                    <p class="mb-0 text-dark">We are constantly updating our pack with new features.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-book text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                                    <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to
                                        use.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-calendar text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                                    <p class="mb-0 text-dark">Calendar is available with our package & in nice design.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-messages text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                                    <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-8 pt-md-5 pb-5 pb-lg-10 pb-xl-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card c2a-box" data-aos="fade-up" data-aos-delay="1600" data-aos-duration="1000">
                        <div class="card-body text-center p-4 pt-8">
                            <h3 class="fs-7 fw-semibold pt-6">Haven't found an answer to your question?</h3>
                            <p class="mb-8 pb-2 text-dark">Connect with us either on discord or email us</p>
                            <div class="d-sm-flex align-items-center justify-content-center gap-3 mb-4">
                                <a href="https://discord.com/invite/eMzE8F6Wqs" target="_blank"
                                    class="btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow" type="button">Ask
                                    on Discord</a>
                                <a href="https://adminmart.com/support" target="_blank"
                                    class="btn btn-outline-secondary d-block" type="button">Submit Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
{{-- footer --}}
@include('component.footer')


{{-- rsponsiv navbar --}}
@include('component.menubar')



</div>


@include('component.script')
</body>


<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/landingpage/index-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 05:33:38 GMT -->

</html>
