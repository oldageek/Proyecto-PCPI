<?php
session_start();
require('../FPDF/fpdf.php');
require ('../admin/config.php');
require ('../functions.php');

class PDF extends FPDF {
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../img/logo_pdf.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',12);
        // Move to the right
        $this->Cell(130);
        // Title
        $this->Cell(60,10,'Reporte de libros',0,0,'C');
        // Line break
        $this->Ln(20);
        //Encabezado de tabla
        $this -> Cell(20,10, 'ISBN' ,1,0,'C',0);
        $this -> Cell(47,10, 'Titulo' ,1,0,'C',0);
        $this -> Cell(15,10,utf8_decode('Creación'),1,0,'C',0);
        $this -> Cell(8,10,'Vol.',1,0,'C',0);
        $this -> Cell(8,10,'Tom.',1,0,'C',0);
        $this -> Cell(15,10,'Ed.',1,0,'C',0);
        $this -> Cell(20,10,'Edit.',1,0,'C',0);
        $this -> Cell(10,10,'Pag.',1,0,'C',0);
        $this -> Cell(12,10,'Financiamiento',1,0,'C',0);
        $this -> Cell(15,10,'Financiado',1,0,'C',0);
        $this -> Cell(25,10,'Estatus',1,0,'C',0);
        $this -> Cell(25,10,'Idioma',1,0,'C',0);
        $this -> Cell(18,10,'Pal. 1',1,0,'C',0);
        $this -> Cell(18,10,'Pal. 2',1,0,'C',0);
        $this -> Cell(18,10,'Pal. 3',1,0,'C',0);
        $this -> Cell(35,10,'Area',1,0,'C',0);
        $this -> Cell(30,10,'Subarea',1,0,'C',0);
        $this -> Cell(30,10,'Conacyt',1,0,'C',0);
        $this -> Cell(30,10,'Autores',1,1,'C',0);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: ../error.php');
}

$resultado = $conexion->query('SELECT * FROM libros WHERE idInvestigadorLibro = '.$_SESSION['id']);
// print_r($resultado);
// die();

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf -> AddPage('L', 'Legal', 0);
$pdf -> SetFont('Arial','',12);

while($row = $resultado -> fetch_assoc()){
    $pdf -> Cell(20,10,$row['isbn'],1,0,'C',0);
    $pdf -> Cell(47,10,$row['titulo'],1,0,'C',0);
    $pdf -> Cell(15,10,$row['anioCreacion'],1,0,'C',0);
    $pdf -> Cell(8,10,$row['volumen'],1,0,'C',0);
    $pdf -> Cell(8,10,$row['tomo'],1,0,'C',0);
    $pdf -> Cell(15,10,$row['edicion'],1,0,'C',0);
    $pdf -> Cell(20,10,$row['editorial'],1,0,'C',0);
    $pdf -> Cell(10,10,$row['numPaginas'],1,0,'C',0);
    $pdf -> Cell(12,10,$row['financiamiento'],1,0,'C',0);
    $pdf -> Cell(15,10,$row['importeFinanciado'],1,0,'C',0);
    $pdf -> Cell(25,10,$row['estatus'],1,0,'C',0);
    $pdf -> Cell(25,10,$row['idioma'],1,0,'C',0);
    $pdf -> Cell(18,10,$row['palabraClave1'],1,0,'C',0);
    $pdf -> Cell(18,10,$row['palabraClave2'],1,0,'C',0);
    $pdf -> Cell(18,10,$row['palabraClave3'],1,0,'C',0);
    $pdf -> Cell(35,10,$row['area'],1,0,'C',0);
    $pdf -> Cell(30,10,$row['subArea'],1,0,'C',0);
    $pdf -> Cell(30,10,$row['apoyoConacyt'],1,0,'C',0);
    $pdf -> Cell(30,10,$row['Autores'],1,1,'C',0);
}

$pdf->Output();
?>