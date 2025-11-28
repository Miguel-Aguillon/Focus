
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil - FocusLearn</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #e3efff;
        }

        .header {
            width: 100%;
            background: #4a90e2;
            padding: 15px;
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #bcd7ff;
            margin: 0 auto 20px auto;
            display: block;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }

        .info-box {
            background: #f3f8ff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 15px;
            border-left: 5px solid #4a90e2;
        }

        .info-item {
            font-size: 18px;
            margin: 8px 0;
        }

        .stats {
            background: #ecf2ff;
            padding: 20px;
            border-radius: 15px;
            margin-top: 25px;
        }

        .stats-title {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #2e4f84;
        }

        .options {
            margin-top: 30px;
            display: flex;
            justify-content: space-around;
        }

        .button {
            padding: 12px 25px;
            background: #4a90e2;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .button:hover {
            background: #346bb5;
        }
    </style>
</head>

<body>

    <div class="header">
        Mi Perfil
    </div>

    <div class="container">

        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="profile-pic">

        <h1>Usuario Focus</h1>

        <div class="info-box">
            <p class="info-item"><b>Nombre:</b> Usuario Focus</p>
            <p class="info-item"><b>Nivel:</b> Principiante</p>
            <p class="info-item"><b>Días sin procrastinar:</b> 3</p>
        </div>

        <div class="stats">
            <p class="stats-title">Estadísticas</p>
            <p>Retos completados: <b>5</b></p>
            <p>Lecciones completadas: <b>12</b></p>
            <p>Logros obtenidos: <b>4</b></p>
        </div>

        <div class="options">
            <a href="#" class="button">Configuración</a>
            <a href="#" class="button">Mis Logros</a>
            <a href="#" class="button">Niveles</a>
        </div>

    </div>

</body>
</html>
