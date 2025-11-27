<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - FocusLearn</title>

    <style>
        body {
            margin: 0;
            background: #ffffff;
            font-family: Arial, sans-serif;
            color: #000;
        }

        .login-box {
            width: 90%;
            max-width: 450px;
            margin: 60px auto;
            background: #A7C7E7;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #000;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button:hover {
            opacity: 0.8;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            color: #000;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h1>Iniciar Sesión</h1>

        <input type="email" placeholder="Correo electrónico">
        <input type="password" placeholder="Contraseña">

        <button>Entrar</button>

        <div class="link">
            <p>¿No tienes cuenta? <a href="/registro">Regístrate aquí</a></p>
        </div>
    </div>

</body>
</html>
