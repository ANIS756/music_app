const wrapper = document.querySelector(".jp-type-playlist .wrapper");
const playPauseBtn = wrapper.querySelector(".play-pause");
const mainAudio = wrapper.querySelector("#main-audio");
const progressArea = wrapper.querySelector(".progress-area");
const progressBar = progressArea.querySelector(".progress-bar");
const songNameElement = wrapper.querySelector("#song-name");
const songArtistElement = wrapper.querySelector("#song-artist");
const songImageElement = wrapper.querySelector("#song-image");

let isMusicPaused = true;

function playMusic() {
    isMusicPaused = false;
    wrapper.classList.add("paused");
    playPauseBtn.querySelector("i").innerText = "pause";
    mainAudio.play();
}

function pauseMusic() {
    isMusicPaused = true;
    wrapper.classList.remove("paused");
    playPauseBtn.querySelector("i").innerText = "play_arrow";
    mainAudio.pause();
}

playPauseBtn.addEventListener("click", () => {
    const isMusicPlay = wrapper.classList.contains("paused");
    isMusicPlay ? pauseMusic() : playMusic();
});

mainAudio.addEventListener("timeupdate", (e) => {
    const currentTime = mainAudio.currentTime;
    const duration = mainAudio.duration;
    const progressWidth = (currentTime / duration) * 100;
    progressBar.style.width = `${progressWidth}%`;
});

progressArea.addEventListener("click", (e) => {
    const progressWidth = progressArea.clientWidth;
    const clickedOffsetX = e.offsetX;
    const duration = mainAudio.duration;

    mainAudio.currentTime = (clickedOffsetX / progressWidth) * duration;
});


function playSong(audioFile, name, artist, image) {
    if (!isMusicPaused) {
        pauseMusic();
    }

    mainAudio.src = audioFile;
    songNameElement.textContent = name;
    songArtistElement.textContent = artist;
    songImageElement.src = image;

    // Wait for the audio to be loaded before playing
    mainAudio.addEventListener('loadedmetadata', function() {
        playMusic();
    });
}


