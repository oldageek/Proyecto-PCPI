<?php require 'header.php'; ?>

    <div class="container"> 
        <!--div class="row-auto">
            <a href="#" class="icono"><i class="fas fa-home"></i></a>
        </div-->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Articulo <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Informacion del Libro</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" name="issn" id="issn" placeholder="ISSN *" required>
                    <input type="text" class="form-control mt-3" name="tituloRevista" id="tituloRevista" placeholder="Titulo del Articulo *" required>
                    <input type="text" class="form-control mt-3" name="nombreRevista" id="nombreRevista" placeholder="Nombre de la Revista *" required>
                    <input type="number" min="1" max="1000" step="1" class="form-control mt-3" name="numeroRevista" id="numeroRevista" placeholder="Numero de la Revista *" required>
                    <input type="number" min="1" max="1000" step="1" class="form-control mt-3" name="volumen" id="volumen" placeholder="Volumen de la Revista *" required>
                    <input type="number" min="1980" max="2019" step="1" class="form-control mt-3" name="anioPublicacion" id="anioPublicacion" placeholder="Año de Publicación *" required>
                    <input type="number" min="1" max="4000" step="1" class="form-control mt-3" name="paginaInicio" id="paginaInicio" placeholder="Pagina Inicio *" required>
                    <input type="number" min="1" max="4000" step="1" class="form-control mt-3" name="paginaFin" id="paginaFin" placeholder="Pagina Fin *" required>
                    
                    <input type="text" class="form-control mt-3" name="palabra1" id="palabra1" placeholder="Palabra Clave 1">
                    <input type="text" class="form-control mt-3" name="palabra2" id="palabra2" placeholder="Palabra Clave 2">
                    <input type="text" class="form-control mt-3 mb-5" name="palabra3" id="palabra3" placeholder="Palabra Clave 3">
                    

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
                    
                    <textarea class="form-control mt-3 mb-5" rows="5" name="autores" id="autores" placeholder="Autores *" required></textarea>
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Articulo</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>