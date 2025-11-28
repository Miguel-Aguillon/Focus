<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías - FocusLearn</title>

    <style>
        :root {
            --pastel-blue: #cfeffd;
            --accent-blue: #9be0ff;
            --azul-oscuro: #4cbbee;
            --white: #ffffff;
            --black: #0b0b0b;
            --muted: #6b7280;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--pastel-blue);
            color: var(--black);
        }

        header {
            background: var(--azul-oscuro);
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--white);
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }

        header h2 {
            margin: 0;
        }

        header a {
            color: var(--white);
            text-decoration: none;
            font-weight: bold;
            background: var(--accent-blue);
            padding: 8px 15px;
            border-radius: 10px;
        }

        /* Contenedor */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        /* Título principal */
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            color: var(--black);
        }

        /* Grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 25px;
        }

        /* Tarjeta */
        .card {
            background: var(--white);
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            transition: 0.25s ease;
            border: 2px solid var(--accent-blue);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            border-color: var(--azul-oscuro);
        }

        .card h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: var(--azul-oscuro);
        }

        .card p {
            margin: 0;
            color: var(--muted);
            font-size: 15px;
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            background: var(--white);
            color: var(--muted);
        }
    </style>
</head>

<body>

<header>
    <h2>FocusLearn</h2>
    <a href="<?= base_url('/') ?>">Inicio</a>
</header>

<div class="container">
    <h1>Categorías de Aprendizaje</h1>

    <div class="grid">

        <div class="card">
            <h3>Historia</h3>
            <p>Eventos memorables, personajes clave y culturas del mundo.</p>
        </div>

        <div class="card">
            <h3>Ciencia</h3>
            <p>Biología, química, física y curiosidades científicas.</p>
        </div>

        <div class="card">
            <h3>Geografía</h3>
            <p>Países, capitales, mapas, culturas y ubicaciones.</p>
        </div>

        <div class="card">
            <h3>Arte & Cultura</h3>
            <p>Música, pintura, literatura y expresiones culturales.</p>
        </div>

        <div class="card">
            <h3>Tecnología</h3>
            <p>Conceptos, avances y cultura digital moderna.</p>
        </div>

        <div class="card">
            <h3>Retos Diarios</h3>
            <p>Mini desafíos para desarrollar hábitos y disciplina.</p>
        </div>

    </div>
</div>

<footer>
    © <?= date('Y') ?> FocusLearn — Todos los derechos reservados.
</footer>

</body>
</html>
