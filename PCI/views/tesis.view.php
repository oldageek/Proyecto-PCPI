<?php require 'header.php'; ?>

    <div class="container"> 
        <div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Tesis <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Informacion de Tesis</h5>
                <form action="" method="post">
                    <br>
                    <h5>Autor</h5>
                    <input type="text" class="form-control mt-3" id="nombreAutor" placeholder="Nombre *" required>
                    <input type="text" class="form-control mt-3" id="paterno" placeholder="Apellido Paterno *" required>
                    <input type="text" class="form-control mt-3" id="materno" placeholder="Apellido Materno *" required>
                    <br>
                    <select name="" class="custom-select mb-4" id="gradoAcademico">
                        <option selected>Licenciatura</option>
                        <option selected>Especialidad</option>
                        <option selected>Maestria</option>
                        <option selected>Doctorado</option>
                        <option selected>Otro</option>
                        <option disabled selected>Grado Academico *</option>
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
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Tesis</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>