<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title><?= esc($leccion['titulo']) ?></title>
<style>
  body { font-family: 'Poppins'; background: #f0f8ff; margin: 0; }
  .container { max-width: 800px; margin: 40px auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
  h1 { color: #0288d1; }
  p { line-height: 1.6; color: #555; }
  a { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #0288d1; color: white; border-radius: 10px; text-decoration: none; }
</style>
</head>
<body>
  <div class="container">
    <h1><?= esc($leccion['titulo']) ?></h1>
    <p><?= nl2br(esc($leccion['contenido'])) ?></p>
    <a href="<?= base_url('lecciones/completar/'.$leccion['id']) ?>">✅ Terminar Lección</a>
  </div>
</body>
</html>
