@extends('front.master')

@section('title','Albums')

@section('body')

    <div class="ms_artist_wrapper common_pages_space">
        <div class="ms_artist_inner">
            <!-- Top Albums section -->
            <div class="ms_artist_slider top_album_slider">
                <div class="slider_heading_wrap">
                    <div class="slider_cheading">
                        <h4 class="cheading_title">Top Albums &nbsp;</h4>
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
                                        <img src="{{asset('/')}}front/assets/images/album/01.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0);">One More Stranger</a>
                                        <p class="slider_cdescription slider_artist_des">2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/02.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Cloud Nine</a>
                                        <p class="slider_cdescription slider_artist_des">2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/03.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Desired Games</a>
                                        <p class="slider_cdescription slider_artist_des">2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/04.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Bloodlust 2</a>
                                        <p class="slider_cdescription slider_artist_des">2017</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/05.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Until I Met You 2</a>
                                        <p class="slider_cdescription slider_artist_des">2016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/06.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Desired Games 2</a>
                                        <p class="slider_cdescription slider_artist_des">2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recommended Albums section -->
            <div class="ms_artist_slider recommended_album_slider">
                <div class="slider_heading_wrap">
                    <div class="slider_cheading">
                        <h4 class="cheading_title">Recommended Albums &nbsp;</h4>
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
                                        <img src="{{asset('/')}}front/assets/images/album/07.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Desired Games2</a>
                                        <p class="slider_cdescription slider_artist_des">2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/08.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Until I Met You 2</a>
                                        <p class="slider_cdescription slider_artist_des">2016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/09.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Bloodlust 2</a>
                                        <p class="slider_cdescription slider_artist_des">2017</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/10.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Desired Games</a>
                                        <p class="slider_cdescription slider_artist_des">2022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/11.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Cloud Nine</a>
                                        <p class="slider_cdescription slider_artist_des">2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/12.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">One More Stranger</a>
                                        <p class="slider_cdescription slider_artist_des">2020</p>
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
