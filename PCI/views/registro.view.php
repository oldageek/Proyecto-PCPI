<?php require 'header.php'; ?>

    <div class="container"> 
        <div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
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
                    <input type="text" class="form-control mt-3" id="curp" placeholder="CURP *">
                    <input type="text" class="form-control mt-3" id="nombre" placeholder="Nombre *">
                    <input type="text" class="form-control mt-3" id="apellidopaterno" placeholder="Apellido Paterno *">
                    <input type="text" class="form-control mt-3" id="apellidomaterno" placeholder="Apellido Materno *">
                    
                    <select name="genero" class="custom-select mt-3" id="">
                        <option selected>Masculino</option>
                        <option selected>Femenino</option>
                        <option selected>Otro</option>
                        <option disabled selected>Genero *</option>
                    </select>
                    
                    <select name="paisNacimineto" class="custom-select mt-3 mb-5" id="">
                        <option selected>México</option>
                        <option selected>EEUU</option>
                        <option selected>Argentina</option>
                        <option selected>Colombia</option>
                        <option selected>Venezuela</option>
                        <option selected>España</option>
                        <option selected>Ecuador</option>
                        <option disabled selected>Pais de Nacimiento *</option>
                    </select>
                    
                    <input type="mail" class="form-control mt-3" id="mail" placeholder="Correo electronico">
                    <input type="password" class="form-control mt-3" id="pass" placeholder="Contraseña">
                    <input type="password" class="form-control mt-3 mb-5" id="confirmpass" placeholder="Confirmar contraseña">
                    
                    <h5>Domicilio</h5>
                    
                    <input type="text" class="form-control mt-3" id="iduser" placeholder="direccion">
                    
                    <select name="" class="custom-select mt-3" id="">
                        <option selected>CDMX</option>
                        <option selected>Puebla</option>
                        <option selected>Tlaxcala</option>
                        <option selected>Morelos</option>
                        <option selected>Veracruz</option>
                        <option selected>Mexico</option>
                        <option selected>Guadalajara</option>
                        <option disabled selected>Entidad *</option>
                    </select>
                    
                    <select name="pais" class="custom-select mt-3 mb-5" id="">
                        <option selected>México</option>
                        <option selected>EEUU</option>
                        <option selected>Argentina</option>
                        <option selected>Colombia</option>
                        <option selected>Venezuela</option>
                        <option selected>España</option>
                        <option selected>Ecuador</option>
                        <option disabled selected>Pais *</option>
                    </select>
                    
                    

                    <h5>Información Institucional</h5>

                    <select name="" class="custom-select mb-4" id="">
                        <option disabled selected>Profesor</option>
                        <option disabled selected>Secretario</option>
                        <option disabled selected>Cargo Academico *</option>
                    </select>

                    <select name="" class="custom-select mb-4" id="">
                        <option selected>Licenciatura</option>
                        <option selected>Especialidad</option>
                        <option selected>Maestria</option>
                        <option selected>Doctorado</option>
                        <option selected>Otro</option>
                        <option disabled selected>Grado Academico</option>
                    </select>

                    <select name="" class="custom-select mb-4" id="">
                        <option disabled selected>Tipo 1</option>
                        <option disabled selected>Tipo 2</option>
                        <option disabled selected>Tipo de padron de Investigación</option>
                    </select>

                    <button type="submit" class="btn btn-success mt-4">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>