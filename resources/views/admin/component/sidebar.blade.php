<aside class="left-sidebar shadow">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between shadow-sm bg-primary">
            <a href="/" class="text-nowrap logo-img">

                <img src="{{ asset('dist/images/logos/logo-1.png') }}" class="dark-logo" width="200" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                  
                    <span class="hide-menu">Home</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->

                <!-- ============================= -->
                <!-- Apps -->
                <!-- ============================= -->
                {{-- website --}}
                <li class="sidebar-item">
                    <a class="sidebar-link  mb-3" href="/" aria-expanded="false">
                        <span>
                            <i class="ti ti-home fs-6"></i>
                        </span>
                        <span>Lihat Website</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                        <span>
                            <i class=" bg-primary text-light rounded-circle p-2 ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                



                {{-- Home --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bg-primary text-light rounded-circle p-2 ti ti-components"></i>
                        </span>
                        <span class="hide-menu">Data Master</span>
                    </a>
                    <ul aria-expanded="false" class="collapse ms-3 first-level">
                        <li class="sidebar-item">
                            <a href="main" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="bg-primary text-light rounded-circle p-2 ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Main</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/berita" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="bg-primary text-light rounded-circle p-2 ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Berita</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-card-weather.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="bg-primary text-light rounded-circle p-2 ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Weather Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-card-draggable.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="bg-primary text-light rounded-circle p-2 ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Draggable Cards</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-text"></i>
                        </span>
                        <span class="hide-menu">Artikel</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="/" aria-expanded="false">
                        <span>
                            <i class="ti ti-ad-2"></i>
                        </span>
                        <span class="hide-menu">Rfc</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="app-invoice.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-settings"></i>
                        </span>
                        <span class="hide-menu">Layanan</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="page-user-profile.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-alert-square-rounded"></i>
                        </span>
                        <span class="hide-menu">Panduan</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="page-user-profile.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-circle"></i>
                        </span>
                        <span class="hide-menu">Kontak</span>
                    </a>
                </li>

                </li>
                <!-- ============================= -->
                <!-- PAGES -->
                <!-- ============================= -->


                <!-- ============================= -->
                <!-- Cards -->
                <!-- ============================= -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Cards</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="ui-cards.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Basic Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-card-customs.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Custom Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-card-weather.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Weather Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-card-draggable.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Draggable Cards</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ============================= -->
                <!-- Component -->
                <!-- ============================= -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-components"></i>
                        </span>
                        <span class="hide-menu">Component</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="component-sweetalert.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Sweet Alert</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="component-nestable.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Nestable</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="component-noui-slider.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Noui slider</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="component-rating.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Rating</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="component-toastr.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Toastr</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ============================= -->
                <!-- Forms -->
                <!-- ============================= -->

            </ul>
            <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
                <div class="d-flex gap-3">
                    <div class="unlimited-access-title">
                        <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Unlimited Access</h6>
                        <button class="btn btn-primary fs-2 fw-semibold lh-sm">Signup</button>
                    </div>
                    <div class="unlimited-access-img">
                        <img src="dist/images/logos/logo-3.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="../../dists/images/profile/user-1.jpg" class="rounded-circle" width="40"
                        height="40" alt="">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                    <span class="fs-2 text-dark">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                    aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
