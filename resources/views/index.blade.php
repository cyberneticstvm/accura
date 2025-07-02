@extends("base")
@section("container")
<div role="main" class="main">
    <section id="intro" class="section section-with-shape-divider border-0 custom-bg-color-grey-1 overflow-visible m-0 pt-5 pb-5 pb-lg-0">
        <div class="container position-relative z-index-2 h-100 py-md-5">
            <div class="row align-items-center justify-content-center h-100 pt-5">
                <div class="col-md-10 col-lg-6 text-center text-sm-end order-2 order-lg-1 pe-lg-0 py-lg-5 my-lg-5">
                    <h1 class="text-13 ls-0 line-height-1 custom-ws-nowrap mb-3 z-index-1 position-relative text-center text-sm-start">
                        <span class="d-block position-relative">
                            <span class="custom-bg-color-grey-1 z-index-1 position-relative pe-sm-4">
                                <span class="d-inline-block text-color-grey positive-ls-3 custom-font-size-1 custom-letter-spacing-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">INTRODUCING</span>
                            </span>
                            <svg class="d-none d-sm-block position-absolute left-0 top-50pct transform3dy-n50 mt-2 appear-animation" data-appear-animation="customSVGLineAnim" data-appear-animation-delay="100" data-appear-animation-duration="2s" height="1" width="99%">
                                <line x1="0" y1="0" x2="600" y2="0" stroke="#969696" stroke-width="5"></line>
                            </svg>
                        </span>
                        <strong class="font-weight-extra-bold text-3 text-sm-3-4 text-md-4 text-lg-3 text-xl-4 d-inline-block negative-ls-2 position-relative z-index-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1200">Accura Lenses</strong>
                    </h1>
                    <p class="font-weight-light text-5 text-center text-sm-end mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1400">The most advanced BlueBlock lenses</p>
                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-end mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">
                        <span class="font-weight-light text-4">Starting at</span>
                        <span class="text-color-primary font-weight-bold text-11 my-3 my-sm-0 mx-4">$350</span>
                        <a href="demo-product-landing-checkout.html" class="btn btn-primary btn-rounded font-weight-bold text-4 px-5 py-3">Buy Now!</a>
                    </div>
                    <a href="#" class="d-inline-flex align-items-center text-color-default text-color-hover-primary text-decoration-none font-weight-medium ms-3 ms-sm-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1800">Learn More <i class="icons icon-arrow-right text-1 ms-2"></i></a>
                </div>
                <div class="col-lg-6 align-self-xl-stretch position-relative order-1 order-lg-2">
                    <div class="custom-product-image-style-1 d-none d-lg-block">
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{ asset('/assets/img/home-bg1.png') }}" class="img-fluid appear-animation" alt="" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer pt-5 pb-4"></div>
        <div class="shape-divider shape-divider-bottom" style="height: 215px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 215" preserveAspectRatio="xMinYMin">
                <path fill="#FFF" d="M-13,24c3.03-0.28,7.53-0.66,13-1c26.45-1.65,46.73-0.59,57,0c76.61,4.41,118,9,118,9
							c70.55,7.83,105.82,11.74,151,19c32.98,5.3,65.87,11.44,179,37c145.79,32.94,138.71,33.5,203,47c85.09,17.87,149.08,31.32,237,40
							c113.11,11.17,203.29,8.29,234,7c16.74-0.7,63.49-4.13,157-11c107.74-7.91,117.84-9.32,153-10c52.52-1.02,97.8,0.79,153,3
							c21.27,0.85,54.96,2.38,96,5c37.55,2.4,68.64,4.91,119,9c30.97,2.52,56.12,4.64,72,6c0,13.33,0,26.67,0,40c-646,0-1292,0-1938,0
							C-10.33,157.33-11.67,90.67-13,24z" />
            </svg>
        </div>
    </section>

    <section id="features" class="section section-with-shape-divider border-0 bg-transparent m-0 p-0">
        <div class="container pt-lg-5">
            <div class="row align-items-start justify-content-center py-5 mt-lg-4 mb-4">
                <div class="col-md-9 col-lg-5 col-xl-6 order-2 order-lg-1">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                        <img src="{{ asset('/assets/img/bg1.png') }}" class="img-fluid appear-animation" alt="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="margin-top: -65px;" />
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 order-1 order-lg-2 mb-5 mb-xl-0 pb-5 pb-xl-0">
                    <div class="overflow-hidden mb-1">
                        <span class="d-block text-color-default custom-letter-spacing-1 text-3-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Accura Blue Block Lenses</span>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Perfect For Everyone</h2>
                    </div>
                    <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Clear protection from the most damaging light rays. Various tissues in our eyes absorb high energy light rays. This light can cause damage. Drx Lab is always looking into the optical marketplace for new technology. We are excited to announce the Accura BlueBlock Lenses availability in SV, Progressive, Round bifocals and computer lenses.</p>
                    <a href="#reviews" data-hash data-hash-offset="0" data-hash-offset-lg="70" class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Reviews</a>
                </div>
            </div>
        </div>
        <div class="spacer pt-5 pb-3 my-lg-5 my-xl-0"></div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-y" style="height: 215px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 215" preserveAspectRatio="xMinYMin">
                <path fill="#EFF1F3" d="M-17,20c4.09,0.79,9.94,1.87,17,3c14.01,2.23,24.68,3.35,31,4c25.44,2.62,38.16,3.92,52,5
								c124.22,9.65,185,12,185,12c68.3,2.64,120.49,4.65,191,2c22.4-0.84,21.56-1.21,158-11c128.51-9.22,140.25-9.68,153-10
								c22.7-0.57,91-1.79,179,6c80.95,7.16,140.16,18.54,204,31c93.98,18.34,96.08,23.21,217,50c124.45,27.57,213.36,42.61,276,52
								c77.73,11.66,123.89,15.95,169,18c51.59,2.34,94.89,1.42,126,0c0,16.35,0,32.69,0,49.04c-651.33,0-1302.67,0-1954,0
								C-14.33,160.69-15.67,90.35-17,20z" />
            </svg>
        </div>
    </section>

    <section class="section section-with-shape-divider border-0 custom-bg-color-grey-1 overflow-visible z-index-1 m-0 pt-0 pb-1">
        <div class="container custom-xs-margin-top-1 pt-3 pb-lg-5 mb-lg-5">
            <div class="row align-items-start justify-content-center pb-5 mb-4">
                <div class="col-lg-7 col-xl-6 pb-5 pb-lg-0 mb-lg-5 mb-xl-0">
                    <div class="overflow-hidden mb-1">
                        <span class="d-block text-color-default custom-letter-spacing-1 text-3-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Accura Blue Block Lenses</span>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Anywhere You Want</h2>
                    </div>
                    <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Accura BlueBlock is almost clear lens unlike other Blue Light protection products currently in the marketplace.</p>
                    <a href="#features" data-hash data-hash-offset="0" data-hash-offset-lg="70" class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Features</a>
                </div>
                <div class="col-md-9 col-lg-5 col-xl-6 mb-5 mb-lg-0">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                        <img src="{{ asset('/assets/img/bg2.png') }}" class="img-fluid custom-xl-margin-top-1 appear-animation" alt="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" />
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom" style="height: 215px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 215" preserveAspectRatio="xMinYMin">
                <path fill="#FFF" d="M-13,24c3.03-0.28,7.53-0.66,13-1c26.45-1.65,46.73-0.59,57,0c76.61,4.41,118,9,118,9
							c70.55,7.83,105.82,11.74,151,19c32.98,5.3,65.87,11.44,179,37c145.79,32.94,138.71,33.5,203,47c85.09,17.87,149.08,31.32,237,40
							c113.11,11.17,203.29,8.29,234,7c16.74-0.7,63.49-4.13,157-11c107.74-7.91,117.84-9.32,153-10c52.52-1.02,97.8,0.79,153,3
							c21.27,0.85,54.96,2.38,96,5c37.55,2.4,68.64,4.91,119,9c30.97,2.52,56.12,4.64,72,6c0,13.33,0,26.67,0,40c-646,0-1292,0-1938,0
							C-10.33,157.33-11.67,90.67-13,24z" />
            </svg>
        </div>
    </section>

    <div class="container position-relative z-index-2 pt-5 mt-md-5 mt-xl-0 pt-xl-0">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-5 col-xl-6 mb-5 mb-lg-0">
                <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                    <img src="{{ asset('/assets/img/bg3.png') }}" class="img-fluid appear-animation" alt="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" />
                </div>
            </div>
            <div class="col-lg-7 col-xl-6 pb-4">
                <div class="overflow-hidden mb-1">
                    <span class="d-block text-color-default custom-letter-spacing-1 text-3-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Accura Blue Block Lenses</span>
                </div>
                <div class="overflow-hidden mb-4">
                    <h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Extra Comfort</h2>
                </div>
                <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Accura BlueBlock is available in Single vision, Progressive lenses, Digital Round bifocals, and computer lenses. It is available in four different materials: 1.67, 1.60, impact resistant 1.56 and polycarbonate</p>
                <a href="demo-product-landing-checkout.html" class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Buy Now!</a>
            </div>
        </div>
    </div>

    <div class="container container-xl-custom position-relative overflow-hidden pb-5">
        <svg class="position-absolute w-100 h-100 z-index-2 p-events-none d-none d-lg-block appear-animation" data-appear-animation="customSVGLineAnimTwo" data-appear-animation-delay="200" data-appear-animation-duration="3s" data-plugin-options="{'accY': -300, 'forceAnimation': true}" viewBox="0 0 120 120" version="1.1" xmlns="http://www.w3.org/2000/svg" style="bottom: -80px; left: 0;">
            <circle cx="60" cy="90" r="90" stroke="#edeeee" stroke-width="0.3" fill="transparent" />
        </svg>
        <div class="row pt-lg-5 mt-lg-5" id="tour">
            <div class="col text-center pt-5 mt-5">
                <div class="overflow-hidden mb-1">
                    <span class="d-block text-color-default positive-ls-3 text-3-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">360º VIRTUAL TOUR</span>
                </div>
                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-bold negative-ls-05 text-9 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Virtual Tour</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="cd-product-viewer-wrapper" data-frame="16" data-friction="0.33">
                    <div>
                        <figure class="product-viewer appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            <img src="{{ asset('/assets/img/sprite.png') }}" alt="Product Preview">
                            <div class="product-sprite" data-image="{{ asset('/assets/img/sprite.png') }}"></div>
                        </figure>

                        <div class="cd-product-viewer-handle">
                            <span class="fill"></span>
                            <span class="handle">
                                Handle
                                <span class="bars"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-height-3 bg-dark border-0 m-0" id="specifications">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-8 mb-lg-4">
                    <div class="overflow-hidden mb-1">
                        <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">
                            <span class="d-block text-color-light custom-letter-spacing-1 text-3-5 opacity-5 mb-0">THE MOST POWERFUL</span>
                        </div>
                    </div>
                    <h2 class="text-color-light font-weight-bold ls-0 text-9 mb-4">Specifications</h2>
                    <p class="text-3-5 text-color-light opacity-5">Accura BlueBlock is almost clear lens unlike other Blue Light protection products currently in the marketplace.</p>
                </div>
                <div class="col-lg-5 col-xl-4 mb-5 mb-lg-0 pt-lg-5">
                    <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
                        <span class="text-color-primary font-weight-bold text-11 line-height-1 me-4">
                            <span class="d-block text-color-light custom-font-size-2 line-height-3 font-weight-light opacity-5">Starting at</span>
                            $350
                        </span>
                        <a href="demo-product-landing-checkout.html" class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3">Buy Now!</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 class="text-color-light text-4 font-weight-bold mb-2">GENERAL</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 pe-lg-4 py-lg-2">
                    <ul class="list list-light list-unstyled mb-0">
                        <li class="text-color-light font-weight-light mb-1">It is not a coating like some other products and does not have a purple or blue reflective color.</li>
                        <li class="text-color-light font-weight-light mb-1">Accura BlueBlock is available in Single vision, Progressive lenses, Digital Round bifocals, and computer lenses.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 px-lg-4 py-lg-2">
                    <ul class="list list-light list-unstyled mb-0">
                        <li class="text-color-light font-weight-light mb-1">It does not have a yellow, orange or peach color like some other products in the market.</li>
                        <li class="text-color-light font-weight-light mb-1">It is available in four different materials: 1.67, 1.60, impact resistant 1.56 and polycarbonate.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 ps-lg-4 py-lg-2">
                    <ul class="list list-light list-unstyled mb-0">
                        <li class="text-color-light font-weight-light mb-1">The UV and HEV Blue Light protection comes from the lens material itself. Unlike some of the coating products which reflect the Blue Light, Accura BlueBlock absorbs and filters the damaging HEV (Blue Violet) light and at the same time it allows for the good Blue Light (Blue Turquoise).</li>
                        <li class="text-color-light font-weight-light mb-1">Accura BlueBlock is compatible with a wide variety of Anti-Reflective coatings and can be ordered with or without AR.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div id="products" class="container py-5 my-5">
        <div class="row">
            <div class="col">
                <div class="overflow-hidden mb-1 mt-5">
                    <span class="d-block text-color-default custom-letter-spacing-1 text-3-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Accura Blue Block Lenses</span>
                </div>
                <div class="overflow-hidden mb-4">
                    <h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Featured Products</h2>
                </div>
            </div>
            <div class="">
                <div class="owl-carousel owl-theme nav-bottom nav-bottom-align-left nav-lg nav-transparent nav-borders-light nav-arrow-light rounded-nav mb-2" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 4}, '1200': {'items': 4}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/1.svg') }}" class="img-fluid" alt="Accura Digi Pro Standard">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accura Digi Pro Standard</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="1">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="1"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/2.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accura DigiPro Digital</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="2">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="2"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/3.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accura DigiPro Signature</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="3">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="3"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/4.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accura EazyFit</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="4">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="4"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/5.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accura Smart Tech HD</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="5">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="5"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/6.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accura EyeLux HD</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="6">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="6"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/7.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accura Variview</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="7">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/8.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accura Allecta HD</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="8">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="8"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/9.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accutter HD</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="9">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="9"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="box-shadow-1">
                            <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                    <img src="{{ asset('/assets/img/products/10.svg') }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-content">
                                    <span class="thumb-info-content-inner bg-light p-4">
                                        <h4 class="mb-2">Accusport Polarized</h4>
                                        <p class="line-height-7 mb-0">Accura Blue Block</p>
                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                            <a href="#" class="side-panel-toggle text-uppercase font-weight-semibold text-decoration-underline" data-pid="10">View Details</a>
                                            <a href="#" class="side-panel-toggle btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7" data-pid="10"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection