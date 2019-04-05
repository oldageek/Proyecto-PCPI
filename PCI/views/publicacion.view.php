<?php require 'header.php'; ?>

    <div class="container"> 
        <!--div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div-->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Publicacion <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Información de Publicación</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" name="isnn" id="isnn" placeholder="ISNN">
                    <input type="text" class="form-control mt-3" name="nombrePublicacion" id="nombrePublicacion" placeholder="Nombre de la Publicación *" required>
                    <input type="text" class="form-control mt-3" name="nombreRevista" id="nombreRevista" placeholder="Nombre de la Revista *" required>
                    <input type="text" class="form-control mt-3" name="correoRevista" id="correoRevista" placeholder="Correo de la Revista *" required>
                    <input type="number" min="1" max="4000" step="1" class="form-control mt-3" name="paginaInicio" id="paginaInicio" placeholder="Página de Inicio *" required>
                    <input type="number" min="1" max="4000" step="1" class="form-control mt-3" name="paginaFin" id="paginaFin" placeholder="Página de Finalización *" required>
                    
                    <select name="financiamiento" class="custom-select mt-3" id="financiamiento">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                        <option disabled selected>Financiamiento *</option>
                    </select>
                    
                    <input type="number" min="100" max="10000" step="100" class="form-control mt-3" name="importeFinanciado" id="importeFinanciado" placeholder="Importe Financiado" required>

                    <select name="reconocimiento" class="custom-select mt-3" id="reconocimiento">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                        <option disabled selected>Reconocimiento *</option>
                    </select>
                   
                    <input type="text" class="form-control mt-3" name="nombreReconocimiento" id="nombreReconocimiento" placeholder="Nombre del Reconocimiento ">
                    <br>
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
                    
                    <select name="apoyoConacyt" class="custom-select mt-3" id="apoyoConacyt">
                        <option value="Si">SI</option>
                        <option value="NO">No</option>
                        <option disabled selected>Apoyo CONACYT *</option>
                    </select>
                    
                    <textarea class="form-control mt-3 mb-5" rows="5" name="autores" id="autores" placeholder="Autores *" required></textarea>
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Publicación </button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>