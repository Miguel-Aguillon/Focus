<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías - FocusLearn</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            color: #000;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #1f1f1f;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .card {
            background: #A7C7E7; /* Azul pastel */
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s;
            color: #000;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.25);
        }

        .card h3 {
            margin: 0 0 10px 0;
            font-size: 22px;
            color: #000000;
        }

        .card p {
            font-size: 15px;
            margin: 0;
            color: #1f1f1f;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Categorías de Aprendizaje</h1>

        <div class="grid">

            <div class="card">
                <h3>Historia</h3>
                <p>Descubre eventos memorables, personajes clave y culturas del mundo.</p>
            </div>

            <div class="card">
                <h3>Ciencia</h3>
                <p>Aprende biología, química y curiosidades científicas sin procrastinar.</p>
            </div>

            <div class="card">
                <h3>Geografía</h3>
                <p>Explora países, capitales, culturas, mapas y retos de ubicación.</p>
            </div>

            <div class="card">
                <h3>Arte & Cultura</h3>
                <p>Conoce música, pintura, literatura y expresiones culturales.</p>
            </div>

            <div class="card">
                <h3>Tecnología</h3>
                <p>Conceptos básicos, avances modernos y cultura digital actual.</p>
            </div>

            <div class="card">
                <h3>Retos Diarios</h3>
                <p>Mini actividades para reforzar hábitos sin procrastinar.</p>
            </div>

        </div>
    </div>

</body>
</html>
