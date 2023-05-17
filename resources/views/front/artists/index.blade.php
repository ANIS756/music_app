@extends('front.master')

@section('title','Artist')

@section('body')

    <!---Artist page--->
    <div class="ms_artist_wrapper common_pages_space">
        <div class="ms_artist_inner">
            <!-- Trending section -->
            <div class="ms_artist_slider trending_artist_slider">
                <div class="slider_heading_wrap">
                    <div class="slider_cheading">
                        <h4 class="cheading_title">Trending Artists &nbsp;</h4>
                    </div>
                    <!-- Add Arrows -->
                    <div class="slider_cmn_controls">
                        <div class="slider_cmn_nav "><span class="swiper-button-next1 slider_nav_next"></span></div>
                        <div class="slider_cmn_nav"><span class="swiper-button-prev1 slider_nav_prev"></span></div>
                    </div>
                </div>
                <div class="ms_artist_innerslider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/01.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">One More Stranger</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/02.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Cloud Nine</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/03.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Desired Games</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/04.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Bloodlust 2</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/05.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Until I Met You 2</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/06.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Desired Games 2</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/07.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Don’t Let me down</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recommended Artists section -->
            <div class="ms_artist_slider recommended_artist_slider">
                <div class="slider_heading_wrap">
                    <div class="slider_cheading">
                        <h4 class="cheading_title">Recommended Artists &nbsp;</h4>
                    </div>
                    <!-- Add Arrows -->
                    <div class="slider_cmn_controls">
                        <div class="slider_cmn_nav "><span class="swiper-button-next2 slider_nav_next"></span></div>
                        <div class="slider_cmn_nav"><span class="swiper-button-prev2 slider_nav_prev"></span></div>
                    </div>
                </div>
                <div class="ms_artist_innerslider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/08.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Don’t Let me down</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/09.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Desired Games 2</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/10.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Until I Met You 2</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/11.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Bloodlust 2</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/12.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Desired Games</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/13.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">Cloud Nine</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/artist/14.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="artist_single.html">One More Stranger</a>
                                        <p class="slider_cdescription slider_artist_des">Anna Ellison, Claire Hudson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
