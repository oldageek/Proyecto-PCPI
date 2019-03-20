<?php require 'header.php'; ?>

    <div class="container"> 
        <div class="row-auto">
            <a href="index.php" class="icono"><i class="fas fa-home"></i></a>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3>Registro de Capitulo <!--<i class="fas fa-search"></i>--></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <h5>Informacion del Capitulo</h5>
                <form action="" method="post">
                    <input type="text" class="form-control mt-3" id="tituloLibro" placeholder="Titulo del Libro *">
                    <input type="text" class="form-control mt-3" id="tituloCap" placeholder="Titulo del Capitulo *">
                    <input type="text" class="form-control mt-3" id="numeroCap" placeholder="Numero de Capitulo *" required>
                    <input type="number" min="1" max="10000" step="1" class="form-control mt-3" id="paginaInicio" placeholder="Pagina Inicio *" required>
                    <input type="number" min="1" max="10000" step="1" class="form-control mt-3" id="paginaFin" placeholder="Pagina Fin *" required>
                    
                    
                    <textarea class="form-control mt-3" rows="5" id="descripcion" placeholder="Descripción *" required></textarea>
                    
                    <textarea class="form-control mt-3 mb-5" rows="5" id="autores" placeholder="Autores *" required></textarea>
                    
                    <button type="submit" class="btn btn-success mt-4">Registrar Capitulo</button>
                </form>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>