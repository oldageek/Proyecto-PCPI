<?php require 'headerLogin.php'; ?>

    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="col iconohome d-flex justify-content-end">
                <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 d-flex justify-content-start">
                <pre>
                    "No basta tener un buen ingenio,
                    lo principal es aplicarlo bien"

                                        - Rene Descartés -
                </pre>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <div class="card text-center bg-light" style="width: 28rem;">
                    <i class="card-img-top fas fa-user-circle"  alt="Card image cap"></i>
                    <div class="card-body">
                        <h3 class="card-title">Inicio de Sesion</h3>
                        <form method="post" class="formularioLog" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <input type="mail" class="form-control form-contro-lg  mt-3 mb-2" name="correo" id="correo" placeholder="Correo electronico">
                            <input type="password" class="form-control form-contro-lg  mt-3 mb-2" name="contrasena" id="contrasena" placeholder="Contraseña">
                            <button type="submit" class="btn btn-success mt-4">Iniciar Sesion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>