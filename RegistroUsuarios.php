<?php
include "conexionRegistro.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MKn5NWVBEuQXJE7TSKSgPUmMiSCmVTfCsR+VSSeQpHnoyJQZZFn/kBn+Ht5jZDPQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro de usuarios | FANCESA</title>
</head>

<body>
    <header>
        <nav class="navbar sm:navbar-expand bg-white sticky-top border-bottom" aria-label="Navegación principal">
            <div class="container">
                <a class="navbar-brand marca-fancesa" href="index.html" aria-label="FANCESA, inicio">
                    <img src="https://www.fancesa.com/wp-content/uploads/2015/04/Logo-Menu-principal.png" alt="" height="50px" width="200px">
                    <span><small>Construimos futuro</small></span>
                </a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menú de navegación">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" id="menuPrincipal" aria-labelledby="menuPrincipalLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="menuPrincipalLabel">Menú</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Cerrar"></button>
                    </div>
                    <div class="drawer-body">
                        <div class="nav navbar-nav ms-auto align-items-lg-center gap-lg-3">
                            <a class="nav-link" href="index.html">Inicio</a>
                            <a class="nav-link" href="index.html">Inventario</a>
                            <a class="nav-link" href="productos.html">Productos</a>
                            <a class="nav-link active" aria-current="page" href="RegistroUsuarios.php">Registro de usuarios</a>
                        </div>
                    </div>
                </dialog>
            </div>
        </nav>
    </header>

    <main class="registro-page py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-7">
                    <section class="card registro-card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <p class="texto-etiqueta mb-2">FANCESA · COMUNIDAD</p>
                            <h1 class="h2 fw-bold mb-2">Registro de usuario</h1>
                            <p class="texto-secundario mb-4">Completa tus datos para crear tu registro.</p>

                            <form action="RegistroUsuarios.php" method="POST">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre completo</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" autocomplete="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control" id="correo" name="correo" autocomplete="email" aria-describedby="ayudaCorreo" required>
                                    <div id="ayudaCorreo" class="form-text">Usaremos este correo para identificar tu cuenta.</div>
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="contrasena" name="contrasena" autocomplete="new-password" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefono" class="form-label">Teléfono <span class="texto-secundario">(opcional)</span></label>
                                        <input type="tel" class="form-control" id="telefono" name="telefono" autocomplete="tel">
                                    </div>
                                </div>

                                <fieldset class="mb-3">
                                    <legend class="form-label mb-2">Sexo</legend>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino" required>
                                            <label class="form-check-label" for="masculino">Masculino</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sexo" id="femenino" value="Femenino">
                                            <label class="form-check-label" for="femenino">Femenino</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sexo" id="otro" value="Otro">
                                            <label class="form-check-label" for="otro">Otro</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="mb-4">
                                    <label for="ciudad" class="form-label">Ciudad</label>
                                    <select class="form-select" id="ciudad" name="ciudad">
                                        <option value="Sucre">Sucre</option>
                                        <option value="La Paz">La Paz</option>
                                        <option value="Cochabamba">Cochabamba</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-fancesa px-4 py-2">Guardar registro</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer-fancesa py-5">
        <div class="container">
            <div class="row gy-4 align-items-start">
                <div class="col-lg-5">
                    <a class="navbar-brand marca-fancesa marca-footer" href="#inicio">
                        <img src="https://www.fancesa.com/wp-content/uploads/2015/04/Logo-Menu-principal.png" alt="" height="50px" width="200px">
                        <span><small>Construimos futuro</small></span>
                    </a>
                    <p class="footer-descripcion mt-3 mb-0">Comprometidos con el desarrollo y la construcción de Bolivia.</p>
                </div>
                <div class="col-6 col-lg-3">
                    <h2 class="h6 text-white fw-bold">Explora</h2>
                    <ul class="nav flex-column footer-enlaces">
                        <li class="nav-item"><a class="nav-link px-0" href="#empresa">La empresa</a></li>
                        <li class="nav-item"><a class="nav-link px-0" href="#productos">Productos</a></li>
                        <li class="nav-item"><a class="nav-link px-0" href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-4">
                    <h2 class="h6 text-white fw-bold">FANCESA</h2>
                    <p class="footer-descripcion">Sucre, Bolivia</p>
                    <p class="footer-descripcion mb-0">Conoce nuestras soluciones para la construcción.</p>
                </div>
            </div>
            <div class="border-top border-secondary mt-4 pt-3 d-flex flex-column flex-md-row justify-content-between gap-2">
                <small class="footer-descripcion">© 2026 FANCESA. Todos los derechos reservados.</small>
                <small class="footer-descripcion">Calidad que construye futuro.</small>
            </div>
        </div>
    </footer>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-+PW0IDVGGwmpaBQvcXY+W0BcpHpITFB3dSfSoGvDdHtLbrLpSbpGcvtQRM/BJpz+" crossorigin="anonymous"></script>
</body>
</html>
<?php $conexion->close(); ?>