<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(0,10,'MS-009',0,0,'R');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,2,utf8_decode('REPÚBLICA BOLIVARIANA DE VENEZUELA'), 0, 1,'C', false);
$pdf->Ln(4);
$pdf->Cell(0,2,utf8_decode('UNIVERSIDAD NACIONAL EXPERIMENTAL "RÓMULO GALLEGOS"'),0,1,'C', false);
$pdf->Ln(4);
$pdf->Cell(0,2,utf8_decode('COSECAIS'),0,1,'C', false);
$pdf->Ln(15);
$pdf->Cell(0,2,utf8_decode('CONSTANCIA DE CULMACIÓN DEL SERVICIO COMUNITARIO'),0,1,'C', false);
$pdf->Ln(6);
$pdf->SetFont('Arial','',12);
$pdf->Write(8,utf8_decode ('        Se hace constar por medio de la presente que el (la) Bachiller: _________________________
_______________________________, titular de la Cédula de Identidad N° __________________,
estudiante del Área de Ingeniería de Sistemas, CULMINÓ las actividades inberentos a la presentac-
ión del Servicio Comunitario según lo establecido en la LEY DE SERVICIO COMUNITARIO DEL 
ESTUDIANTE DE EDUCACIÓN SUPERIOR y sus REGLAMENTOS, a través de la ejecución del 
Proyecto: _______________________________________________________________________
en la(s) Comunidad(es) o Institución: _________________________________________________,
con el apoyo del(a) Tutor(a) Académico(a): ____________________________________________
Constancia que se expide a petición interesada en ______________________________________; 
a los __________ diás del mes de __________ del año __________.




_________________________                                                               _______________________
      Tutor(a) Académico(a)                                                                          Decano(a) Área Sistemas 
                                                 

                                                          ________________________  
                                                          Coordinador(a) de COSECAIS
         
        
        
              Año ________________  Folio _______________   Número _____________'));

$pdf->Output();

//$pdf->SetFont('Arial','',12);
//$pdf->Cell(0,2,utf8_decode('Se hace constar por medio de la presente que el (la) Bachiller:'),0,1,'L', false);
//$pdf->Ln(4);
//$pdf->Line(2, 76, 76, 76);
//$pdf->Cell(0,2,utf8_decode(', titular de la Cédula de Identidad N°'),0,1,'C', false);
//$pdf->Ln(4);
//$pdf->write(5, 'hola como estan hola hola que tal todo q mas hola
//hola hola bonito dia para todos feliz y bendecido domingo
//hola gente hoy es un dia hermoso a darle las gracias a DIOS nuestro
//creador saludos a todos sintoniza la radio           hola');


?>