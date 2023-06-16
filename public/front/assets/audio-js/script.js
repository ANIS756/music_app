const wrapper = document.querySelector(".jp-type-playlist .wrapper");
const playPauseBtn = wrapper.querySelector(".play-pause");
const mainAudio = wrapper.querySelector("#main-audio");
const progressArea = wrapper.querySelector(".progress-area");
const progressBar = progressArea.querySelector(".progress-bar");
const songNameElement = wrapper.querySelector("#song-name");
const songArtistElement = wrapper.querySelector("#song-artist");
const songImageElement = wrapper.querySelector("#song-image");
const currentTimeElement = wrapper.querySelector(".current-time");
const durationElement = wrapper.querySelector(".max-duration");
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
    updateTimer(currentTime, duration); // Update the song timer
});

progressArea.addEventListener("click", (e) => {
    const progressWidth = progressArea.clientWidth;
    const clickedOffsetX = e.offsetX;
    const duration = mainAudio.duration;

    mainAudio.currentTime = (clickedOffsetX / progressWidth) * duration;
});

function updateTimer(currentTime, duration) {
    let currentMinutes = Math.floor(currentTime / 60);
    let currentSeconds = Math.floor(currentTime % 60);
    let durationMinutes = Math.floor(duration / 60);
    let durationSeconds = Math.floor(duration % 60);

    if (currentSeconds < 10) {
        currentSeconds = `0${currentSeconds}`;
    }
    if (durationSeconds < 10) {
        durationSeconds = `0${durationSeconds}`;
    }

    const timer = `${currentMinutes}:${currentSeconds} / ${durationMinutes}:${durationSeconds}`;

    currentTimeElement.textContent = `${currentMinutes}:${currentSeconds}`;
    durationElement.textContent = `${durationMinutes}:${durationSeconds}`;
}


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



