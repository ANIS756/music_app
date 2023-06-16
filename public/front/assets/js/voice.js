const searchForm = document.querySelector("#search-form");
const searchFormInput = searchForm.querySelector("input");
const info = document.querySelector(".info");

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

if (SpeechRecognition) {
    console.log("Your Browser supports speech Recognition");

    let recognition = new SpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "en-US";
    let isRecognitionActive = true;

    searchForm.insertAdjacentHTML("beforeend", '<button type="button"><i class="fas fa-microphone"></i></button>');
    searchFormInput.style.paddingRight = "50px";

    recognition.addEventListener("result", resultOfSpeechRecognition);

    function resultOfSpeechRecognition(event) {
        const currentResultIndex = event.resultIndex;
        const transcript = event.results[currentResultIndex][0].transcript;

        if (transcript.toLowerCase().trim() === "stop recording") {
            recognition.stop();
            isRecognitionActive = false;
            console.log("Recognition stopped");
        }
        else if (!searchFormInput.value) {
            searchFormInput.value = transcript;
        }

        else {
            if (transcript.toLowerCase().trim() === "go") {
                searchForm.submit();
            } else if (transcript.toLowerCase().trim() === "reset input") {
                searchFormInput.value = "";
            }
            else if (transcript.toLowerCase().trim() === "discover") {
                window.location.href = homeCommandUrl;
            }
            else if (transcript.toLowerCase().trim() === "artist") {
                window.location.href = artistCommadUrl;
            }
            else if (transcript.toLowerCase().trim() === "album") {
                window.location.href = albumCommadUrl;
            }
            else if (transcript.toLowerCase().trim() === "music") {
                window.location.href = anisCommandUrl;
            }

            else if (transcript.toLowerCase().trim().startsWith("play song")) {
                const songName = transcript.toLowerCase().trim().replace("play song", "").trim();
                playSongWithVoiceCommand(songName);
            }

            else {
                searchFormInput.value = transcript;
            }
        }
    }

// playSongWithVoiceCommand function
    function playSongWithVoiceCommand(songName) {
        const songList = document.querySelectorAll('.songslist_number');
        for (let i = 0; i < songList.length; i++) {
            const songTitle = songList[i].querySelector('.songslist_sn').textContent.toLowerCase();
            if (songTitle.includes(songName)) {
                const playButton = songList[i].querySelector('.songslist_play img');
                if (playButton) {
                    playButton.click();
                    console.log('Music Played on Command!');
                    return; // Exit the function once the song is played
                }
            }
        }
        console.log('Song not found.');
    }


    function toggleRecognition() {
        if (isRecognitionActive) {
            recognition.stop();
            isRecognitionActive = false;
            console.log("Recognition paused");
        } else {
            recognition.start();
            isRecognitionActive = true;
            console.log("Recognition resumed");
        }
    }


    recognition.addEventListener("end", () => {
        if (isRecognitionActive) {
            recognition.start();
            console.log("Recognition restarted");
        }
    });

    recognition.start();
} else {
    console.log("Your Browser does not support speech Recognition");
}
