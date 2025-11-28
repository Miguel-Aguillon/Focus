<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro - FocusLearn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #A7C7E7);
      color: #000;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h2 {
      font-weight: 700;
      font-size: 22px;
    }

    header a {
      color: #000;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
    }

    header a:hover {
      color: #007bff;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
    }

    .form-box {
      width: 100%;
      max-width: 450px;
      background: rgba(255,255,255,0.85);
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      padding: 40px 30px;
      text-align: center;
      animation: fadeIn 1s ease;
      backdrop-filter: blur(10px);
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .form-box h1 {
      margin-bottom: 25px;
      font-size: 28px;
      font-weight: 700;
      color: #000;
    }

    .input-group {
      position: relative;
      margin-bottom: 18px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid transparent;
      border-radius: 10px;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
      background: #E8F0FE;
    }

    .input-group input:focus {
      border-color: #000;
      background: #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.2);
    }

    button {
      width: 100%;
      padding: 12px;
      background: #000;
      color: white;
      border-radius: 10px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      border: none;
      transition: 0.3s;
      margin-top: 10px;
    }

    button:hover {
      background: #333;
      transform: scale(1.03);
    }

    .link {
      margin-top: 15px;
      font-size: 14px;
    }

    .link a {
      color: #000;
      font-weight: 600;
      text-decoration: underline;
    }

    .link a:hover {
      color: #007bff;
    }

    footer {
      text-align: center;
      padding: 15px 0;
      font-size: 14px;
      color: #333;
      background: rgba(255,255,255,0.7);
      border-top: 1px solid #ccc;
    }

    /* Campo seleccionado visualmente */
    .input-group.selected input {
      border-color: #007bff;
      background: #fff;
      box-shadow: 0 0 8px rgba(0,123,255,0.3);
    }
  </style>
</head>

<body>

  <header>
    <h2>FocusLearn</h2>
    <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>
  </header>

  <main>
    <div class="form-box">
      <h1>Registro</h1>

      <form action="<?= base_url('registro/guardar') ?>" method="POST">
        <div class="input-group">
          <input type="text" name="nombre" placeholder="Nombre completo" required>
        </div>

        <div class="input-group">
          <input type="email" name="correo" placeholder="Correo electrónico" required>
        </div>

        <div class="input-group">
          <input type="password" name="password" placeholder="Contraseña" required>
        </div>

        <div class="input-group">
          <input type="password" name="confirmar" placeholder="Confirmar contraseña" required>
        </div>

        <button type="submit">Registrarme</button>
      </form>

      <div class="link">
        <p>¿Ya tienes cuenta? <a href="<?= base_url('login') ?>">Inicia sesión aquí</a></p>
      </div>
    </div>
  </main>

  <footer>
    © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
  </footer>

  <script>
    // Efecto visual al seleccionar un campo
    const inputs = document.querySelectorAll('.input-group input');

    inputs.forEach(input => {
      input.addEventListener('focus', () => {
        inputs.forEach(i => i.parentElement.classList.remove('selected'));
        input.parentElement.classList.add('selected');
      });

      input.addEventListener('blur', () => {
        input.parentElement.classList.remove('selected');
      });
    });
  </script>

</body>
</html>
