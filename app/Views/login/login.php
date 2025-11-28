<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión - FocusLearn</title>
  <style>
    /* -------- RESET -------- */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #A7C7E7, #ffffff);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
    }

    /* -------- CONTENEDOR LOGIN -------- */
    .login-container {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      width: 90%;
      max-width: 400px;
      padding: 40px 30px;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .login-container h1 {
      font-size: 30px;
      font-weight: 700;
      color: #000;
      margin-bottom: 25px;
    }

    /* -------- INPUTS -------- */
    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 45px 12px 15px;
      border: none;
      border-radius: 10px;
      background: #E8F0FE;
      color: #000;
      font-size: 15px;
      outline: none;
      transition: 0.3s ease;
    }

    .input-group input:focus {
      background: #fff;
      box-shadow: 0 0 0 3px #A7C7E7;
    }

    .input-group i {
      position: absolute;
      right: 15px;
      top: 12px;
      color: #555;
      font-size: 18px;
    }

    /* -------- BOTÓN -------- */
    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background: #000;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      background: #333;
      transform: scale(1.03);
    }

    /* -------- ENLACES -------- */
    .extra-link {
      margin-top: 20px;
      font-size: 14px;
    }

    .extra-link a {
      color: #000;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .extra-link a:hover {
      color: #007bff;
    }

    /* -------- RESPONSIVE -------- */
    @media (max-width: 480px) {
      .login-container {
        padding: 30px 20px;
      }
      .login-container h1 {
        font-size: 26px;
      }
    }
  </style>

  <!-- Íconos (Font Awesome CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

  <div class="login-container">
    <h1>Iniciar Sesión</h1>

    <form action="<?= base_url('auth/loginPost') ?>" method="post">
      <div class="input-group">
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <i class="fa-solid fa-envelope"></i>
      </div>

      <div class="input-group">
        <input type="password" name="password" placeholder="Contraseña" required>
        <i class="fa-solid fa-lock"></i>
      </div>

      <button type="submit">Entrar</button>
    </form>

    <div class="extra-link">
      <p>¿No tienes cuenta? <a href="<?= base_url('registro') ?>">Regístrate aquí</a></p>
    </div>
  </div>

</body>
</html>
