<?php require 'header.php'; ?>

<div class="container">
    <div class="row mb-4 d-flex justify-content-center">
        <div class="col-auto align-self-center">
            <h2>Mis Proyectos</h2>
        </div>
    </div>
    <div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <!--th>idLibro</th>
                <th>idInvestigadorLibro</th-->
                <th>NOMBRE PROYECTO</th>
                <th>LINEA DE INVESTIGACIÓN</th>
                <th>iNSTANCIA</th>
                <th>FINANCIAMIENTO</th>
                <th>IMPORTE</th>
                <th>FECHA INICIO</th>
                <th>FECHA FIN</th>
                <th>ESTATUS</th>
                <th>PORCENTAJE AVANCE</th>
                <th>RECONOCIMIENTO</th>
                <th>NOMBRE RECONOCIMIENTO</th>
                <th>DESCRIPCION</th>
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
                    <td><?php echo utf8_encode($mostrar['nombreProyecto']) ?></td>
                    <td><?php echo utf8_encode($mostrar['lineaInvestigacion']) ?></td>
                    <td><?php echo utf8_encode($mostrar['instanciaRegistro']) ?></td>
                    <td><?php echo utf8_encode($mostrar['financiamiento']) ?></td>
                    <td><?php echo utf8_encode($mostrar['importeFinanciado']) ?></td>
                    <td><?php echo utf8_encode($mostrar['fechaInicio']) ?></td>
                    <td><?php echo utf8_encode($mostrar['fechaFin']) ?></td>
                    <td><?php echo utf8_encode($mostrar['estatus']) ?></td>
                    <td><?php echo utf8_encode($mostrar['porcentajeAvance']) ?></td>
                    <td><?php echo utf8_encode($mostrar['reconocimineto']) ?></td>
                    <td><?php echo utf8_encode($mostrar['nomReconocimiento']) ?></td>
                    <td><?php echo utf8_encode($mostrar['descripcion']) ?></td>
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
            <button type="button"  class="btn btn-primary btn-lg"><a href="registroProyecto.php" style="color:white;">+ Agregar Proyecto</a></button>
        </div>
        
    </div>

    
</div>

<?php require 'footer.php'; ?>