<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Configuración - FocusLearn</title>

    <style>
        body {
            margin: 0;
            background: #ffffff;
            font-family: Arial, sans-serif;
            color: #000;
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 50px auto;
            background: #A7C7E7;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        .section {
            background: #ffffff;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .section h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        select, input[type="checkbox"] {
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #000;
            color: white;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
        }

        button:hover {
            opacity: 0.85;
        }

    </style>
</head>

<body>

    <div class="container">

        <h1>Configuración</h1>

        <!-- Preferencias de idioma -->
        <div class="section">
            <h3>Idioma</h3>
            <label for="idioma">Seleccionar idioma:</label>
            <select id="idioma" style="width: 100%; padding: 10px; border-radius: 10px;">
                <option>Español</option>
                <option>Inglés</option>
                <option>Portugués</option>
            </select>
        </div>

        <!-- Notificaciones -->
        <div class="section">
            <h3>Notificaciones</h3>

            <label>
                <input type="checkbox" checked>
                Recibir recordatorios de estudio
            </label>

            <label>
                <input type="checkbox">
                Notificaciones de nuevos retos
            </label>

            <label>
                <input type="checkbox">
                Avisos de logros desbloqueados
            </label>
        </div>

        <!-- Apariencia -->
        <div class="section">
            <h3>Apariencia</h3>

            <label>
                <input type="checkbox">
                Activar modo oscuro
            </label>

            <label>
                <input type="checkbox" checked>
                Animaciones activadas
            </label>
        </div>

        <button>Guardar Cambios</button>

    </div>

</body>
</html>
