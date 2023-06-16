// Check if the browser supports speech synthesis
if ('speechSynthesis' in window) {
    console.log('Speech synthesis is supported in this browser.');

    const speechButton = document.querySelector('#speech-button');
    const textToSpeak = 'Hello, world!'; // Text to be converted to speech

    // Create a new SpeechSynthesisUtterance instance for the welcome message
    const welcomeSpeech = new SpeechSynthesisUtterance('Recognition Start!');

    // Create a new SpeechSynthesisUtterance instance for the main speech
    const speechUtterance = new SpeechSynthesisUtterance(textToSpeak);

    // Optional: Customize speech settings for the main speech
    speechUtterance.lang = 'en-US'; // Set the language (default: browser's language)
    speechUtterance.volume = 1; // Set the volume (0 to 1)
    speechUtterance.rate = 1; // Set the rate of speech (0.1 to 10)
    speechUtterance.pitch = 1; // Set the pitch of speech (0 to 2)

    // Event listener for when speech synthesis starts for the main speech
    speechUtterance.onstart = () => {
        console.log('Speech started');
    };

    // Event listener for when speech synthesis ends for the main speech
    speechUtterance.onend = () => {
        console.log('Speech ended');
    };

    // Event listener for when speech synthesis starts for the welcome speech
    welcomeSpeech.onstart = () => {
        console.log('Recognition speech started');
    };

    // Event listener for when speech synthesis ends for the welcome speech
    welcomeSpeech.onend = () => {
        console.log('Recognition speech ended');
    };

    // Start speech synthesis for the welcome speech
    speechSynthesis.speak(welcomeSpeech);

    // Event listener for the speech button click
    speechButton.addEventListener('click', () => {
        // Check if speech synthesis is currently speaking
        if (speechSynthesis.speaking) {
            // Stop the current speech
            speechSynthesis.cancel();
        } else {
            // Start speech synthesis for the main speech
            speechSynthesis.speak(speechUtterance);
        }
    });
} else {
    console.log('Speech synthesis is not supported in this browser.');
}
