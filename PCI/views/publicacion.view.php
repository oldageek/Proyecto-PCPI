<?php require 'header.php'; ?>

    <div class="container"> 
        <div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Publicaciones <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Información de Publicación</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" id="isnn" placeholder="ISNN">
                    <input type="text" class="form-control mt-3" id="nombrePublicacion" placeholder="Nombre de la Publicación *" required>
                    <input type="text" class="form-control mt-3" id="nombreRevista" placeholder="Nombre de la Revista *" required>
                    <input type="text" class="form-control mt-3" id="correoRevista" placeholder="Correo de la Revista *" required>
                    <input type="number" min="1" max="4000" step="1" class="form-control mt-3" id="paginaInicio" placeholder="Página de Inicio *" required>
                    <input type="number" min="1" max="4000" step="1" class="form-control mt-3" id="paginaFin" placeholder="Página de Finalización *" required>
                    
                    <select name="financiamiento" class="custom-select mt-3" id="financiamiento">
                        <option selected>Si</option>
                        <option selected>No</option>
                        <option disabled selected>Financiamiento *</option>
                    </select>
                    
                    <input type="number" min="100" max="10000" step="100" class="form-control mt-3" id="importeFinanciado" placeholder="Importe Financiado" required>

                    <select name="Reconocimiento" class="custom-select mt-3" id="reconocimiento">
                        <option selected>Si</option>
                        <option selected>No</option>
                        <option disabled selected>Reconocimiento *</option>
                    </select>
                   
                    <input type="text" class="form-control mt-3" id="nombreReconocimiento" placeholder="Nombre del Reconocimiento ">
                    <br>
                    <h5>Area de Conocimiento</h5>
                    
                    <select name="area" class="custom-select mt-3" id="area">
                        <option selected>Fisica, Matemáticas y Ciencias de la Tierra</option>
                        <option selected>Biología y Química</option>
                        <option selected>Medicina y Salud</option>
                        <option selected>Humanidades y de la Conducta</option>
                        <option selected>Sociales y Económicas</option>
                        <option selected>Biotecnología y Agropecuarias</option>
                        <option selected>Ingenieria e Industrial</option>
                        <option disabled selected>Area *</option>
                    </select>
                    
                    <select name="campo" class="custom-select mt-3" id="campo">
                        <option selected>LÓGICA</option>
                        <option selected>MATEMÁTICAS</option>
                        <option selected>ASTRONOMÍA Y ASTROFÍSICA</option>
                        <option selected>FÍSICA</option>
                        <option selected>CIENCIAS DE LA TIERRA Y EL COSMOS</option>
                        <option selected>QUIMICA</option>
                        <option selected>CIENCIAS DE LA VIDA</option>
                        <option selected>MEDICINA Y PATOLOGIA HUMANA</option>
                        <option selected>ANTROPOLOGÍA</option>
                        <option selected>HISTORIA</option>
                        <option selected>LINGÜISTICA</option>
                        <option selected>PEDAGOGÍA</option>
                        <option selected>PSICOLOGÍA</option>
                        <option selected>ARTES Y LETRAS</option>
                        <option selected>ÉTICA</option>
                        <option selected>FILOSOFÍA</option>
                        <option selected>DEMOGRAFÍA</option>
                        <option selected>CIENCIAS ECONÓMICAS</option>
                        <option selected>GEOGRAFIA</option>
                        <option selected>CIENCIAS JURÍDICAS Y DERECHO</option>
                        <option selected>CIENCIAS POLÍTICAS</option>
                        <option selected>SOCIOLOGÍA</option>
                        <option selected>CIENCIAS AGRONOMICAS Y VETERINARIAS</option>
                        <option selected>CIENCIAS DE LA TECNOLOGIA</option>
                        <option disabled selected>Campo *</option>
                    </select>
                    
                    <select name="diciplina" class="custom-select mt-3" id="diciplina">
                        <option selected>APLICACIONES DE LA LOGICA</option>
                        <option selected>LOGICA DEDUCTIVA</option>
                        <option selected>LOGICA GENERAL</option>
                        <option selected>LOGICA INDUCTIVA</option>
                        <option selected>METODOLOGIA</option>
                        <option selected>OTRAS ESPECIALIDADES EN MATERIA DE LOGICA</option>
                        <option selected>ALGEBRA</option>
                        <option selected>ANALISIS Y ANALISIS FUNCIONAL</option>
                        <option selected>INFORMATICA MATEMATICA</option>
                        <option selected>GEOMETRIA</option>
                        <option selected>TEORIA DE LOS NUMEROS</option>
                        <option selected>ANALISIS NUMERICO</option>
                        <option selected>INVESTIGACION OPERATIVA</option>
                        <option selected>CALCULO DE PROBABILIDADES</option>
                        <option selected>ESTADISTICA</option>
                        <option selected>TOPOLOGIA</option>
                        <option selected>COSMOLOGIA Y COSMOGONIA</option>
                        <option selected>ESPACIOS Y MATERIA INTERPLANETARIOS</option>
                        <option selected>ASTRONOMIA OPTICA</option>
                        <option selected>PLANETOLOGIA</option>
                        <option selected>RADIOASTRONOMIA</option>
                        <option selected>SISTEMA SOLAR</option>
                        <option selected>ACUSTICA</option>
                        <option selected>ELECTROMAGNETISMO</option>
                        <option selected>ELECTRONICA</option>
                        <option selected>FISICA DE LOS FLUIDOS</option>
                        <option selected>MECANICA</option>
                        <option selected>FISICA MOLECULAR</option>
                        <option selected>FISICA NUCLEAR</option>
                        <option disabled selected>Diciplina *</option>
                    </select>
                    
                    <select name="subDiciplina" class="custom-select mt-3" id="subDiciplina">
                        <option selected>ANALOGIA</option>
                        <option selected>INDUCCION</option>
                        <option selected>METODO CIENTIFICO</option>
                        <option selected>GEOMETRIA ALGEBRAICA</option>
                        <option selected>ALGEBRA DE OPERADORES LOGICOS</option>
                        <option selected>CONTABILIDAD</option>
                        <option selected>GEOMETRIA AFIN</option>
                        <option selected>TEORIA DE LOS NUMEROS ALGEBRAICOS</option>
                        <option selected>CONSTRUCCION DE ALGORITMOS</option>
                        <option selected>ANALISIS MICROECONOMICO</option>
                        <option selected>MATEMATICAS ACTUARIALES</option>
                        <option selected>ESTADISTICA ANALITICA</option>
                        <option selected>ESPACIOS ABSTRACTOS</option>
                        <option selected>ESTRELLAS BINARIAS</option>
                        <option selected>CAMPOS INTERPLANETARIOS</option>
                        <option selected>TELESCOPIOS</option>
                        <option selected>ANTENAS</option>
                        <option selected>ENERGIA SOLAR</option>
                        <option selected>RUIDO</option>
                        <option selected>CONDUCTIVIDAD</option>
                        <option selected>CIRCUITOS</option>
                        <option selected>COLOIDES</option>
                        <option selected>RADICALES LIBRES</option>
                        <option selected>IONES ATOMICOS</option>
                        <option selected>FUENTES DE HACES</option>
                        <option selected>CINEMATOGRAFIA</option>
                        <option selected>CATALISIS</option>
                        <option selected>COMPUESTOS</option>
                        <option selected>GRAVITACION</option>
                        <option disabled selected>Sub-Diciplina *</option>
                    </select>
                    
                    <textarea class="form-control mt-3 mb-5" rows="5" id="autores" placeholder="Autores *" required></textarea>
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Publicación </button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>