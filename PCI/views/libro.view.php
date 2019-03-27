<?php require 'header.php'; ?>

    <div class="container"> 
        <!--div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div-->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Libro <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Informacion del Libro</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" name="isbn" id="isbn" placeholder="ISBN">
                    <input type="text" class="form-control mt-3" name="tituloLibro" id="tituloLibro" placeholder="Titulo del Libro *" required>
                    <input type="number" min="1980" max="2019" step="1" class="form-control mt-3" name="anioCreacion" id="anioCreacion" placeholder="Año de Creacion *" required>
                    <input type="number" min="1" max="10" step="1" class="form-control mt-3" name="volumen" id="volumen" placeholder="Volumen *" required>
                    <input type="number" min="1" max="10" step="1" class="form-control mt-3" name="tomo" id="tomo" placeholder="Tomo *" required>
                    <input type="number" min="1980" max="2019" step="1" class="form-control mt-3" name="anioEdicion" id="anioEdicion" placeholder="Año de Edición *" required>
                    <input type="text" class="form-control mt-3" name="editorial" id="editorial" placeholder="Editorial">
                    <input type="number" min="1" max="4000" step="1" class="form-control mt-3" name="noPaginas" id="noPaginas" placeholder="Numero de Paginas *" required>
                    
                    <select name="financiamiento" class="custom-select mt-3" id="financiamiento">
                        <option value="Si">SI</option>
                        <option value="No">NO</option>
                        <option disabled selected>Financiamiento *</option>
                    </select>
                    
                    <input type="number" min="100" max="10000" step="100" class="form-control mt-3" name="importe" id="importe" placeholder="Importe Financiado *" required>
                    
                    <select name="estatus" class="custom-select mt-3" id="estatus">
                        <option value="En Proceso">EN PROCESO</option>
                        <option value="Terminado">TERMINADO</option>
                        <option value="Publicado">PUBLICADO</option>
                        
                        <option disabled selected>Estatus *</option>
                    </select>
                    
                    <select name="idioma" class="custom-select mt-3" id="idioma">
                        <option value="Español">ESPAÑOL</option>
                        <option value="Ingles">INGLES</option>
                        <option value="Aleman">ALEMAN</option>
                        <option disabled selected>Idioma *</option>
                    </select>
                    
                    <input type="text" class="form-control mt-3" name="palabra1" id="palabra1" placeholder="Palabra Clave 1">
                    <input type="text" class="form-control mt-3" name="palabra2" id="palabra2" placeholder="Palabra Clave 2">
                    <input type="text" class="form-control mt-3" name="palabra3" id="palabra3" placeholder="Palabra Clave 3">
                    <br>
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
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Libro</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>