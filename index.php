<?php 
// 1. Conexión y lógica de guardado (Debe ir al puro principio)
require_once 'conexion.php';
require_once 'Usuario.php';

$mensaje_exito = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userObj = new Usuario($pdo);
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    
    if ($userObj->insertar($nombre, $email, $empresa)) {
        $mensaje_exito = "<div class='alert alert-success'>¡Datos registrados con éxito!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROMEL SST - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/iniciostyle.css">
    <style>
        .carousel-item img { height: 500px; object-fit: cover; }
        .azul-titulo { color: #003366; font-weight: bold; }
        .btn-amarillo { background-color: #ffcc00; color: #000; }
        .footer-sst { background-color: #002244; }
        .border-navy { border: 2px solid #002244 !important; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <img src="imagenes/logo.png" alt="ROMEL" width="100" class="bg-white p-1 rounded">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active fw-bold" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="pagina2.php">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold text-warning" href="tabla_usuarios.php">Administrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=1200&h=500&fit=crop" class="d-block w-100" alt="Seguridad">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Propiedad Horizontal Segura</h5>
                    <p>Implementación de normas y señalización preventiva.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="p-4 border rounded shadow-sm bg-white h-100">
                    <h2 class="azul-titulo">Sobre Romel SST</h2>
                    <p>Liderados por <strong>Leidys Romero</strong>, somos expertos en Seguridad y Salud en el Trabajo.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="p-4 border rounded shadow-sm bg-light h-100 border-navy">
                    <h2 class="azul-titulo">Contacto Profesional</h2>
                    <?php echo $mensaje_exito; ?>
                    <form action="index.php" method="POST">
                        <div class="mb-2">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre de la Empresa" required>
                        </div>
                        <div class="mb-2">
                            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="empresa" class="form-control" placeholder="Copropiedad / Proyecto" required>
                        </div>
                        <button type="submit" class="btn btn-amarillo w-100 fw-bold">SOLICITAR COTIZACIÓN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-sst text-white pt-5 pb-3">
        <div class="container text-center">
            <small>&copy; 2026 ROMEL SST - Barranquilla, Colombia.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>