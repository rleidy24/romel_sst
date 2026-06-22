<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2 - Portafolio de Servicios ROMEL SST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/iniciostyle.css">
    <style>
        .azul-titulo { color: #003366; font-weight: bold; margin-bottom: 20px; }
        .bg-navy { background-color: #002244; color: white; }
        .footer-sst { background-color: #002244; }
        .btn-amarillo { background-color: #ffcc00; color: #000; font-weight: bold; }
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
                    <li class="nav-item"><a class="nav-link fw-bold" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="pagina2.php">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold text-warning" href="tabla_usuarios.php">Administrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row g-4">
            
            <div class="col-12 mb-4">
                <h2 class="azul-titulo">Portafolio Técnico de Servicios</h2>
                <p>Detalle de servicios especializados para el cumplimiento normativo en Colombia:</p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered shadow text-center">
                        <thead class="bg-navy text-white">
                            <tr>
                                <th>Servicio Especializado</th>
                                <th>Normatividad Aplicable</th>
                                <th>Alcance del Servicio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Implementación SG-SST</td>
                                <td>Decreto 1072 de 2015</td>
                                <td>Diseño y ejecución del sistema</td>
                            </tr>
                            <tr>
                                <td>Investigación de Accidentes</td>
                                <td>Resolución 1401 de 2007</td>
                                <td>Análisis de causas y planes de acción</td>
                            </tr>
                            <tr>
                                <td>Trabajo en Alturas</td>
                                <td>Resolución 4272 de 2021</td>
                                <td>Supervisión y elaboración de permisos</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 border rounded shadow-sm bg-white h-100">
                    <h2 class="azul-titulo">Formación en Prevención</h2>
                    <div class="ratio ratio-16x9 shadow rounded border overflow-hidden mb-3">
                        <video controls>
                            <source src="imagenes/primeros auxilio.mp4" type="video/mp4">
                            Tu navegador no soporta video.
                        </video>
                    </div>
                    <p>Nuestras ventajas competitivas:</p>
                    <ul class="list-group shadow-sm">
                        <li class="list-group-item">✅ Blindaje Jurídico ante entes de control</li>
                        <li class="list-group-item">✅ Reducción de multas y sanciones</li>
                        <li class="list-group-item">✅ Soporte HSEQ integral 24/7</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 border rounded shadow-sm bg-light h-100 border-primary">
                    <h2 class="azul-titulo">Asesoría Especializada</h2>
                    <p>En <strong>ROMEL SST</strong>, nos enfocamos en que su empresa no solo cumpla la ley, sino que cree entornos de trabajo seguros y productivos.</p>
                    <p>Nuestra consultoría en Barranquilla y Medellín garantiza:</p>
                    <ul>
                        <li>Cero accidentes graves.</li>
                        <li>Cultura de autocuidado.</li>
                        <li>Documentación al día para auditorías de la ARL o Ministerio de Trabajo.</li>
                    </ul>
                    <a href="index.php" class="btn btn-amarillo w-100 mt-3">VOLVER AL REGISTRO</a>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer-sst text-white pt-5 pb-3">
        <div class="container text-center">
            <small>&copy; 2026 ROMEL SST - Barranquilla, Colombia. Todos los derechos reservados.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>