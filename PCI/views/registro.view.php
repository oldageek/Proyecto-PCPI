<?php require 'headerIndex.php'; ?>

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
                <h4>Informacion Personal</h4>
                <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" class="form-control mt-4" name="curp" id="curp" placeholder="CURP *">
                    <input type="text" class="form-control mt-4" name="nombre" id="nombre" placeholder="Nombre *">
                    <input type="text" class="form-control mt-4" name="apellidopaterno" id="apellidopaterno" placeholder="Apellido Paterno *">
                    <input type="text" class="form-control mt-4 mb-3" name="apellidomaterno" id="apellidomaterno" placeholder="Apellido Materno *">
                    
                    <label for="genero">Genero:</label>
                    <select name="genero" class="custom-select mb-3" id="genero">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option disabled selected>- Seleccionar - *</option>
                    </select>
                    
                    <label for="paisNacimineto">Pais de nacimiento:</label>
                    <select name="paisNacimineto" class="custom-select mb-5" id="paisNacimineto">
                        <option value="Mexico">México</option>
                        <option value="EEUU">EEUU</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Ecuador">Ecuador</option>
                        <option disabled selected>- Seleccionar - *</option>
                    </select>
                    
                    <input type="mail" class="form-control mt-3" name="mail" id="mail" placeholder="Correo electronico">
                    <input type="password" class="form-control mt-3" name="pass" id="pass" placeholder="Contraseña">
                    <input type="password" class="form-control mt-3 mb-5" name="confirmpass" id="confirmpass" placeholder="Confirmar contraseña">
                    
                    <h4>Domicilio</h4>
                    
                    <input type="text" class="form-control mt-3 mb-3" name="direccion" id="direccion" placeholder="direccion">
                    
                    <label for="estado">Estado:</label>
                    <select name="estado" class="custom-select mb-3" id="estado">
                        <option value="CDMX">CDMX</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option disabled selected>- Seleccionar - *</option>
                    </select>
                    
                    <label for="pais">Pais:</label>
                    <select name="pais" class="custom-select mb-5" id="pais">
                        <option value="Mexico">México</option>
                        <option value="EEUU">EEUU</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Ecuador">Ecuador</option>
                        <option disabled selected>- Seleccionar - *</option>
                    </select>
                    
                    

                    <h4>Información Institucional</h4>

                    <label for="cargo mt-3">Cargo Academico:</label>
                    <select name="cargo" class="custom-select mb-4" id="cargo">
                        <option value="Profesor">Profesor</option>
                        <option value="Secretario">Secretario</option>
                        <option disabled selected>- Seleccionar - *</option>
                    </select>

                    <label for="grado">Grado Academico:</label>
                    <select name="grado" class="custom-select mb-4" id="grado">
                        <option value="Doctorado">Doctorado</option>
                        <option value="Maestria">Maestria</option>
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Especialidad">Especialidad</option>
                        <option value="Otro">Otro</option>
                        <option disabled selected>- Seleccionar - *</option>
                    </select>

                    <label for="tipo">Tipo de padron de Investigación:</label>
                    <select name="tipo" class="custom-select mb-4" id="tipo">
                        <option value="ESNI">ESNI</option>
                        <option value="BIEP">BIEP</option>
                        <option value="Ambos">Ambos</option>
                        <option value="Ninguno">Ninguno</option>
                        <option disabled selected>- Seleccionar - *</option>
                    </select>

                    <button type="submit" class="btn btn-success mt-4">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>