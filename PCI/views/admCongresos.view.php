<?php require 'headerAdm.php'; ?>

<div class="container">
    <div class="row mb-4 d-flex justify-content-center">
        <div class="col-auto align-self-center">
            <h2>Congresos</h2>
        </div>
    </div>
    <label for="busqueda">Palabra Clave</label><br>
    <input type="text"><br>
    <div class="container d-flex" >          
        <table class="table table-hover">
            <thead>
                <tr>
                    <!--th>idLibro</th>
                    <th>idInvestigadorLibro</th-->
                    <th>NOMBRE CONGRESO</th>
                    <th>TRABAJO PRESENTADO</th>
                    <th>DOCENTE</th>
                    <th>PAIS</th>
                    <th>FINANCIAMIENTO</th>
                    <th>IMPORTE</th>
                    <th>FECHA INICIO</th>
                    <th>FECHA FIN</th>
                    <th>PARTICIPACIÓN</th>
                    <th>PALABRA 1</th>
                    <th>PALABRA 2</th>
                    <th>PALABRA 3</th>
                    <th>COLABORADORES</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                
                while($mostrar=mysqli_fetch_array($resultado)){
                ?>
         
                    <tr>
                        <td><?php echo utf8_encode($mostrar['nombreCongreso']) ?></td>
                        <td><?php echo utf8_encode($mostrar['trabajoPresentado']) ?></td>
                        <td><?php echo utf8_encode($mostrar['nombreDocente']) ?></td>
                        <td><?php echo utf8_encode($mostrar['pais']) ?></td>
                        <td><?php echo utf8_encode($mostrar['financiamiento']) ?></td>
                        <td><?php echo utf8_encode($mostrar['importeFinanciado']) ?></td>
                        <td><?php echo utf8_encode($mostrar['fechaInicio']) ?></td>
                        <td><?php echo utf8_encode($mostrar['fechaFin']) ?></td>
                        <td><?php echo utf8_encode($mostrar['tipoParticipacion']) ?></td>
                        <td><?php echo utf8_encode($mostrar['palabraClave1']) ?></td>
                        <td><?php echo utf8_encode($mostrar['palabraClave2']) ?></td>
                        <td><?php echo utf8_encode($mostrar['palabraClave3']) ?></td>
                        <td><?php echo utf8_encode($mostrar['colaboradores']) ?></td>
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
    
    <div class="col d-flex justify-content-end">        
        <div>
            <button type="button"  class="btn btn-primary btn-lg"><a href="registroCongreso.php" style="color:white;">+ Agregar Congreso</a></button>
        </div>
        
    </div>

    
</div>

<?php require 'footer.php'; ?>