<?php require 'headerAdm.php'; ?>

<div class="container">
    <div class="row mb-4 d-flex justify-content-center">
        <div class="col-auto align-self-center">
            <h2>Mis Articulos</h2>
        </div>
    </div>
    
    <div class="container d-flex" >           
        <table class="table table-hover">
            <thead>
                <tr>
                    <!--th>idLibro</th>
                    <th>idInvestigadorLibro</th-->
                    <th>ISSN</th>
                    <th>TITULO ARTICULO</th>
                    <th>REVISTA</th>
                    <th>NUMERO</th>
                    <th>VOLUMEN</th>
                    <th>AÑO PUBLICACIÓN</th>
                    <th>PAGINA INICIO</th>
                    <th>PAGINA FIN</th>
                    <th>PALABRA 1</th>
                    <th>PALABRA 2</th>
                    <th>PALABRA 3</th>
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
                        <td><?php echo utf8_encode($mostrar['issn']) ?></td>
                        <td><?php echo utf8_encode($mostrar['tituloArticulo']) ?></td>
                        <td><?php echo utf8_encode($mostrar['nombreRevista']) ?></td>
                        <td><?php echo utf8_encode($mostrar['numeroRevista']) ?></td>
                        <td><?php echo utf8_encode($mostrar['volumenRevista']) ?></td>
                        <td><?php echo utf8_encode($mostrar['anioPublicacion']) ?></td>
                        <td><?php echo utf8_encode($mostrar['paginaInicio']) ?></td>
                        <td><?php echo utf8_encode($mostrar['paginaFin']) ?></td>
                        <td><?php echo utf8_encode($mostrar['palabraClave1']) ?></td>
                        <td><?php echo utf8_encode($mostrar['palabraClave2']) ?></td>
                        <td><?php echo utf8_encode($mostrar['palabraClave3']) ?></td>
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
    
    
    <div class="row">
        <div class="col-12">
            
        </div>
    </div>
    <div class="col d-flex justify-content-end">        
        <div>
            <button type="button"  class="btn btn-primary btn-lg"><a href="registroArticulo.php" style="color:white;">+ Agregar Articulo</a></button>
        </div>
        
    </div>
    

    
</div>

<?php require 'footer.php'; ?>