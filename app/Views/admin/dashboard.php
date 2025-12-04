<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Administrador - FocusLearn</title>

    <!-- Íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffffff, #A7C7E7);
            color: #000;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        header h2 {
            font-size: 22px;
            font-weight: 700;
        }

        header a {
            text-decoration: none;
            color: #000;
            font-weight: 600;
            transition: 0.3s;
            margin-left: 15px;
        }

        header a:hover {
            color: #007bff;
        }

        main {
            flex: 1;
            padding: 60px 20px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        p.subtitle {
            font-size: 16px;
            max-width: 700px;
            margin: 0 auto 40px auto;
            color: #333;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            border-radius: 15px;
            overflow: hidden;
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: rgba(255,255,255,0.9);
            font-weight: 700;
            color: #000;
        }

        tr:hover {
            background: rgba(255,255,255,0.6);
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-editar {
            background: #007bff;
            color: #fff;
        }

        .btn-editar:hover {
            background: #0056b3;
        }

        .btn-eliminar {
            background: #dc3545;
            color: #fff;
        }

        .btn-eliminar:hover {
            background: #a71d2a;
        }

        footer {
            background: rgba(255, 255, 255, 0.7);
            padding: 15px;
            border-top: 1px solid #ccc;
            text-align: center;
            font-size: 14px;
            color: #444;
        }
    </style>
</head>

<body>

    <header>
        <h2>FocusLearn - Panel Admin</h2>
        <div>
            <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>
            <a href="<?= base_url('logout') ?>"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a>
        </div>
    </header>

    <main>
        <h1>Gestión de Usuarios</h1>
        <p class="subtitle">Administra los usuarios registrados, cambia roles y revisa su información general.</p>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>

            <?php if (!empty($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= esc($usuario['id']) ?></td>
                        <td><?= esc($usuario['nombre']) ?></td>
                        <td><?= esc($usuario['correo']) ?></td>
                        <td>
                            <span style="font-weight:600; color:<?= $usuario['rol'] === 'admin' ? '#007bff' : '#000'; ?>">
                                <?= esc(ucfirst($usuario['rol'])) ?>
                            </span>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/editarRol/' . $usuario['id']) ?>" class="btn btn-editar">
                                <i class="fa-solid fa-user-gear"></i> Editar Rol
                            </a>
                            <a href="<?= base_url('admin/eliminarUsuario/' . $usuario['id']) ?>" class="btn btn-eliminar" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">
                                <i class="fa-solid fa-trash"></i> Eliminar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No hay usuarios registrados.</td>
                </tr>
            <?php endif; ?>
        </table>
    </main>

    <footer>
        © <?= date('Y') ?> FocusLearn. Panel de administración.
    </footer>

</body>
</html>
