<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{ asset('/estilos.css') }}">
    <meta charset="UTF-8">
    <title>Metas</title>
</head>
<body>
    <div class="container">

        <h1>Mis Metas</h1>

        <ul>
            <li>Graduarme como ingeniero</li>
            <li>Ser desarrollador full stack</li>
            <li>Trabajar en una empresa de tecnología</li>
        </ul>

        <br>
        <a href="{{ route('perfil') }}">⬅ Volver al perfil</a>
    </div>

</body>
</html>