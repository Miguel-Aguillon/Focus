<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cuenta Registrada - FocusLearn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #A7C7E7);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      padding: 20px;
    }

    .box {
      background: rgba(255,255,255,0.85);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      max-width: 450px;
      width: 100%;
      animation: fadeIn 1s ease;
      backdrop-filter: blur(10px);
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: scale(0.95);}
      to {opacity: 1; transform: scale(1);}
    }

    h1 {
      font-size: 28px;
      margin-bottom: 15px;
      font-weight: 700;
    }

    p {
      font-size: 16px;
      margin-bottom: 25px;
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
    <h1>✔ Cuenta registrada exitosamente</h1>
    <p>Tu cuenta ha sido creada. Ahora puedes iniciar sesión y comenzar tu aprendizaje 🚀</p>

    <a href="<?= base_url('login') ?>">Iniciar sesión</a>
  </div>

</body>
</html>
