<?php require 'headerAdm.php'; ?>

<div class="container">
    <div class="row mb-4 d-flex justify-content-center">
        <div class="col-auto align-self-center">
            <h2>Mis Publicaciones</h2>
        </div>
    </div>
    
    <div class="container d-flex" >           
        <table class="table table-hover">
            <thead>
                <tr>
                    <!--th>idLibro</th>
                    <th>idInvestigadorLibro</th-->
                    <th>ISBN</th>
                    <th>NOMBRE PUBLICACIÓN</th>
                    <th>NOMBRE REVISTA</th>
                    <th>CORREO REVISTA</th>
                    <th>PAGINA INICIO</th>
                    <th>PAGINA FIN</th>
                    <th>FINANCIAMINETO</th>
                    <th>IMPORTE</th>
                    <th>RECONOCIMIENTO</th>
                    <th>NOMBRE RECONOCIMIENTO</th>
                    <th>AREA</th>
                    <th>SUB AREA</th>
                    <th>APOYO CONACYT</th>
                    <th>AUTORES</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                
                while($mostrar=mysqli_fetch_array($resultado)){
                ?>
         
                    <tr>
                        <td><?php echo utf8_encode($mostrar['isnn']) ?></td>
                        <td><?php echo utf8_encode($mostrar['nombrePublicacion']) ?></td>
                        <td><?php echo utf8_encode($mostrar['nombreRevista']) ?></td>
                        <td><?php echo utf8_encode($mostrar['correoRevista']) ?></td>
                        <td><?php echo utf8_encode($mostrar['paginaInicio']) ?></td>
                        <td><?php echo utf8_encode($mostrar['paginaFin']) ?></td>
                        <td><?php echo utf8_encode($mostrar['financiamiento']) ?></td>
                        <td><?php echo utf8_encode($mostrar['importeFinanciado']) ?></td>
                        <td><?php echo utf8_encode($mostrar['reconocimiento']) ?></td>
                        <td><?php echo utf8_encode($mostrar['nombreReconocimiento']) ?></td>
                        <td><?php echo utf8_encode($mostrar['area']) ?></td>
                        <td><?php echo utf8_encode($mostrar['subArea']) ?></td>
                        <td><?php echo utf8_encode($mostrar['apoyoConacyt']) ?></td>
                        <td><?php echo utf8_encode($mostrar['autores']) ?></td>
                        
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
    
    <div class="col d-flex justify-content-end">        
        <div>
            <button type="button"  class="btn btn-primary btn-lg"><a href="registroPublicacion.php" style="color:white;">+ Agregar Publicacion</a></button>
        </div>
        
    </div>

    
</div>

<?php require 'footer.php'; ?>