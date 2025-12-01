<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba de conexión a la base de datos</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8f9fa; padding: 2rem; }
        .card { background: white; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        ul { list-style: none; padding-left: 0; }
        li { background: #e9ecef; margin: 5px 0; padding: 8px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="card">
        <h1><?= esc($status) ?></h1>
        <?php if (!empty($tablas)): ?>
            <h2>📋 Tablas encontradas:</h2>
            <ul>
                <?php foreach ($tablas as $tabla): ?>
                    <li><?= esc(implode(', ', $tabla)) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No se encontraron tablas en la base de datos.</p>
        <?php endif; ?>
    </div>
</body>
</html>
