<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('/estilos.css') }}">
</head>
<body>

<div class="container">
    <h1>Mi Perfil</h1>

    <h3>Información General</h3>
    <ul>
        <li><strong>Nombre:</strong> Marcos</li>
        <li><strong>Edad:</strong> 20 años</li>
        <li><strong>Origen:</strong> Colombia</li>
        <li><strong>Estudios:</strong> Ingeniería de Sistemas</li>
    </ul>

    <hr>

    <h3>Navegación</h3>
    <nav>
        <ul>
            <li><a href="{{ route('intereses') }}">Intereses</a></li>
            <li><a href="{{ route('habilidades') }}">Habilidades</a></li>
            <li><a href="{{ route('metas') }}">Metas</a></li>
        </ul>
    </nav>
</div>

</body>
</html>