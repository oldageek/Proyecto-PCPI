<?php require 'header.php'; ?>

<div class="container">
    <div class="row mb-4 d-flex justify-content-center">
        <div class="col-auto align-self-center">
            <h2>Mis Libros</h2>
        </div>
    </div>
        
    <div class="container d-flex" >           
        <table class="table table-hover">
            <thead>
                <tr>
                    <!--th>idLibro</th>
                    <th>idInvestigadorLibro</th-->
                    <th>ISBN</th>
                    <th>TITULO</th>
                    <th>AÑO CREACION</th>
                    <th>VOLUMEN</th>
                    <th>TOMO</th>
                    <th>EDICION</th>
                    <th>EDITORIAL</th>
                    <th>NUMERO DE PAGINAS</th>
                    <th>FINANCIAMIENTO</th>
                    <th>IMPORTE</th>
                    <th>ESTATUS</th>
                    <th>IDIOMA</th>
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
                        <td><?php echo $mostrar['isbn'] ?></td>
                        <td><?php echo $mostrar['titulo'] ?></td>
                        <td><?php echo $mostrar['anioCreacion'] ?></td>
                        <td><?php echo $mostrar['volumen'] ?></td>
                        <td><?php echo $mostrar['tomo'] ?></td>
                        <td><?php echo $mostrar['edicion'] ?></td>
                        <td><?php echo $mostrar['editorial'] ?></td>
                        <td><?php echo $mostrar['numPaginas'] ?></td>
                        <td><?php echo $mostrar['financiamiento'] ?></td>
                        <td><?php echo $mostrar['importeFinanciado'] ?></td>
                        <td><?php echo $mostrar['estatus'] ?></td>
                        <td><?php echo $mostrar['idioma'] ?></td>
                        <td><?php echo $mostrar['palabraClave1'] ?></td>
                        <td><?php echo $mostrar['palabraClave2'] ?></td>
                        <td><?php echo $mostrar['palabraClave3'] ?></td>
                        <td><?php echo $mostrar['area'] ?></td>
                        <td><?php echo $mostrar['subArea'] ?></td>
                        <td><?php echo $mostrar['apoyoConacyt'] ?></td>
                        <td><?php echo $mostrar['Autores'] ?></td>
                        
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
    
    
    
    
    
    
    
    <div class="col d-flex justify-content-end">        
        <div>
            <button type="button"  class="btn btn-primary btn-lg"><a href="registroLibro.php" style="color:white;">+ Agregar Libro</a></button>
        </div>
        
    </div>

    
</div>

<?php require 'footer.php'; ?>