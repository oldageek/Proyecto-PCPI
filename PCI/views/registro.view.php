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
                <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" class="form-control mt-3" id="curp" placeholder="CURP *">
                    <input type="text" class="form-control mt-3" id="nombre" placeholder="Nombre *">
                    <input type="text" class="form-control mt-3" id="apellidopaterno" placeholder="Apellido Paterno *">
                    <input type="text" class="form-control mt-3" id="apellidomaterno" placeholder="Apellido Materno *">
                    
                    <select name="genero" class="custom-select mt-3" id="genero">
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                        <option value="3">Otro</option>
                        <option disabled selected>Genero *</option>
                    </select>
                    
                    <select name="paisNacimineto" class="custom-select mt-3 mb-5" id="paisNacimineto">
                        <option value="1">México</option>
                        <option value="2">EEUU</option>
                        <option value="3">Argentina</option>
                        <option value="4">Colombia</option>
                        <option value="5">Venezuela</option>
                        <option value="6">España</option>
                        <option value="7">Ecuador</option>
                        <option disabled selected>Pais de Nacimiento *</option>
                    </select>
                    
                    <input type="mail" class="form-control mt-3" id="mail" placeholder="Correo electronico">
                    <input type="password" class="form-control mt-3" id="pass" placeholder="Contraseña">
                    <input type="password" class="form-control mt-3 mb-5" id="confirmpass" placeholder="Confirmar contraseña">
                    
                    <h5>Domicilio</h5>
                    
                    <input type="text" class="form-control mt-3" id="iduser" placeholder="direccion">
                    
                    <select name="estado" class="custom-select mt-3" id="estado">
                        <option value="1">CDMX</option>
                        <option value="2">Puebla</option>
                        <option value="3">Tlaxcala</option>
                        <option value="4">Morelos</option>
                        <option value="5">Veracruz</option>
                        <option value="6">Mexico</option>
                        <option value="7">Guadalajara</option>
                        <option disabled selected>Entidad *</option>
                    </select>
                    
                    <select name="pais" class="custom-select mt-3 mb-5" id="pais">
                        <option value="1">México</option>
                        <option value="2">EEUU</option>
                        <option value="3">Argentina</option>
                        <option value="4">Colombia</option>
                        <option value="5">Venezuela</option>
                        <option value="6">España</option>
                        <option value="7">Ecuador</option>
                        <option disabled selected>Pais *</option>
                    </select>
                    
                    

                    <h5>Información Institucional</h5>

                    <select name="cargo" class="custom-select mb-4" id="cargo">
                        <option value="1">Profesor</option>
                        <option value="2">Secretario</option>
                        <option disabled selected>Cargo Academico *</option>
                    </select>

                    <select name="grado" class="custom-select mb-4" id="grado">
                        <option value="1">Licenciatura</option>
                        <option value="2">Especialidad</option>
                        <option value="3">Maestria</option>
                        <option value="4">Doctorado</option>
                        <option value="5">Otro</option>
                        <option disabled selected>Grado Academico</option>
                    </select>

                    <select name="tipo" class="custom-select mb-4" id="tipo">
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                        <option disabled selected>Tipo de padron de Investigación</option>
                    </select>

                    <button type="submit" class="btn btn-success mt-4">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>