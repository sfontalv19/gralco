document.addEventListener('DOMContentLoaded', function() {
    const btnStart = document.getElementById('btnStart');
    const btnStop = document.getElementById('btnEnd');
    const btnSaveAudio = document.getElementById('btnSaveAudio');
    const actaTextArea = document.getElementById('acta');
    let recognition;
    let mediaRecorder;
    let audioChunks = [];

    if ('webkitSpeechRecognition' in window) {
        recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        recognition.lang = 'es-ES';
        recognition.interimResults = false;

        recognition.onresult = (event) => {
            const texto = event.results[event.results.length - 1][0].transcript;
            actaTextArea.value += texto + ' ';
        };

        btnStart.addEventListener('click', () => {
            recognition.start();
        });

        btnStop.addEventListener('click', () => {
            recognition.stop();
        });
    } else {
        console.error("El reconocimiento de voz no es compatible con este navegador.");
    }

    navigator.mediaDevices.getUserMedia({ audio: true })
        .then(stream => {
            mediaRecorder = new MediaRecorder(stream);

            mediaRecorder.ondataavailable = event => {
                audioChunks.push(event.data);
            };

            btnStart.addEventListener('click', () => {
                audioChunks = [];
                mediaRecorder.start();
            });

            btnStop.addEventListener('click', () => {
                mediaRecorder.stop();
            });

            mediaRecorder.onstop = () => {
                const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                const audioUrl = URL.createObjectURL(audioBlob);
                const audio = new Audio(audioUrl);
                audio.play();

                btnSaveAudio.addEventListener('click', () => {
                    const formData = new FormData();
                    formData.append('audio', audioBlob, 'audio.wav');
                    fetch('/guardar_audio.php', {
                        method: 'POST',
                        body: formData
                    }).then(response => {
                        if (response.ok) {
                            alert('Audio guardado con éxito.');
                        } else {
                            alert('Error al guardar el audio.');
                        }
                    }).catch(error => {
                        console.error('Error:', error);
                    });
                });
            };
        }).catch(error => {
            console.error('Error al acceder al micrófono:', error);
        });
});



// to do 

document.addEventListener('DOMContentLoaded', (event) => {
    cargarTareas();
});

function cargarTareas() {
    fetch('obtener_tareas.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(tarea => {
                agregarTareaDOM(tarea.texto);
            });
        });
}

function agregarTarea() {
    let nuevaTareaTexto = document.getElementById("nuevaTarea").value;
    
    if (nuevaTareaTexto === "") {
        alert("Por favor ingrese una tarea");
        return;
    }


    agregarTareaDOM(nuevaTareaTexto);

    fetch('guardar_tarea.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `texto=${encodeURIComponent(nuevaTareaTexto)}`
    });
}

function agregarTareaDOM(texto) {
    let nuevaTarea = document.createElement("li");
    nuevaTarea.textContent = texto;
    nuevaTarea.classList.add("task"); // Agrega la clase "task" para cambiar el color del texto

    let botonEliminar = document.createElement("button");
    botonEliminar.textContent = "Eliminar";
    botonEliminar.onclick = function() {
        nuevaTarea.remove();
    };

    nuevaTarea.appendChild(botonEliminar);
    document.getElementById("listaDeTareas").appendChild(nuevaTarea);
}