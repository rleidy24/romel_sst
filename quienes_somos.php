<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - ROMEL SST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .azul-titulo { color: #003366; font-weight: bold; }
        .footer-sst { background-color: #002244; }
        .bg-valores { background-color: #f8f9fa; border-left: 5px solid #ffcc00; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- BARRA DE NAVEGACIÓN -->
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
                    <li class="nav-item"><a class="nav-link fw-bold" href="pagina2.php">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="quienes_somos.php">Quiénes Somos</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold text-warning" href="tabla_usuarios.php">Administrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container my-5">
        <div class="row g-4 align-items-center">
            
            <!-- TEXTO PRINCIPAL: ENFOQUE HUMANO -->
            <div class="col-lg-7">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h2 class="azul-titulo mb-3">¿Quiénes Somos?</h2>
                    <p class="lead text-muted">
                        En <strong>ROMEL SST</strong> somos una firma especializada en la consultoría, asesoría e implementación de Sistemas de Gestión de la Seguridad y Salud en el Trabajo (SG-SST).
                    </p>
                    <p>
                        Para nosotros, lo más importante en una organización es el <strong>valor humano</strong>. Entendemos que el motor de cada proyecto son sus personas, por lo que nuestra meta fundamental es lograr que el trabajador se sientan plenamente a gusto realizando sus labores, en un entorno seguro y protegido. 
                    </p>
                    <p class="fw-bold text-success">
                        Trabajamos con pasión para garantizar que cada colaborador regrese sano y salvo a su casa al terminar su jornada laboral.
                    </p>
                </div>
            </div>

            <!-- IMAGEN CORREGIDA -->
            <div class="col-lg-5 text-center">
                <img src="imagenes/Gemini_Generated_Image_gbbnudgbbnudgbbn.png" alt="Valor Humano SST" class="img-fluid rounded shadow-sm">
            </div>

            <!-- SECTORES DE ENFOQUE -->
            <div class="col-12 mt-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <h3 class="azul-titulo mb-4 text-center">Nuestro Enfoque Especializado</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="p-3 bg-valores rounded h-100">
                                <h5 class="fw-bold">Sector Construcción</h5>
                                <p class="mb-0">Prestamos servicios especializados como coordinadores de trabajo seguro en alturas, asegurando el cumplimiento estricto de las medidas preventivas en obras residenciales y comerciales.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-valores rounded h-100">
                                <h5 class="fw-bold">Propiedades Horizontales</h5>
                                <p class="mb-0">Brindamos asesoría y diseño a medida del SG-SST en edificios y conjuntos residenciales, garantizando la protección de los trabajadores directos, contratistas y la copropiedad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer-sst text-white pt-4 pb-3 mt-auto">
        <div class="container text-center">
            <small>&copy; 2026 ROMEL SST - Barranquilla, Colombia.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>