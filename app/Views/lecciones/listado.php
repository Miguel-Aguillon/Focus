<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lecciones - FocusLearn</title>
<style>
  body { font-family: 'Poppins', sans-serif; background: #e3f2fd; margin: 0; }
  .container { max-width: 900px; margin: 40px auto; background: white; border-radius: 15px; padding: 30px; }
  h1 { text-align: center; color: #0288d1; }
  .leccion { background: #bbdefb; margin: 15px 0; padding: 15px; border-radius: 10px; transition: 0.3s; }
  .leccion:hover { background: #90caf9; transform: scale(1.02); }
  a { text-decoration: none; color: #0d47a1; font-weight: bold; }
</style>
</head>
<body>
  <div class="container">
    <h1>Lecciones de la Categoría</h1>
    <?php foreach($lecciones as $lec): ?>
      <div class="leccion">
        <h2><?= esc($lec['titulo']) ?></h2>
        <p><?= esc($lec['descripcion']) ?></p>
        <a href="<?= base_url('lecciones/detalle/'.$lec['id']) ?>">Comenzar</a>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
