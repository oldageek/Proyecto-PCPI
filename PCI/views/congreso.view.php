<?php require 'header.php'; ?>

    <div class="container"> 
        <!--div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div-->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Congreso <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>formacion del Congreso</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" name="nombreCongreso" id="nombreCongreso" placeholder="Nombre del Congreso *" required>
                    <input type="text" class="form-control mt-3" name="trabajo" id="trabajo" placeholder="Trabajo Presentado *" required>
                    <input type="text" class="form-control mt-3" name="nombreDocente" id="nombreDocente" placeholder="Nombre del Docente *" required>
                    
                       <select name="pais" class="custom-select mt-3" id="pais">
                        <option value="1">Mexico</option>
                        <option value="2">España</option>
                        <option value="3">Colombia</option>
                        <option value="4">EEUU</option>
                        <option value="5">Argentina</option>
                        <option value="6">Chile</option>
                        <option value="7">Canada</option>
                        <option disabled selected>Pais donde fue el Congreso *</option>
                    </select>
                    
                    <select name="financiamiento" class="custom-select mt-3" id="financiamiento">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                        <option disabled selected>Financiamiento *</option>
                    </select>
                    
                    <input type="number" min="100" max="10000" step="100" class="form-control mt-3" name="importe" id="importe" placeholder="Importe Financiado *" required>
                    <input type="text" class="form-control mt-3" id="fechaInicio" placeholder="Fecha de Inicio del Congreso *" required>
                    <input type="text" class="form-control mt-3" id="fechaFin" placeholder="Fecha de Fin del Congreso *" required>
                    
                    <select name="tipoParticipacion" class="custom-select mt-3" id="tipoParticipacion">
                        <option value="1">Conferencia magistral</option>
                        <option value="2">Moderador</option>
                        <option value="3">Organizador del evento</option>
                        <option value="4">Participante en mesa redonda</option>
                        <option value="5">Ponencia</option>
                        <option value="6">Poster</option>
                        <option value="7">Presentacion de articulo</option>
                        <option value="8">Folder</option>
                        <option disabled selected>Tipo de Participacion en el Congreso *</option>
                    </select>
                    
                    <input type="text" class="form-control mt-3" name="palabra1"id="palabra1" placeholder="Palabra Clave 1">
                    <input type="text" class="form-control mt-3" name="palabra2"id="palabra2" placeholder="Palabra Clave 2">
                    <input type="text" class="form-control mt-3" name="palabra3"id="palabra3" placeholder="Palabra Clave 3">
                    <textarea class="form-control mt-3 mb-5" rows="5" name="colaboradores" id="colaboradores" placeholder="Colaboradores: *" required></textarea>
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Congreso</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>