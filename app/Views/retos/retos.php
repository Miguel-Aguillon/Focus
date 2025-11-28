<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Retos - FocusLearn</title>

    <!-- Iconos -->
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
            margin-bottom: 30px;
        }

        .retos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }

        .reto-card {
            background: var(--white);
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: left;
            position: relative;
            transition: transform 0.2s;
        }

        .reto-card:hover {
            transform: translateY(-6px);
        }

        .reto-card i {
            font-size: 35px;
            color: var(--azul-oscuro);
            margin-bottom: 10px;
        }

        .reto-card h3 {
            margin: 0 0 10px;
            color: var(--black);
        }

        .reto-card p {
            color: var(--muted);
            font-size: 15px;
            margin-bottom: 20px;
        }

        .btn-completar {
            display: inline-block;
            padding: 10px 15px;
            background: var(--azul-oscuro);
            color: var(--white);
            text-decoration: none;
            border-radius: 10px;
            font-size: 14px;
            transition: background 0.3s;
        }

        .btn-completar:hover {
            background: var(--accent-blue);
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
        <h1>Retos del Día</h1>
        <p class="subtitle">Supera estos desafíos para mejorar tu enfoque y mantener tu racha sin procrastinar.</p>

        <div class="retos-grid">

            <div class="reto-card">
                <i class="fa-solid fa-stopwatch"></i>
                <h3>Reto 1: 25 Minutos Enfocado</h3>
                <p>Realiza una sesión de concentración sin interrupciones usando técnica Pomodoro.</p>
                <a href="#" class="btn-completar">Completar reto</a>
            </div>

            <div class="reto-card">
                <i class="fa-solid fa-list-check"></i>
                <h3>Reto 2: Lista de 3 tareas</h3>
                <p>Define y completa al menos tres tareas importantes del día.</p>
                <a href="#" class="btn-completar">Completar reto</a>
            </div>

            <div class="reto-card">
                <i class="fa-solid fa-brain"></i>
                <h3>Reto 3: Mini prueba de memoria</h3>
                <p>Ejercita tu mente con un ejercicio de memoria rápida.</p>
                <a href="#" class="btn-completar">Completar reto</a>
            </div>

            <div class="reto-card">
                <i class="fa-solid fa-bolt"></i>
                <h3>Reto 4: Sin redes por 1 hora</h3>
                <p>Desconéctate del celular y redes sociales durante una hora completa.</p>
                <a href="#" class="btn-completar">Completar reto</a>
            </div>

            <div class="reto-card">
                <i class="fa-solid fa-book-open-reader"></i>
                <h3>Reto 5: Lección recomendada</h3>
                <p>Abre una lección al azar y aprende algo nuevo hoy.</p>
                <a href="#" class="btn-completar">Completar reto</a>
            </div>

        </div>
    </main>

    <footer>
        © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
    </footer>

</body>

</html>
