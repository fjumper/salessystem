<?php
$fecha=getdate(); $fecha=($fecha['mday']-1)."-".$fecha['mon']."-".$fecha['year']; 
    require '../CSS/fpdf.php';
    class PDF extends FPDF
    {
        function Head(){
            ?><head><title>Reporte Inventario</title>
                <meta name='theme-color' content='#A10202'><link rel='icon' sizes='64x64' type='imagen/ico' href='../../IMG/favicon.ico'></head>"<?php
        }
        function Header()
        {
            $this->Image('../IMG/logo.png', 10, 5, 15 );
            $this->Cell(30,6,'',0,0,'C');
            $this->SetFont('Arial','I',8);
            $this->Cell(160,6,date('d/m/Y'),0,1,'R');
            $this->SetFont('Arial','',10);
            $this->Ln(10);
        }
        
        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I', 8);
            $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
        }       
    }
?>