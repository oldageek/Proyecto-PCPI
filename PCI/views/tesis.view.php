<?php require 'header.php'; ?>

    <div class="container"> 
        <!--div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div-->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Tesis <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Informacion de Tesis</h5>
                <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <br>
                    <h5>Autor</h5>
                    <input type="text" class="form-control mt-3" name="nombreAutor" id="nombreAutor" placeholder="Nombre *" required>
                    <input type="text" class="form-control mt-3" name="paterno" id="paterno" placeholder="Apellido Paterno *" required>
                    <input type="text" class="form-control mt-3" name="materno" id="materno" placeholder="Apellido Materno *" required>
                    <br>
                    <select name="gradoAcademico" class="custom-select mb-4" id="gradoAcademico">
                        <option value="Licenciatura">LICENCIATURA</option>
                        <option value="Especialidad">ESPECIALIDAD</option>
                        <option value="Maestria">MAESTRIA</option>
                        <option value="Doctorado">DOCTORADO</option>
                        <option disabled selected>Grado Academico *</option>
                    </select>
                    
                    
                    <h5>Area de Conocimiento</h5>
                    <select name="area" class="custom-select mt-3" id="area">
                        <option value="Informacion Financiera">INFORMACIÓN FINANCIERA</option>
                        <option value="Juridico Fiscal">JURIDICO FISCAL</option>
                        <option value="Negocios">NEGOCIOS</option>
                        <option disabled selected>Area *</option>
                    </select>
                    
                    <select name="subArea" class="custom-select mt-3" id="campo">
                        <option value="Contabilidad">CONTABILIDAD</option>
                        <option value="Contabilidad Gerencial">CONTABILIDAD GERENCIAL</option>
                        <option value="Auditoria">AUDITORIA</option>
                        <option value="Derecho">DERECHO</option>
                        <option value="Fiscal">FISCAL</option>
                        <option value="Matematicas">MATEMÁTICAS</option>
                        <option value="Administracion">ADMINISTRACIÓN</option>
                        <option value="Economia">ECONOMÍA</option>
                        <option value="Finanzas">FINANZAS</option>
                        <option disabled selected>Sub-Area *</option>
                    </select>
                    
                    
                    
                    <select name="apoyoCona" class="custom-select mt-3" id="apoyoCona">
                        <option value="Si">SI</option>
                        <option value="NO">No</option>
                        <option disabled selected>Apoyo CONACYT *</option>
                    </select>
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Tesis</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>