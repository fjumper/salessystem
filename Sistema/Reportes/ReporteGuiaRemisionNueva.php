<?php
    include("../CONEXION/abrir_conexiondb.php");
    $totGuias = mysqli_query($conexion, "CALL spTotalGuias()");
    include("../CONEXION/cerrar_conexiondb.php");
    $tg = mysqli_fetch_assoc($totGuias);
    $guia=$tg['tot'];
    include 'plantilla.php';?>
<?php

    include("../CONEXION/abrir_conexiondb.php");
    $result = mysqli_query($conexion,"CALL spImprimirRemisionTraslado('".$guia."')");
    include("../CONEXION/cerrar_conexiondb.php");
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetFont('Arial','B',25);
    $pdf->Cell(200,6,'Guia de Remision Traslados',0,1,'C');
    $pdf->Cell(20,6,'',0,1,'C');

    $pdf->SetFont('Arial','B',19);
    $pdf->SetDrawColor(20,20,20);
    $pdf->Cell(110,6,'Empresa DeTodo SAC',0,0,'C');
    $pdf->SetFont('Arial','B',17);
    $pdf->Cell(80,8,'RUC: 10259874562',1,1,'C');   
    $pdf->SetFont('Arial','I',10);
    $pdf->SetTextColor(140,140,140);
    $pdf->Cell(110,6,'venta de todo tipo de cosas',0,0,'C');
    $pdf->SetFont('Arial','B',17);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetDrawColor(14, 60, 86);
    $pdf->SetFillColor(14, 60, 86);
    $pdf->Cell(80,8,'GUIA REMISION',1,1,'C',1);
    $pdf->Cell(110,6,'',0,0,'C');
    $pdf->Cell(80,8,'REMITENTE',1,1,'C',1);
    $pdf->SetDrawColor(20,20,20);
    while ($row = mysqli_fetch_assoc($result)){
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40,7,"Fecha emision:",0,0,'W');
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(70,7,date('d/m/Y'),0,0,'W');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(80,6,"Nro 001 - 000000".utf8_decode($row['id']),1,1,'C');
        include("../CONEXION/abrir_conexiondb.php");
        $result2 = mysqli_query($conexion,"CALL spNombreTienda('".$row['sal']."')");
        include("../CONEXION/cerrar_conexiondb.php");
        $row2 = mysqli_fetch_assoc($result2);
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40,15,"Punto de partida:",0,0,'W');
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(65,15,utf8_decode($row2['nom']),0,0,'W');
        include("../CONEXION/abrir_conexiondb.php");
        $result3 = mysqli_query($conexion,"CALL spNombreTienda('".$row['des']."')");
        include("../CONEXION/cerrar_conexiondb.php");
        $row3 = mysqli_fetch_assoc($result3);
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40,15,"Punto de llegada:",0,0,'W');
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(75,15,utf8_decode($row3['nom']),0,1,'W');
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40,0,"Direccion de partida:",0,0,'W');
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(65,0,utf8_decode($row2['dir']),0,0,'W');
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40,0,"Direccion de llegada:",0,0,'W');
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(65,0,utf8_decode($row3['dir']),0,1,'W');
    }

    $pdf->Cell(20,6,"",0,1,'C');

    $pdf->SetFillColor(14, 60, 86);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(30,6,'Cod.',1,0,'C',1);
    $pdf->Cell(105,6,'Descripcion',1,0,'C',1);
    $pdf->Cell(40,6,'Serial',1,0,'C',1);
    $pdf->Cell(15,6,'Canti.',1,1,'C',1);


    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->SetTextColor(20,20,20);
    include("../CONEXION/abrir_conexiondb.php");
    $result4 = mysqli_query($conexion,"CALL spDetalleGuiaTraslado('".$guia."')");
    include("../CONEXION/cerrar_conexiondb.php");
    $i=1;
    while ($row4 = mysqli_fetch_assoc($result4)){
        $co=$i%2;
        if($co==0){$pdf->SetFillColor(240,240,240);}
        else{$pdf->SetFillColor(250,250,250);}
        $pdf->Cell(30,6,utf8_decode($row4['cod']),1,0,'R',1);
        $pdf->Cell(105,6,utf8_decode($row4['nom']),1,0,'W',1);
        $pdf->Cell(40,6,utf8_decode($row4['nom']),1,0,'W',1);
        $pdf->Cell(15,6,utf8_decode($row4['can']),1,1,'R',1);
        $i++;
    }
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20,6,"",0,1,'C');
    $pdf->Cell(15,6,"Motivo:",0,0,'W');
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(35,6,"Traslado",0,0,'W');
    $pdf->Cell(20,6,"",0,1,'C');
    $pdf->Cell(20,6,"",0,1,'C');
    $pdf->Cell(20,6,"",0,1,'C');
    $pdf->Cell(20,6,"",0,1,'C');
    $pdf->SetFont('Arial','B',11);
    $pdf->Cell(65,6,'',0,0,'C');
    $pdf->Cell(60,20,'',1,1,'C');
    $pdf->Cell(190,6,'Recibi Conforme',0,0,'C');
    $pdf->Output();
?>