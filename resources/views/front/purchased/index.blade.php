@extends('front.master')

@section('title','Purchased')

@section('body')



            <!---index page--->
            <div class="ms_download_wrapper common_pages_space">
                <div class="ms_download_inner">
                    <div class="album_inner_list">
                        <div class="slider_heading_wrap marger_bottom30">
                            <div class="slider_cheading">
                                <h4 class="cheading_title">Purchased Tracks &nbsp;</h4>
                            </div>
                        </div>
                        <div class="album_list_wrapper">
                            <ul class="album_list_name">
                                <li>#</li>
                                <li>Song Title</li>
                                <li>Album</li>
                                <li class="text-center">Duration</li>
                                <li class="text-center">Add To Favourites</li>
                                <li class="text-center">More</li>
                                <li class="text-center">remove</li>
                            </ul>
                            <ul class="play_active_song">
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">01</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Cloud Nine</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">02</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">One More Stranger</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">03</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Gimme Some Courage</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">04</span>
                                        <span class="play_hover">
                                            <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                            <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                        </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">bar
                                        Bloodlust</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">05</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">
                                        Desired Games</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">06</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Cloud Nine</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">07</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Until I Met You</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">08</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Endless Things</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">09</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Gimme Some Courage</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="javascript:;" class="dwld_sn">
                                        <span class="play_no">10</span>
                                        <span class="play_hover">
                                        <img src="{{asset('/')}}front/assets/images/svg/play_songlist.svg" alt="Play" class="img-fluid list_play">
                                        <img src="{{asset('/')}}front/assets/images/svg/sound_bars.svg" alt="bar" class="img-fluid list_play_bar">
                                    </span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">One More Stranger</a></li>
                                <li><a href="javascript:;">Dream Your Moments</a></li>
                                <li class="text-center"><a href="javascript:;">5:26</a></li>
                                <li class="text-center">
                                    <a href="javascript:;">
                                        <span class="list_heart">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"/></svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list_more">
                                    <a href="javascript:;" class="songslist_moreicon">
                                        <span >
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                                        </span>
                                    </a>
                                    <ul class="ms_common_dropdown ms_downlod_list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_fav"></span>Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_downld"></span>Download Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_playlist"></span>Add to Playlist
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span class="common_drop_icon drop_share"></span>Share
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="text-center"><a href="javascript:;">
                                    <span class="list_close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="8px" height="8px">
                                        <path fill-rule="evenodd"  fill="rgb(124 142 165)"
                                              d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"/>
                                        </svg>
                                    </span></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="ms_view_more padder_bottom20 padder_top50 text-center">
                        <a href="javascript:;" class="ms_btn">view more</a>
                    </div>

                </div>
            </div>


        </div><!---Main Content end--->

        <!----Audio Player Section---->
{{--        <div class="ms_player_wrapper">--}}
{{--            <div class="ms_player_close">--}}
{{--                <i class="fa fa-angle-down" aria-hidden="true"></i>--}}
{{--            </div>--}}
{{--            <div class="player_mid">--}}
{{--                <div class="audio-player">--}}
{{--                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>--}}
{{--                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">--}}
{{--                        <div class="player_left">--}}
{{--                            <div class="ms_play_song">--}}
{{--                                <div class="play_song_name">--}}
{{--                                    <a href="javascript:void(0);" id="playlist-text">--}}
{{--                                        <div class="jp-now-playing flex-item">--}}
{{--                                            <div class="jp-track-name"></div>--}}
{{--                                            <div class="jp-artist-name"></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="play_song_options">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="javascript:;"><span class="song_optn_icon"><i class="ms_icon icon_download"></i></span>download now</a></li>--}}
{{--                                    <li><a href="javascript:;"><span class="song_optn_icon"><i class="ms_icon icon_fav"></i></span>Add To Favourites</a></li>--}}
{{--                                    <li><a href="javascript:;"><span class="song_optn_icon"><i class="ms_icon icon_playlist"></i></span>Add To Playlist</a></li>--}}
{{--                                    <li><a href="javascript:;"><span class="song_optn_icon"><i class="ms_icon icon_share"></i></span>Share</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>--}}
{{--                        </div>--}}
{{--                        <!----Right Queue---->--}}
{{--                        <div class="jp_queue_wrapper">--}}
{{--                            <span class="que_text ms_btn" id="myPlaylistQueue"><i class="fa fa-angle-up" aria-hidden="true"></i> queue</span>--}}
{{--                            <div id="playlist-wrap" class="jp-playlist">--}}
{{--                                <div class="jp_queue_cls"><i class="fa fa-angle-down" aria-hidden="true"></i></div>--}}
{{--                                <h2>queue</h2>--}}
{{--                                <div class="jp_queue_list_inner">--}}
{{--                                    <ul>--}}
{{--                                        <li>&nbsp;</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="jp_queue_btn">--}}
{{--                                    <a href="clear_modal.html" class="ms_save ms_btn" data-toggle="modal" data-target="#save_modal">Save Playlist</a>--}}
{{--                                    <a href="javascript:;" class="ms_clear" data-toggle="modal" data-target="#clear_modal">clear</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="jp-type-playlist">--}}
{{--                            <div class="jp-gui jp-interface flex-wrap">--}}
{{--                                <div class="jp-controls flex-item">--}}
{{--                                    <button class="jp-previous" tabindex="0">--}}
{{--                                        <i class="ms_play_control"></i>--}}
{{--                                    </button>--}}
{{--                                    <button class="jp-play" tabindex="0">--}}
{{--                                        <i class="ms_play_control"></i>--}}
{{--                                    </button>--}}
{{--                                    <button class="jp-next" tabindex="0">--}}
{{--                                        <i class="ms_play_control"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="jp-progress-container flex-item">--}}
{{--                                    <div class="jp-time-holder">--}}
{{--                                        <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>--}}
{{--                                        <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="jp-progress">--}}
{{--                                        <div class="jp-seek-bar">--}}
{{--                                            <div class="jp-play-bar">--}}
{{--                                                <div class="bullet">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="jp-volume-controls flex-item">--}}
{{--                                    <div class="widget knob-container">--}}
{{--                                        <div class="knob-wrapper-outer">--}}
{{--                                            <div class="knob-wrapper">--}}
{{--                                                <div class="knob-mask">--}}
{{--                                                    <div class="knob d3"><span></span></div>--}}
{{--                                                    <div class="handle"></div>--}}
{{--                                                    <div class="round">--}}
{{--                                                        <img src="{{asset('/')}}front/assets/images/svg/volume.svg" alt="volume">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- <input></input> -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="jp-toggles flex-item">--}}
{{--                                    <button class="jp-shuffle" tabindex="0" title="Shuffle">--}}
{{--                                        <i class="ms_play_control"></i></button>--}}
{{--                                    <button class="jp-repeat" tabindex="0" title="Repeat"><i class="ms_play_control"></i></button>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--main div-->--}}
{{--        </div>--}}

    </div>



@endsection
