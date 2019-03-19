<?php require 'header.php'; ?>

    <div class="container">
        <div class="row">
            <a href="index.php" id="iconHome"><i class="fas fa-home"></i></a>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro del Investigador <i class="fas fa-search"></i></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Informacion Personal</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" id="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mt-3" id="apellidopaterno" placeholder="Apellido Paterno">
                    <input type="text" class="form-control mt-3" id="apellidomaterno" placeholder="Apellido Materno">
                    <input type="text" class="form-control mt-3" id="iduser" placeholder="ID Usuario">
                    <input type="mail" class="form-control mt-3" id="mail" placeholder="Correo electronico">
                    <input type="password" class="form-control mt-3" id="pass" placeholder="Contraseña">
                    <input type="password" class="form-control mt-3 mb-5" id="confirmpass" placeholder="Confirmar contraseña">

                    <h5>Información Institucional</h5>

                    <select name="" class="custom-select mb-4" id="">
                        <option disabled selected>Informacion Institucional</option>
                    </select>

                    <select name="" class="custom-select mb-4" id="">
                        <option disabled selected>Genero</option>
                    </select>

                    <select name="" class="custom-select mb-4" id="">
                        <option disabled selected>Cargo Academico</option>
                    </select>

                    <select name="" class="custom-select mb-4" id="">
                        <option disabled selected>Grado Academico</option>
                    </select>

                    <select name="" class="custom-select mb-4" id="">
                        <option disabled selected>Tipo de padron de Investigación</option>
                    </select>

                    <button type="submit" class="btn btn-success mt-4">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>