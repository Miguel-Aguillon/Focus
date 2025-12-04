<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Quiz - <?= esc($leccion['titulo']) ?></title>
<style>
  body { font-family: 'Poppins', sans-serif; background: #f0f8ff; padding: 40px; }
  form { background: white; padding: 30px; border-radius: 15px; max-width: 800px; margin: auto; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
  h2 { color: #0288d1; }
  label { display: block; margin: 10px 0; }
  input[type="radio"] { margin-right: 8px; }
  button { background: #0288d1; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer; margin-top: 20px; }
  button:hover { background: #01579b; }
</style>
</head>
<body>
  <form action="<?= base_url('lecciones/evaluar') ?>" method="POST">
    <h1><?= esc($leccion['titulo']) ?></h1>
    <input type="hidden" name="leccion_id" value="<?= $leccion['id'] ?>">

    <?php foreach($preguntas as $p): ?>
      <div class="pregunta">
        <h2><?= esc($p['pregunta']) ?></h2>
        <label><input type="radio" name="pregunta_<?= $p['id'] ?>" value="A"> <?= esc($p['opcion_a']) ?></label>
        <label><input type="radio" name="pregunta_<?= $p['id'] ?>" value="B"> <?= esc($p['opcion_b']) ?></label>
        <label><input type="radio" name="pregunta_<?= $p['id'] ?>" value="C"> <?= esc($p['opcion_c']) ?></label>
        <label><input type="radio" name="pregunta_<?= $p['id'] ?>" value="D"> <?= esc($p['opcion_d']) ?></label>
      </div>
      <hr>
    <?php endforeach; ?>

    <button type="submit">Enviar respuestas</button>
  </form>
</body>
</html>
