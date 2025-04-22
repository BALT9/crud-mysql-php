<?php
    include './includes/cabecera.include.php';
    require './config/db.php';

    $modoEdicion = isset($_GET['ci']);
    $ci = $nombre = $edad = $antiguedad = "";

    if($modoEdicion){
        $get_ci = $_GET['ci'];
        $sql = "SELECT * FROM fraterno WHERE ci = $get_ci";

        $resultado = $conn -> query($sql);

        if($resultado -> num_rows > 0){
            $usuario = $resultado -> fetch_assoc();
            $ci = $usuario['ci'];
            $nombre = $usuario['nombre'];
            $edad = $usuario['edad'];
            $antiguedad = $usuario['antiguedad'];
        }
    }
?>
<body>
    <h1 ><?= $modoEdicion ? 'Editar Usuario': 'Agregar Usuario' ?></h1>
    <div>
        <form action="<?= $modoEdicion ? './editar.php': './agregar.php' ?>" method="GET">
            <label for="">Ci</label>
            <input type="number" name="ci" id="ci" value="<?=$ci?>" <?= $modoEdicion ? 'readonly': '' ?>>
            <br>
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?= $modoEdicion ? $nombre: '' ?>">
            <br>
            <label for="">Edad</label>
            <input type="number" name="edad" id="edad" value="<?= $modoEdicion ? $edad: '' ?>">
            <br>
            <label for="">Antiguedad</label>
            <input type="number" name="antiguedad" id="antiguedad" value="<?= $modoEdicion ? $antiguedad: '' ?>">
            <br>
            <input type="submit" name="enviar" value="<?= $modoEdicion ? 'Actualizar': 'Enviar' ?>" >
        </form>
    </div>
</body>
</html>