<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #4a00e0, #8e2de2);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .card {
            background: rgba(255, 255, 255, 0.12);
            padding: 40px;
            border-radius: 14px;
            backdrop-filter: blur(12px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.25);
        }
        h1 {
            margin: 0;
            font-size: 42px;
            font-weight: 700;
        }
        p {
            margin-top: 12px;
            font-size: 18px;
            opacity: 0.9;
        }
        .footer {
            margin-top: 25px;
            font-size: 14px;
            opacity: 0.7;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>¡Hola, bienvenido!</h1>
        <p>Tu aplicación PHP está funcionando correctamente en Azure 🚀</p>
        <div class="footer">
            Desplegado automáticamente desde GitHub Actions
        </div>
    </div>

</body>
</html>