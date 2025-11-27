<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lecciones - FocusLearn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

  <header>
    <h2>FocusLearn</h2>
    <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>
  </header>

  <main>
    <h1>Lecciones Disponibles</h1>
    <p class="subtitle">
      Explora las lecciones diseñadas para mejorar tu enfoque, comprensión y capacidad de aprendizaje a tu ritmo.
    </p>

    <div class="lecciones-grid">
      <div class="leccion-card">
        <i class="fa-solid fa-book-open"></i>
        <h3>Lección 1: Fundamentos del Enfoque</h3>
        <p>Aprende las bases del enfoque consciente y cómo aplicarlo en tus sesiones de estudio.</p>
        <a href="<?= base_url('lecciones/fundamentos') ?>" class="btn-iniciar">Ver Lección</a>
      </div>

      <div class="leccion-card">
        <i class="fa-solid fa-lightbulb"></i>
        <h3>Lección 2: Técnicas de Concentración</h3>
        <p>Descubre métodos efectivos para mantener tu mente enfocada durante largos períodos.</p>
        <a href="<?= base_url('lecciones/concentracion') ?>" class="btn-iniciar">Ver Lección</a>
      </div>

      <div class="leccion-card">
        <i class="fa-solid fa-brain"></i>
        <h3>Lección 3: Retención y Memoria</h3>
        <p>Fortalece tu capacidad de retener información mediante ejercicios prácticos y hábitos mentales.</p>
        <a href="<?= base_url('lecciones/memoria') ?>" class="btn-iniciar">Ver Lección</a>
      </div>

      <div class="leccion-card">
        <i class="fa-solid fa-clock"></i>
        <h3>Lección 4: Gestión del Tiempo</h3>
        <p>Organiza tus estudios con técnicas de productividad y evita la procrastinación.</p>
        <a href="<?= base_url('lecciones/tiempo') ?>" class="btn-iniciar">Ver Lección</a>
      </div>
    </div>
  </main>

  <footer>
    © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
  </footer>

</body>
</html>
