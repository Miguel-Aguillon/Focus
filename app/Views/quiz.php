<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Quiz de Historia</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
            background: #f4f4f4;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px #ccc;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: none;
            background: #2c72ff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #1b4fcc;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Quiz de Historia</h2>

    <h3 id="pregunta"></h3>

    <div id="opciones"></div>

    <p id="progreso"></p>
</div>

<script>
    const preguntas = <?= json_encode($preguntas); ?>;
    let indice = 0;
    let puntaje = 0;

    function mostrarPregunta() {
        let p = preguntas[indice];

        document.getElementById("pregunta").innerText = p.pregunta;

        let opcionesHTML = "";
        p.opciones.forEach(op => {
            opcionesHTML += `
                <button onclick="responder('${op}')">${op}</button>
            `;
        });

        document.getElementById("opciones").innerHTML = opcionesHTML;
        document.getElementById("progreso").innerText =
            "Pregunta " + (indice + 1) + " de " + preguntas.length;
    }

    function responder(opcion) {
        if (opcion === preguntas[indice].correcta) {
            puntaje++;
        }

        indice++;

        if (indice < preguntas.length) {
            mostrarPregunta();
        } else {
            mostrarResultado();
        }
    }

    function mostrarResultado() {
        document.querySelector(".card").innerHTML = `
            <h2>¡Quiz finalizado!</h2>
            <p>Puntaje final: <strong>${puntaje} / ${preguntas.length}</strong></p>
            <button onclick="location.href='<?= base_url('inicio') ?>'">Volver al inicio</button>

        `;
    }

    mostrarPregunta();
</script>

</body>
</html>
