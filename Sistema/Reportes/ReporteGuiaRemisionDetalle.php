<?php
    $guia = $_GET['g'];
    include 'plantilla.php';
    include("../CONEXION/abrir_conexiondb.php");
    $result = mysqli_query($conexion,"CALL spListarRemisionDetalle('".$guia."')");
    include("../CONEXION/cerrar_conexiondb.php");
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetFont('Arial','B',25);
    $pdf->Cell(200,6,'Detalle de la Guia de Remision',0,1,'C');
    $pdf->SetFont('Arial','I',17);
    $pdf->Cell(200,10,'Nro: T000'.utf8_decode($guia),0,1,'C');
    $pdf->Cell(20,6,'',0,1,'C');

    $pdf->SetFillColor(14, 60, 86);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(29,6,'Cod.',1,0,'C',1);
    $pdf->Cell(29,6,'Lote',1,0,'C',1);
    $pdf->Cell(80,6,'Descripcion',1,0,'C',1);
    $pdf->Cell(35,6,'Serial',1,0,'C',1);
    $pdf->Cell(15,6,'Canti.',1,1,'C',1);


    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->SetTextColor(20,20,20);
    $i=1;
    while ($row = mysqli_fetch_assoc($result)){
        $co=$i%2;
        if($co==0){$pdf->SetFillColor(240,240,240);}
        else{$pdf->SetFillColor(250,250,250);}
        $pdf->Cell(29,6,utf8_decode($row['cob']),1,0,'R',1);
        $pdf->Cell(29,6,utf8_decode($row['cod']),1,0,'R',1);
        $pdf->Cell(80,6,utf8_decode($row['pro']),1,0,'W',1);
        $pdf->Cell(35,6,utf8_decode($row['ser']),1,0,'W',1);
        $pdf->Cell(15,6,utf8_decode($row['cant']),1,1,'R',1);
        $i++;
    }
    $pdf->Output();
?>