<div class="ms_player_wrapper">
    <div class="ms_player_close">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </div>
                <!----Player---->
                <div class="jp-type-playlist">
                    <div class="jp-gui jp-interface flex-wrap">
                        <div class="wrapper">
                            <div class="img-area" >
                                <img id="song-image" src="{{asset('/')}}front/assets/images/music/01.jpg" height="100px" width="90%" style="margin-left: 30px" alt="">
                            </div>
                            <div class="song-details">
                                <p class="name" id="song-name" style="color: white">Song Name Here!</p>
                                <p class="artist" id="song-artist" style="color: white">Artist Name!</p>
                            </div>
                            <div class="progress-area">
                                <div class="progress-bar">
                                    <audio id="main-audio" src=""></audio>
                                </div>
                                <div class="song-timer">
                                    <span class="current-time">0:00</span>
                                    <span class="max-duration">0:00</span>
                                </div>
                            </div>
                            <div class="controls">
                                <i id="repeat-plist" class="material-icons" title="Playlist looped">repeat</i>
                                <i id="prev" class="material-icons">skip_previous</i>
                                <div class="play-pause">
                                    <i class="material-icons">play_arrow</i>
                                </div>

                                <i id="next" class="material-icons">skip_next</i>
                                <i id="more-music" class="material-icons">queue_music</i>
                            </div>
                            <div class="music-list">
                                <div class="header">
                                    <div class="row">
                                        <i class="list material-icons">queue_music</i>
                                        <span>Music list</span>
                                    </div>
                                    <i id="close" class="material-icons">close</i>
                                </div>
                                <ul id="music-list-container">
                                    <!-- Existing music list items -->
                                </ul>
                            </div>
                            <div>
                                <button id="speech-button" hidden>Toggle Speech</button>
                            </div>

                        </div>
                    </div>
                </div>



                <!----end Player---->
    <!--main div-->
</div>
