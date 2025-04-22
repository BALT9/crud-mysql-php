<?php
include './includes/cabecera.include.php';

require './config/db.php';

$sql = "SELECT * FROM fraterno";

$datos = $conn->query($sql);
?>

<body>

    <a href="./form.php">Agregar usuario</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ci</th>
                <th scope="col">nombre</th>
                <th scope="col">edad</th>
                <th scope="col">antiguedad</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = $datos->fetch_assoc()): ?>
                <tr>
                    <th scope="row"><?= $fila['ci']; ?></th>
                    <td><?= $fila['nombre']; ?></td>
                    <td><?= $fila['edad']; ?></td>
                    <td><?= $fila['antiguedad']; ?></td>
                    <td>
                        <a href="./form.php?ci=<?= $fila['ci'];?>">Editar</a>
                        <a href="./eliminar.php?ci=<?= $fila['ci'];?>">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
</body>

</html>