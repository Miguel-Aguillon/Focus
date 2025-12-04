<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Rol - FocusLearn</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffffff, #A7C7E7);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: rgba(255,255,255,0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; margin-bottom: 20px; }
        select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover { background: #0056b3; }
        a { display: inline-block; text-align: center; margin-top: 10px; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>

    <form action="<?= base_url('admin/actualizarRol/'.$usuario['id']) ?>" method="post">
        <h2>Editar Rol de <?= esc($usuario['nombre']) ?></h2>
        <select name="rol">
            <option value="usuario" <?= $usuario['rol'] === 'usuario' ? 'selected' : '' ?>>Usuario</option>
            <option value="admin" <?= $usuario['rol'] === 'admin' ? 'selected' : '' ?>>Administrador</option>
        </select>
        <button type="submit">Actualizar</button>
        <a href="<?= base_url('admin') ?>">Cancelar</a>
    </form>

</body>
</html>
