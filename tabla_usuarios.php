<?php
require_once 'conexion.php';
require_once 'Usuario.php';

$userObj = new Usuario($pdo);
$usuarios = $userObj->listar();

// Lógica para eliminar si se presiona el botón rojo
if (isset($_GET['eliminar'])) {
    $userObj->eliminar($_GET['eliminar']);
    header("Location: tabla_usuarios.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administración de Clientes - ROMEL SST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-navy { background-color: #002244; color: white; }
        .azul-titulo { color: #003366; font-weight: bold; }
    </style>
</head>
<body class="p-5">
    <div class="container shadow p-4 rounded bg-white">
        <h2 class="azul-titulo mb-4">Clientes Registrados - ROMEL SST</h2>
        <table class="table table-hover table-bordered">
            <thead class="bg-navy">
                <tr>
                    <th>ID</th>
                    <th>Empresa/Nombre</th>
                    <th>Email</th>
                    <th>Proyecto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $u): ?>
                <tr>
                    <td><?php echo $u['id']; ?></td>
                    <td><?php echo $u['nombre']; ?></td>
                    <td><?php echo $u['email']; ?></td>
                    <td><?php echo $u['empresa']; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $u['id']; ?>" class="btn btn-warning btn-sm">Modificar</a>
                        <a href="tabla_usuarios.php?eliminar=<?php echo $u['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que desea eliminar este registro?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="mt-4">
            <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
        </div>
    </div>
</body>
</html>