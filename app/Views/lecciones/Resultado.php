<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lección completada</title>
<style>
  body { font-family: 'Poppins', sans-serif; text-align: center; background: #e8f5e9; padding: 60px; }
  h1 { color: #2e7d32; }
  a { background: #43a047; color: white; padding: 10px 15px; text-decoration: none; border-radius: 10px; }
</style>
</head>
<body>
  <h1>¡Lección completada! 🎉</h1>
  <p>Has ganado <?= esc($leccion['xp']) ?> XP.</p>
  <a href="<?= base_url('perfil') ?>">Ver mi perfil</a>
</body>
</html>
