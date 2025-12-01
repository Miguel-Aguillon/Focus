<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Logros - FocusLearn</title>

    <!-- Íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* ---------- RESET ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffffff, #A7C7E7);
            color: #000;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ---------- HEADER ---------- */
        header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        header h2 {
            font-size: 22px;
            font-weight: 700;
        }

        header a {
            text-decoration: none;
            color: #000;
            font-weight: 600;
            transition: 0.3s;
        }

        header a:hover {
            color: #007bff;
        }

        /* ---------- MAIN ---------- */
        main {
            flex: 1;
            padding: 60px 20px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        p.subtitle {
            font-size: 16px;
            max-width: 700px;
            margin: 0 auto 40px auto;
            color: #333;
        }

        /* ---------- GRID LOGROS ---------- */
        .logros-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            max-width: 1000px;
            margin: auto;
        }

        /* ---------- CARDS ---------- */
        .logro-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 35px 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: .3s ease;
            cursor: pointer;
        }

        .logro-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
        }

        .logro-card i {
            font-size: 50px;
            color: #000;
            margin-bottom: 15px;
        }

        .logro-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .logro-card p {
            font-size: 15px;
            color: #444;
            line-height: 1.5;
        }

        /* ---------- MODAL ---------- */
        .modal-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
            display: none;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        .modal {
            background: rgba(255,255,255,0.9);
            padding: 35px;
            width: 90%;
            max-width: 450px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: fadeInModal .3s ease;
        }

        @keyframes fadeInModal {
            from {opacity: 0; transform: scale(0.8);}
            to {opacity: 1; transform: scale(1);}
        }

        .modal i {
            font-size: 70px;
            margin-bottom: 15px;
            color: #000;
        }

        .modal h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .modal p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #333;
        }

        .close-btn {
            padding: 10px 20px;
            background: #000;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
            transition: .3s;
        }

        .close-btn:hover {
            background: #333;
        }

        /* ---------- FOOTER ---------- */
        footer {
            background: rgba(255, 255, 255, 0.7);
            padding: 15px;
            border-top: 1px solid #ccc;
            text-align: center;
            font-size: 14px;
            color: #444;
        }
    </style>
</head>

<body>

    <!-- MODAL -->
    <div class="modal-bg" id="modal-bg">
        <div class="modal" id="modal">
            <i id="modal-icon"></i>
            <h2 id="modal-title"></h2>
            <p id="modal-desc"></p>
            <div class="close-btn" onclick="cerrarModal()">Cerrar</div>
        </div>
    </div>

    <header>
        <h2>FocusLearn</h2>
        <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>
    </header>

    <main>
        <h1>Mis Logros</h1>
        <p class="subtitle">Estos son tus reconocimientos por mantener disciplina, enfoque y constancia.</p>

        <div class="logros-grid">

            <!-- LISTA DE LOGROS -->
            <div class="logro-card" onclick="abrirModal('fa-medal','Primer Día Enfocado','Completaste tu primer día sin procrastinar.')">
                <i class="fa-solid fa-medal"></i>
                <h3>Primer Día Enfocado</h3>
                <p>Completaste tu primer día sin procrastinar.</p>
            </div>

            <div class="logro-card" onclick="abrirModal('fa-fire','Racha de 3 Días','Has mantenido una racha constante.')">
                <i class="fa-solid fa-fire"></i>
                <h3>Racha de 3 Días</h3>
                <p>Has mantenido una racha constante.</p>
            </div>

            <div class="logro-card" onclick="abrirModal('fa-book','10 Lecciones Completadas','Demostraste compromiso con tu aprendizaje.')">
                <i class="fa-solid fa-book"></i>
                <h3>10 Lecciones Completadas</h3>
                <p>Demostraste compromiso con tu aprendizaje.</p>
            </div>

            <div class="logro-card" onclick="abrirModal('fa-trophy','5 Retos Superados','Tu enfoque te permitió superar múltiples desafíos.')">
                <i class="fa-solid fa-trophy"></i>
                <h3>5 Retos Superados</h3>
                <p>Tu enfoque te permitió superar múltiples desafíos.</p>
            </div>

            <div class="logro-card" onclick="abrirModal('fa-star','Logro Especial','Reconocimiento por esfuerzo sobresaliente.')">
                <i class="fa-solid fa-star"></i>
                <h3>Logro Especial</h3>
                <p>Reconocimiento por esfuerzo sobresaliente.</p>
            </div>

            <!-- NUEVOS LOGROS -->
            <div class="logro-card" onclick="abrirModal('fa-brain','24h Sin Procrastinar','Completa un día entero productivo.')">
                <i class="fa-solid fa-brain"></i>
                <h3>24h Sin Procrastinar</h3>
                <p>Tu productividad alcanzó un nuevo nivel.</p>
            </div>

            <div class="logro-card" onclick="abrirModal('fa-stopwatch','5 Pomodoros','Realizaste 5 ciclos de concentración.')">
                <i class="fa-solid fa-stopwatch"></i>
                <h3>5 Pomodoros</h3>
                <p>Conseguiste mantener sesiones continuas de foco.</p>
            </div>

            <div class="logro-card" onclick="abrirModal('fa-check','Semana Perfecta','Completaste todas tus tareas durante 7 días.')">
                <i class="fa-solid fa-check"></i>
                <h3>Semana Perfecta</h3>
                <p>Tu constancia te ha llevado lejos.</p>
            </div>

            <div class="logro-card" onclick="abrirModal('fa-bolt','Reto Relámpago','Completaste tareas urgentes sin distraerte.')">
                <i class="fa-solid fa-bolt"></i>
                <h3>Reto Relámpago</h3>
                <p>Reaccionaste rápido y con enfoque total.</p>
            </div>

            <div class="logro-card" onclick="abrirModal('fa-mountain','Nivel Maestro','Alcanzaste el máximo nivel de disciplina.')">
                <i class="fa-solid fa-mountain"></i>
                <h3>Nivel Maestro</h3>
                <p>Has llegado a la cima del enfoque.</p>
            </div>

        </div>
    </main>

    <footer>
        © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
    </footer>

    <script>
        function abrirModal(icon, title, desc) {
            document.getElementById("modal-icon").className = "fa-solid " + icon;
            document.getElementById("modal-title").innerText = title;
            document.getElementById("modal-desc").innerText = desc;
            document.getElementById("modal-bg").style.display = "flex";
        }

        function cerrarModal() {
            document.getElementById("modal-bg").style.display = "none";
        }
    </script>

</body>

</html>
