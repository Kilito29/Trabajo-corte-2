<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentación - Santiago</title>
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
            padding: 45px;
            border-radius: 16px;
            backdrop-filter: blur(14px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.25);
            max-width: 520px;
            animation: fadeIn 0.9s ease-in-out;
        }

        h1 {
            margin: 0;
            font-size: 40px;
            font-weight: 800;
        }

        h2 {
            margin-top: 10px;
            font-size: 20px;
            font-weight: 300;
            opacity: 0.9;
        }

        p {
            margin-top: 18px;
            font-size: 18px;
            opacity: 0.9;
            line-height: 1.5;
        }

        .btn {
            margin-top: 25px;
            display: inline-block;
            padding: 12px 25px;
            background: white;
            color: #4a00e0;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #e0e0e0;
        }

        @keyframes fadeIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Hola, soy Santiago 👋</h1>
        <h2>Estudiante de programación y apasionado por el deporte</h2>

        <p>
            Estoy aprendiendo desarrollo de software, trabajando con HTML, PHP y Azure.  
            Me gusta crear proyectos, aprender cosas nuevas y mejorar cada día.  
            También practico tenis y me interesa enseñar y ayudar a otros a crecer.
        </p>

        <a class="btn" href="#" onclick="alert('Pronto habrán más secciones 😎')">Ver más</a>
    </div>

</body>
</html>