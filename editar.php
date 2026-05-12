<?php
require_once 'conexion.php';
require_once 'Usuario.php';

$userObj = new Usuario($pdo);
$id = $_GET['id'];
$usuario = $userObj->obtenerPorId($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userObj->modificar($id, $_POST['nombre'], $_POST['email'], $_POST['empresa']);
    header("Location: tabla_usuarios.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente - ROMEL SST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow p-4 rounded bg-white">
            <h2 class="text-primary mb-4">Actualizar Datos</h2>
            <form method="POST">
                <div class="mb-3">
                    <label>Nombre/Empresa:</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo $usuario['nombre']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $usuario['email']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Proyecto:</label>
                    <input type="text" name="empresa" class="form-control" value="<?php echo $usuario['empresa']; ?>">
                </div>
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                <a href="tabla_usuarios.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>