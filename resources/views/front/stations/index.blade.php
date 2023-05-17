@extends('front.master')

@section('title','Stations')

@section('body')

    <div class="ms_artist_wrapper common_pages_space">
        <div class="ms_artist_inner">
            <!-- Top Albums section -->
            <div class="ms_artist_slider top_album_slider">
                <div class="slider_heading_wrap">
                    <div class="slider_cheading">
                        <h4 class="cheading_title">Discover radio stations by genre &nbsp;</h4>
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
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Today’s Hit</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/radio/01.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Dance / Electronic</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/03.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Rock</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/radio/02.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Classical Music</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/album/05.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Comedy Club</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/radio/03.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Pop / Hits</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
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
                        <h4 class="cheading_title">Filter radio by location &nbsp;</h4>
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
                                        <img src="{{asset('/')}}front/assets/images/radio/04.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Califonia</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/radio/05.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Colorado</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/radio/06.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Indiana</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/radio/07.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">North Carolina</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/radio/08.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">Oregon</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider_cbox slider_artist_box text-center">
                                    <div class="slider_cimgbox slider_artist_imgbox">
                                        <img src="{{asset('/')}}front/assets/images/radio/09.jpg" alt="artist" class="img-fluid">
                                    </div>
                                    <div class="slider_ctext slider_artist_text">
                                        <a class="slider_ctitle slider_artist_ttl" href="javascript:void(0)">South Dakota</a>
                                        <p class="slider_cdescription slider_artist_des">Total Channel : 12</p>
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
