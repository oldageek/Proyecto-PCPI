<?php require 'header.php'; ?>

    <div class="container"> 
        <div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div>
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
                        <option value="1">Fisica, Matemáticas y Ciencias de la Tierra</option>
                        <option value="2">Biología y Química</option>
                        <option value="3">Medicina y Salud</option>
                        <option value="4">Humanidades y de la Conducta</option>
                        <option value="5">Sociales y Económicas</option>
                        <option value="6">Biotecnología y Agropecuarias</option>
                        <option value="7">Ingenieria e Industrial</option>
                        <option disabled selected>Area *</option>
                    </select>
                    
                    <select name="campo" class="custom-select mt-3" id="campo">
                        <option value="1">LÓGICA</option>
                        <option value="2">MATEMÁTICAS</option>
                        <option value="3">ASTRONOMÍA Y ASTROFÍSICA</option>
                        <option value="4">FÍSICA</option>
                        <option value="5">CIENCIAS DE LA TIERRA Y EL COSMOS</option>
                        <option value="6">QUIMICA</option>
                        <option value="7">CIENCIAS DE LA VIDA</option>
                        <option value="8">MEDICINA Y PATOLOGIA HUMANA</option>
                        <option value="9">ANTROPOLOGÍA</option>
                        <option value="10">HISTORIA</option>
                        <option value="11">LINGÜISTICA</option>
                        <option value="12">PEDAGOGÍA</option>
                        <option value="13">PSICOLOGÍA</option>
                        <option value="14">ARTES Y LETRAS</option>
                        <option value="15">ÉTICA</option>
                        <option value="16">FILOSOFÍA</option>
                        <option value="17">DEMOGRAFÍA</option>
                        <option value="18">CIENCIAS ECONÓMICAS</option>
                        <option value="19">GEOGRAFIA</option>
                        <option value="20">CIENCIAS JURÍDICAS Y DERECHO</option>
                        <option value="21">CIENCIAS POLÍTICAS</option>
                        <option value="22">SOCIOLOGÍA</option>
                        <option value="23">CIENCIAS AGRONOMICAS Y VETERINARIAS</option>
                        <option value="24">CIENCIAS DE LA TECNOLOGIA</option>
                        <option disabled selected>Campo *</option>
                    </select>
                    
                    <select name="diciplina" class="custom-select mt-3" id="diciplina">
                        <option value="1">APLICACIONES DE LA LOGICA</option>
                        <option value="2">LOGICA DEDUCTIVA</option>
                        <option value="3">LOGICA GENERAL</option>
                        <option value="4">LOGICA INDUCTIVA</option>
                        <option value="5">METODOLOGIA</option>
                        <option value="6">OTRAS ESPECIALIDADES EN MATERIA DE LOGICA</option>
                        <option value="7">ALGEBRA</option>
                        <option value="8">ANALISIS Y ANALISIS FUNCIONAL</option>
                        <option value="9">INFORMATICA MATEMATICA</option>
                        <option value="10">GEOMETRIA</option>
                        <option value="11">TEORIA DE LOS NUMEROS</option>
                        <option value="12">ANALISIS NUMERICO</option>
                        <option value="13">INVESTIGACION OPERATIVA</option>
                        <option value="14">CALCULO DE PROBABILIDADES</option>
                        <option value="15">ESTADISTICA</option>
                        <option value="16">TOPOLOGIA</option>
                        <option value="17">COSMOLOGIA Y COSMOGONIA</option>
                        <option value="18">ESPACIOS Y MATERIA INTERPLANETARIOS</option>
                        <option value="19">ASTRONOMIA OPTICA</option>
                        <option value="20">PLANETOLOGIA</option>
                        <option value="21">RADIOASTRONOMIA</option>
                        <option value="22">SISTEMA SOLAR</option>
                        <option value="23">ACUSTICA</option>
                        <option value="24">ELECTROMAGNETISMO</option>
                        <option value="25">ELECTRONICA</option>
                        <option value="26">FISICA DE LOS FLUIDOS</option>
                        <option value="27">MECANICA</option>
                        <option value="28">FISICA MOLECULAR</option>
                        <option value="29">FISICA NUCLEAR</option>
                        <option disabled selected>Diciplina *</option>
                    </select>
                    
                    <select name="subDiciplina" class="custom-select mt-3" id="subDiciplina">
                        <option value="1">ANALOGIA</option>
                        <option value="2">INDUCCION</option>
                        <option value="3">METODO CIENTIFICO</option>
                        <option value="4">GEOMETRIA ALGEBRAICA</option>
                        <option value="5">ALGEBRA DE OPERADORES LOGICOS</option>
                        <option value="6">CONTABILIDAD</option>
                        <option value="7">GEOMETRIA AFIN</option>
                        <option value="8">TEORIA DE LOS NUMEROS ALGEBRAICOS</option>
                        <option value="9">CONSTRUCCION DE ALGORITMOS</option>
                        <option value="10">ANALISIS MICROECONOMICO</option>
                        <option value="11">MATEMATICAS ACTUARIALES</option>
                        <option value="12">ESTADISTICA ANALITICA</option>
                        <option value="13">ESPACIOS ABSTRACTOS</option>
                        <option value="14">ESTRELLAS BINARIAS</option>
                        <option value="15">CAMPOS INTERPLANETARIOS</option>
                        <option value="16">TELESCOPIOS</option>
                        <option value="17">ANTENAS</option>
                        <option value="18">ENERGIA SOLAR</option>
                        <option value="19">RUIDO</option>
                        <option value="20">CONDUCTIVIDAD</option>
                        <option value="21">CIRCUITOS</option>
                        <option value="22">COLOIDES</option>
                        <option value="23">RADICALES LIBRES</option>
                        <option value="24">IONES ATOMICOS</option>
                        <option value="25">FUENTES DE HACES</option>
                        <option value="26">CINEMATOGRAFIA</option>
                        <option value="27">CATALISIS</option>
                        <option value="28">COMPUESTOS</option>
                        <option value="29">GRAVITACION</option>
                        <option disabled selected>Sub-Diciplina *</option>
                    </select>
                    
                    <select name="apoyoCona" class="custom-select mt-3" id="apoyoCona">
                        <option value="1">SI</option>
                        <option value="2">No</option>
                        <option disabled selected>Apoyo CONACYT *</option>
                    </select>
                    
                    <textarea class="form-control mt-3 mb-5" rows="5" name="autores" id="autores" placeholder="Autores *" required></textarea>
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Articulo</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>