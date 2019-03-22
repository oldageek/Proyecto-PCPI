<?php require 'header.php'; ?>

    <div class="container"> 
        <div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div>
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
                        <option value="1">Si</option>
                        <option value="2">No</option>
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

                    <input type="number" min="0" max="100" step="5" class="form-control mt-3" name="porcentaje" id="porcentajeAvance" placeholder="Porcentaje de Avance *" required>

                    <select name="reconocimiento" class="custom-select mt-3" id="reconocimiento">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                        <option disabled selected>Reconocimiento </option>
                    </select>
                   
                    <input type="text" class="form-control mt-3" name="nombreReconocimiento" id="nomReconocimiento" placeholder="Nombre del Reconocimiento ">
                    <br>
                    <h5>Descripción del Proyecto</h5>
                    <textarea class="form-control mt-3 mb-5" rows="5" id="descripcion" placeholder="Descripción *" required></textarea>
                    <h5>Area de Conocimiento</h5>
                    
                    <select name="area" class="custom-select mt-3" id="area">
                        <option value="1">Fisica, Matemáticas y Ciencias de la Tierra</option>
                        <option value="2">Biología y Química</option>
                        <option value="3">Medicina y Salud</option>
                        <option value="4">Humanidades y de la Conducta</option>
                        <option value="5">Sociales y Económicas</option>
                        <option value="6">Biotecnología y Agropecuarias</option>
                        <option value="7">Ingenieria e Industrial</option>
                        <option disabled selected>Área *</option>
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
                        <option value="">APLICACIONES DE LA LOGICA</option>
                        <option value="">LOGICA DEDUCTIVA</option>
                        <option value="">LOGICA GENERAL</option>
                        <option value="">LOGICA INDUCTIVA</option>
                        <option value="">METODOLOGIA</option>
                        <option value="">OTRAS ESPECIALIDADES EN MATERIA DE LOGICA</option>
                        <option value="">ALGEBRA</option>
                        <option value="">ANALISIS Y ANALISIS FUNCIONAL</option>
                        <option value="">INFORMATICA MATEMATICA</option>
                        <option value="">GEOMETRIA</option>
                        <option value="">TEORIA DE LOS NUMEROS</option>
                        <option value="">ANALISIS NUMERICO</option>
                        <option value="">INVESTIGACION OPERATIVA</option>
                        <option value="">CALCULO DE PROBABILIDADES</option>
                        <option value="">ESTADISTICA</option>
                        <option value="">TOPOLOGIA</option>
                        <option value="">COSMOLOGIA Y COSMOGONIA</option>
                        <option value="">ESPACIOS Y MATERIA INTERPLANETARIOS</option>
                        <option value="">ASTRONOMIA OPTICA</option>
                        <option value="">PLANETOLOGIA</option>
                        <option value="">RADIOASTRONOMIA</option>
                        <option value="">SISTEMA SOLAR</option>
                        <option value="">ACUSTICA</option>
                        <option value="">ELECTROMAGNETISMO</option>
                        <option value="">ELECTRONICA</option>
                        <option value="">FISICA DE LOS FLUIDOS</option>
                        <option value="">MECANICA</option>
                        <option value="">FISICA MOLECULAR</option>
                        <option value="">FISICA NUCLEAR</option>
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
                    
                    <select name="apoyoConacyt" class="custom-select mt-3" id="apoyoConacyt">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                        <option disabled selected>Apoyo CONACYT </option>
                    </select>

                    <button type="submit" class="btn btn-success mt-4">Registrar Proyecto</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>