<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
</head>
<body>

    <h1>Perfil Personal</h1>

    <h3>Información General</h3>
    <ul>
        <li><strong>Nombre:</strong> Marcos</li>
        <li><strong>Edad:</strong> 20 años</li>
        <li><strong>De dónde soy:</strong> Colombia</li>
        <li><strong>Qué estudio:</strong> Ingeniería de Sistemas</li>
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

</body>
</html>