<?php require 'header.php'; ?>

<div class="container">
    <div class="row mb-4 d-flex justify-content-center">
        <div class="col-auto align-self-center">
            <h2>Mis Tesis</h2>
        </div>
    </div>
    
    <div class="container d-flex" >           
        <table class="table table-hover">
            <thead>
                <tr>
                    <!--th>idLibro</th>
                    <th>idInvestigadorLibro</th-->
                    <th>NOMBRE</th>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <th>GRADO ACADEMICO</th>
                    <th>AREA</th>
                    <th>SUB AREA</th>
                    <th>APOYO CONACYT</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                
                while($mostrar=mysqli_fetch_array($resultado)){
                ?>
         
                    <tr>
                        <td><?php echo utf8_encode($mostrar['nombreAutor']) ?></td>
                        <td><?php echo utf8_encode($mostrar['paterno']) ?></td>
                        <td><?php echo utf8_encode($mostrar['materno']) ?></td>
                        <td><?php echo utf8_encode($mostrar['gradoAcademico']) ?></td>
                        <td><?php echo utf8_encode($mostrar['area']) ?></td>
                        <td><?php echo utf8_encode($mostrar['subArea']) ?></td>
                        <td><?php echo utf8_encode($mostrar['apoyoConacyt']) ?></td>
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
    
    <div class="col d-flex justify-content-end">        
        <div>
            <button type="button"  class="btn btn-primary btn-lg"><a href="registroTesis.php" style="color:white;">+ Agregar Tesis</a></button>
        </div>
        
    </div>

    
</div>

<?php require 'footer.php'; ?>