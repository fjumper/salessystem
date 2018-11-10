<?php
    include("../conexion/abrir_conexiondb.php");
    include 'plantilla.php';
    $estado = $_GET['e'];
    $tienda = $_GET['t'];
    ?>
<?php
   $result = mysqli_query($conexion,"CALL spListarRemisionTraslado('".$estado."','".$tienda."','2')");
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    $pdf->SetFont('Arial','B',25);
    $pdf->Cell(200,6,'Listado de Guia de Remision Traslados',0,1,'C');
    $pdf->Cell(20,6,'',0,1,'C');

    $pdf->SetTextColor(255,255,255);
    $pdf->SetDrawColor(20,20,20);
    $pdf->SetFillColor(14, 60, 86);
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(20,6,'G.Remision',1,0,'C',1);
    $pdf->Cell(30,6,'IniTraslado',1,0,'C',1);
    $pdf->Cell(30,6,'FinTraslado',1,0,'C',1);
    $pdf->Cell(75,6,'TiendaDestino',1,0,'C',1);
    $pdf->Cell(35,6,'Estado',1,1,'C',1);
    $pdf->SetDrawColor(20,20,20);
    $i=1;
    while ($row = mysqli_fetch_assoc($result)){
        $co=$i%2;
        if($co==0){$pdf->SetFillColor(240,240,240);}
        else{$pdf->SetFillColor(250,250,250);}
        $pdf->SetFont('Arial','',8);
        $pdf->SetTextColor(20,20,20);
        $pdf->Cell(20,6,"T00".utf8_decode($row['id']),1,0,'R',1);
        $pdf->Cell(30,6,utf8_decode($row['ini']),1,0,'R',1);
        $pdf->Cell(30,6,utf8_decode($row['fin']),1,0,'R',1);
        $pdf->Cell(75,6,utf8_decode($row['tie']),1,0,'W',1);
        if($row['est']=='1') {$lblVal='Entregado'; $pdf->SetTextColor(72,165,56);}
        elseif($row['est']=='2') {$lblVal='Parcialmente Entregado';$pdf->SetTextColor(252,162,71);}
        elseif($row['est']=='3') {$lblVal='Por Entregar';$pdf->SetTextColor( 227, 196, 90);}
        elseif($row['est']=='4') {$lblVal='Rechazado';$pdf->SetTextColor(252,71,71);}
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(35,6,$lblVal,1,1,'W',1);
        $i++;
    }
    $pdf->SetTextColor(20,20,20);
    $pdf->Output();
?>