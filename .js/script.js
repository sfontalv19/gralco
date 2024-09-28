const btnStart = document.getElementById('btnStart');
const btnEnd = document.getElementById('btnEnd');
const btntextarea = document.getElementById('btntextarea');

let recognition;

if ('webkitSpeechRecognition' in window) {
    recognition = new webkitSpeechRecognition();

    recognition.continuous = true;
    recognition.lang = 'es-ES';
    recognition.interimResult = false;

    btnStart.addEventListener('click', () => {
        recognition.start();
    });

    btnEnd.addEventListener('click', () => {
        recognition.abort();
    });

    recognition.onresult = (event) => {
        console.log(event);
    }
} else {
    console.error("El reconocimiento de voz no es compatible con este navegador.");
}