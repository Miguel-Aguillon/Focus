
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Logros - FocusLearn</title>

    <!-- Íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
            font-family: Arial, sans-serif;
            background: var(--pastel-blue);
        }

        header {
            background: var(--azul-oscuro);
            padding: 15px 20px;
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h2 {
            margin: 0;
            font-size: 22px;
        }

        header a {
            color: var(--white);
            text-decoration: none;
            font-size: 18px;
        }

        main {
            padding: 30px;
            text-align: center;
        }

        h1 {
            margin-bottom: 10px;
            color: var(--black);
        }

        .subtitle {
            color: var(--muted);
            font-size: 18px;
            margin-bottom: 40px;
        }

        .logros-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 25px;
        }

        .logro-card {
            background: var(--white);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.2s;
        }

        .logro-card:hover {
            transform: translateY(-5px);
        }

        .logro-card i {
            font-size: 40px;
            color: var(--azul-oscuro);
            margin-bottom: 15px;
        }

        .logro-card h3 {
            margin: 10px 0;
            color: var(--black);
        }

        .logro-card p {
            color: var(--muted);
            font-size: 15px;
        }

        footer {
            margin-top: 40px;
            padding: 15px;
            background: var(--white);
            text-align: center;
            color: var(--muted);
        }
    </style>
</head>

<body>

    <header>
        <h2>FocusLearn</h2>
        <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>
    </header>

    <main>
        <h1>Mis Logros</h1>
        <p class="subtitle">Estos son tus reconocimientos por mantener disciplina y evitar la procrastinación.</p>

        <div class="logros-grid">

            <div class="logro-card">
                <i class="fa-solid fa-medal"></i>
                <h3>Primer Día Enfocado</h3>
                <p>Completaste tu primer día sin procrastinar.</p>
            </div>

            <div class="logro-card">
                <i class="fa-solid fa-fire"></i>
                <h3>Racha de 3 Días</h3>
                <p>Mantienes una racha constante de disciplina.</p>
            </div>

            <div class="logro-card">
                <i class="fa-solid fa-book"></i>
                <h3>10 Lecciones Completadas</h3>
                <p>Demostraste compromiso con tu aprendizaje.</p>
            </div>

            <div class="logro-card">
                <i class="fa-solid fa-trophy"></i>
                <h3>5 Retos Superados</h3>
                <p>Tu enfoque te llevó a superar varios desafíos.</p>
            </div>

            <div class="logro-card">
                <i class="fa-solid fa-star"></i>
                <h3>Logro Especial</h3>
                <p>Reconocimiento por esfuerzo y constancia.</p>
            </div>

        </div>
    </main>

    <footer>
        © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
    </footer>

</body>

</html>
