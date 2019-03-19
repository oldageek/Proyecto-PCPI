<?php require 'header.php'; ?>

    <div class="container"> 
        <div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Congreso <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Informacion del Congreso</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" id="nombreCongreso" placeholder="Nombre del Congreso *" required>
                    <input type="text" class="form-control mt-3" id="trabajo" placeholder="Trabajo Presentado *" required>
                    <input type="text" class="form-control mt-3" id="nombreDocente" placeholder="Nombre del Docente *" required>
                    
                       <select name="pais" class="custom-select mt-3" id="pais">
                        <option selected>México</option>
                        <option selected>España</option>
                        <option selected>Colombia</option>
                        <option selected>EEUU</option>
                        <option selected>Argentina</option>
                        <option selected>Chile</option>
                        <option selected>Canada</option>
                        <option disabled selected>Pais donde fue el Congreso *</option>
                    </select>
                    
                    <select name="financiamiento" class="custom-select mt-3" id="financiamiento">
                        <option selected>Si</option>
                        <option selected>No</option>
                        <option disabled selected>Financiamiento *</option>
                    </select>
                    
                    <input type="number" min="100" max="10000" step="100" class="form-control mt-3" name="importe" id="importe" placeholder="Importe Financiado *" required>
                    <input type="text" class="form-control mt-3" id="fechaInicio" placeholder="Fecha de Inicio del Congreso *" required>
                    <input type="text" class="form-control mt-3" id="fechaFin" placeholder="Fecha de Fin del Congreso *" required>
                    <input type="text" class="form-control mt-3" id="participacion" placeholder="Tipo de Participación *" required>
                    <input type="text" class="form-control mt-3" id="palabra1" placeholder="Palabra Clave 1">
                    <input type="text" class="form-control mt-3" id="palabra2" placeholder="Palabra Clave 2">
                    <input type="text" class="form-control mt-3" id="palabra3" placeholder="Palabra Clave 3">
                    <textarea class="form-control mt-3 mb-5" rows="5" id="colaboradores" placeholder="Colaboradores: *" required></textarea>
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Congreso</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>