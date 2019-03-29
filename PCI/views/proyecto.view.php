<?php require 'header.php'; ?>

    <div class="container"> 
        <!--div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div-->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Proyectos <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Informacion de Proyecto</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" name="nombreProyecto" id="nombreProyecto" placeholder="Nombre del Proyecto *" required>
                    <input type="text" class="form-control mt-3" name="lineaInvestigacion" id="lineaInvestigacion" placeholder="Línea de Investigación *" required>
                    <input type="text" class="form-control mt-3" name="instanciaRegistro" id="instanciaRegistro" placeholder="Instacia del Registro *" required>
                    
                    <select name="financiamiento" class="custom-select mt-3" id="financiamiento">
                        <option value="Si">SI</option>
                        <option value="No">NO</option>
                        <option disabled selected>Financiamiento *</option>
                    </select>
                    
                    <input type="number" min="100" max="10000" step="100" class="form-control mt-3" name="importeFinanciado" id="importeFinanciado" placeholder="Importe Financiado *" required>
                    <br>
                    <div class="form-group">
                        <label >Fecha de Inicio</label>
                        <input type="date" name="fechaInicio" max="2100-12-31" 
                        min="1950-01-01" class="form-control" id="fechaInicio">
                    </div>

                    <div class="form-group">
                        <label >Fecha de Finalización</label>
                        <input type="date" name="fechaFin" max="2100-12-31" 
                        min="1950-01-01" class="form-control" id="fechaFin">
                    </div>

                    <select name="estatus" class="custom-select mt-3" id="estatus">
                        <option value="1">Terminado</option>
                        <option value="2">En Proceso</option>
                        <option disabled selected>Estatus *</option>
                    </select>

                    <input type="number" min="0" max="100" step="5" class="form-control mt-3" name="porcentajeAvance" id="porcentajeAvance" placeholder="Porcentaje de Avance *" required>

                    <select name="reconocimiento" class="custom-select mt-3" id="reconocimiento">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                        <option disabled selected>Reconocimiento </option>
                    </select>
                   
                    <input type="text" class="form-control mt-3" name="nomReconocimiento" id="nomReconocimiento" placeholder="Nombre del Reconocimiento ">
                    <br>
                    <h5>Descripción del Proyecto</h5>
                    <textarea class="form-control mt-3 mb-5" rows="5" id="descripcion" placeholder="Descripción *" required></textarea>
                    <h5>Area de Conocimiento</h5>
                    
                    <select name="area" class="custom-select mt-3" id="area">
                        <option value="Informacion Financiera">INFORMACIÓN FINANCIERA</option>
                        <option value="Juridico Fiscal">JURIDICO FISCAL</option>
                        <option value="Negocios">NEGOCIOS</option>
                        <option disabled selected>Area *</option>
                    </select>
                    
                    <select name="subArea" class="custom-select mt-3" id="subArea">
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
                    
                    
                    
                    <select name="apoyoCona" class="custom-select mt-3" id="apoyoConacyt">
                        <option value="Si">SI</option>
                        <option value="NO">No</option>
                        <option disabled selected>Apoyo CONACYT *</option>
                    </select>

                    <button type="submit" class="btn btn-success mt-4">Registrar Proyecto</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>