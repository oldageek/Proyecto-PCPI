<footer>
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col logos d-flex justify-content-start">
                    <img src=" img/marca.png " alt="Imagen no disponible ">
                    <img src="img/logoBuap.png " alt="Imagen no disponible ">
                    <img src="img/conta.png" alt="Imagen no disponible">
                    <img src="img/compu.png" alt="Imagen no disponible">
                </div>
                <div class="col redes d-flex justify-content-end align-items-center">
                    <pre id="terminos-condiciones">
                        Transparencia y Acceso a la Información
                            Obligaciones de Transparencia
                                        PDI 2017 - 2021
                                    Derechos reservados
                    </pre>
                    <a href="#" class="icono facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icono instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="icono twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icono correo"><i class="fas fa-at"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script>
		$('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
        $('.input-daterange input').each(function() {
            $(this).datepicker({
                        todayBtn: "linked",
                        keyboardNavigation: false,
                        forceParse: false,
                        calendarWeeks: true,
                        autoclose: true,
                        format: 'dd/mm/yyyy',
                        orientation: "top auto"
                    });
        });
        $('#datepicker').datepicker();
        $('#datepicker').on('changeDate', function() {
            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
        });
        $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true,
            format: 'dd/mm/yyyy',
            orientation: "top auto"
        });
	</script>
</body>

</html>