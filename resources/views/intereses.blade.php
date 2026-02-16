<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{ asset('/estilos.css') }}">
    <meta charset="UTF-8">
    <title>Intereses</title>
</head>
<body>
    <div class="container">

        <h1>Mis Intereses</h1>

        <ul>
            <li>Programación</li>
            <li>Desarrollo web</li>
            <li>Videojuegos</li>
            <li>Tecnología</li>
            <li>Ciberseguridad</li>
        </ul>

        <br>
        <a href="{{ route('perfil') }}">⬅ Volver al perfil</a>
    </div>
</body>
</html>