<?PHP
require 'header.php';
$link = mysqli_connect("192.168.0.19", "root", "1234");
    mysqli_select_db($link, "dbventas");    
    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
?>

<body>
    <form id="form1" runat="server">
    <div>
    <header>
        <ul>
            <li>Producto promocional</li>
            <li><a href="../index.php">Filtro de Usuarios</a></li>
            <li><a href="Promocion.php">Enviar Promocion</a></li>
            <li class="headerselected"><a href="Historial.php">Historial de Promociones</a></li>
        </ul>
    </header>
    <section>
        <h1>Historial de Promociones</h1>
         <div class="filtro" > Por producto <br />
         <SELECT Name="histcategoria">
                <option value="-1">Categoria</option>
                <?php 

                    $result = mysqli_query($link, "SELECT * FROM categorias");
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        mysqli_data_seek ($result, $i);
                        $extraido= mysqli_fetch_array($result, MYSQLI_ASSOC);
                        echo "<option value='".$extraido['IdCategoria']."'>";
                        echo "".$extraido['Categoria']."</option>";
                    }


                ?>
                </SELECT>
            <br />
            <br />
            <select>
                <option>Sub Categoria</option>
            </select>
            <br />
        </div>
        
        <div class="butonftr">
            <button type="submit"><img src="../img/Examinar.png" alt="x" height="50px" width="50px" />Buscar</button></div>


        <div><table style="width:100%">
               
        
            <?php 
            $varcateg=0;
            if(isset($_GET['histcategoria'])){
                        $varcateg=$_GET['histcategoria'];            
                        ;}
             if($varcateg>0){
                $result = mysqli_query($link, 
                "SELECT idpromocion, promociones.FechaHoraInicio, promociones.FechaHoraFin, 
                promociones.StockTotal,promociones.StockFinal,productos.Producto, sub_categorias.SubCategoria,categorias.Categoria              FROM (promociones 
                INNER JOIN productos_venta on promociones.FkProductoVenta=productos_venta.IdProductoVenta )
                INNER JOIN productos on productos.IdProducto=productos_venta.FkProducto
                inner JOIN sub_categorias on productos.FkSubCategoria=sub_categorias.IdSubCategoria
                inner join categorias on sub_categorias.FkCategoria=categorias.IdCategoria where categorias.IdCategoria=$varcateg ");

             }  else{
                $result = mysqli_query($link, 
                "SELECT idpromocion, promociones.FechaHoraInicio, promociones.FechaHoraFin, 
                promociones.StockTotal,promociones.StockFinal,productos.Producto, sub_categorias.SubCategoria,categorias.Categoria              FROM (promociones 
                INNER JOIN productos_venta on promociones.FkProductoVenta=productos_venta.IdProductoVenta )
                INNER JOIN productos on productos.IdProducto=productos_venta.FkProducto
                inner JOIN sub_categorias on productos.FkSubCategoria=sub_categorias.IdSubCategoria
                inner join categorias on sub_categorias.FkCategoria=categorias.IdCategoria ");
             }
                
                       
                        
                        
                        echo "<table><tr><th> ID Promocion: </th>";
                        echo "<th> Nombre  : </th>";
                        echo "<th> Stock Inicial:</th> ";
                        echo "<th> Stock Final:</th>";
                        echo "<th> Categoria  : </th>";
                        echo "<th> Subcategoria  : </th>";
                        echo "<th> Fecha de Inicio: </th>";
                        echo "<th> Fecha de Fin: </th>";
                        
                        

                        $temptotal =0;
                        
                        for ($i = (int)0; $i < $result->num_rows; $i++) 
                        {
                            mysqli_data_seek ($result, $i);

                            $extraido= mysqli_fetch_array($result, MYSQLI_ASSOC);
                            
                                
                            echo "<tr><th> ".$extraido['idpromocion']."</th>";       
                            echo "<th>".$extraido['Producto']."</th>";
                            echo "<th>".$extraido['StockTotal']."</th>";
                            echo "<th>".$extraido['StockFinal']."</th>"; 
                            echo "<th>".$extraido['SubCategoria']."</th>";
                            echo "<th>".$extraido['Categoria']."</th>";        
                            echo "<th>".$extraido['FechaHoraInicio']."</th>";        
                            echo "<th>".$extraido['FechaHoraFin']."</th><tr/>";
                            
                        }
                                                
                        
                        
                        ?>
                                    
  
            </table></div>
    </section>
    </div>
    </form>
</body>

