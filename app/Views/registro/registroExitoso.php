<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Exitoso - FocusLearn</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #A7C7E7);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      padding: 20px;
    }

    .box {
      background: rgba(255,255,255,0.9);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      max-width: 450px;
      text-align: center;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: scale(0.95);}
      to {opacity: 1; transform: scale(1);}
    }

    h1 {
      font-size: 28px;
      margin-bottom: 15px;
      font-weight: 700;
      color: #000;
    }

    p {
      font-size: 16px;
      margin-bottom: 25px;
      color: #555;
    }

    a {
      display: inline-block;
      padding: 12px 25px;
      background: #000;
      color: #fff;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    a:hover {
      background: #333;
      transform: scale(1.05);
    }
  </style>
</head>

<body>
  <div class="box">
    <h1>✓ Registro Exitoso</h1>
    <p>Tu cuenta ha sido creada correctamente. Ahora puedes iniciar sesión.</p>
    <a href="<?= base_url('login') ?>">Ir a Iniciar Sesión</a>
  </div>
</body>
</html>