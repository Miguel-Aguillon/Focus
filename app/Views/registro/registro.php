<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - FocusLearn</title>

    <style>
        body {
            margin: 0;
            background: #ffffff;
            font-family: Arial, sans-serif;
            color: #000;
        }

        .form-box {
            width: 90%;
            max-width: 500px;
            margin: 50px auto;
            background: #A7C7E7;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
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
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <div class="form-box">
        <h1>Registro</h1>

        <input type="text" placeholder="Nombre">
        <input type="email" placeholder="Correo">
        <input type="password" placeholder="Contraseña">

        <button>Registrarme</button>
    </div>

</body>
</html>
