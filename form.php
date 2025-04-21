<?php
    include './includes/cabecera.include.php';
?>
<body>
    <h1>agregar usuario</h1>
    <div>
        <form action="./agregar.php" method="GET">
            <label for="">Ci</label>
            <input type="number" name="ci" id="ci">
            <br>
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="">Edad</label>
            <input type="number" name="edad" id="edad">
            <br>
            <label for="">Antiguedad</label>
            <input type="number" name="antiguedad" id="antiguedad">
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</body>
</html>