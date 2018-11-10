<?php
    include("../conexion/abrir_conexiondb.php");
    include 'plantilla.php';
    $tipo = $_GET['t'];
    $razon = $_GET['r'];
    $desde = $_GET['d'];
    $hasta = $_GET['h'];
    ?>
<?php
   $result = mysqli_query($conexion,"CALL spListarMermaDesmedro('".$tipo."','".$razon."','".$desde."','".$hasta."')");
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    $pdf->SetFont('Arial','B',25);
    $pdf->Cell(200,6,'Listado de Mermas y Desmedros',0,1,'C');
    $pdf->Cell(20,6,'',0,1,'C');

    $pdf->SetTextColor(255,255,255);
    $pdf->SetDrawColor(20,20,20);
    $pdf->SetFillColor(14, 60, 86);
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(20,6,'Codi.',1,0,'C',1);
    $pdf->Cell(19,6,'Tipo',1,0,'C',1);
    $pdf->Cell(40,6,'Producto',1,0,'C',1);
    $pdf->Cell(10,6,'Cant.',1,0,'C',1);
    $pdf->Cell(25,6,'Razon',1,0,'C',1);
    $pdf->Cell(20,6,'Costo',1,0,'C',1);
    $pdf->Cell(28,6,'FechaDeteccion',1,0,'C',1);
    $pdf->Cell(28,6,'FechaRegistro',1,1,'C',1);
    $pdf->SetDrawColor(20,20,20);
    $i=1;
    while ($row = mysqli_fetch_assoc($result)){
        $co=$i%2;
        if($co==0){$pdf->SetFillColor(240,240,240);}
        else{$pdf->SetFillColor(250,250,250);}
        $pdf->SetFont('Arial','',8);
        $pdf->SetTextColor(20,20,20);
        $pdf->Cell(20,6,"MD000".utf8_decode($row['idm']),1,0,'R',1);
        if($row['tip']=='1') {$lblVal='Merma'; $pdf->SetTextColor(124,88,160);}
        else{$lblVal='Desmedro'; $pdf->SetTextColor(112,88,60);}
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(19,6,$lblVal,1,0,'W',1);
        $pdf->SetTextColor(20,20,20);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(40,6,$row['pro'],1,0,'W',1);
        $pdf->Cell(10,6,$row['can'],1,0,'R',1);
        $pdf->Cell(25,6,utf8_decode($row['raz']),1,0,'W',1);
        $pdf->Cell(20,6,utf8_decode($row['com']),1,0,'R',1);
        $pdf->Cell(28,6,utf8_decode($row['feD']),1,0,'R',1);
        $pdf->Cell(28,6,utf8_decode($row['feR']),1,1,'R',1);
        $i++;
    }
    $pdf->SetTextColor(20,20,20);
    $pdf->Output();
?>