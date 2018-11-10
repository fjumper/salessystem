<?PHP
 $link = mysqli_connect("db4free.net", "ahuanay", "ahuanay1995");

 mysqli_select_db($link, "dbventas");

 $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="css/estilos.css" rel="stylesheet" />
    <form action="conec.php" method="post"></form>
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <style type="text/css">
        .auto-style1 {
            height: 27px;
        }
    </style>
</head>
<script>
 function foo () {
      $.ajax({
          
        $linea = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        url:"test.php", //the page containing php script
        type: "POST", //request type
        data:   {
                'myText':$linea,
                }
        success:function(result){
         alert(result);
       }
     });
 }
</script>
<body>
    <form id="form1" runat="server">
    <div>

    <header>
        <ul>
            <li>Producto promocional</li>
            <li class="headerselected"><a href="index.php">Filtro de Usuarios</a></li>
            <li><a href="admin/Promocion.php">Enviar Promocion</a></li>
            <li><a href="admin/Historial.php">Historial de Promociones</a></li>
            
        </ul>
    </header>
    <section id="contieneifltro">
        <h1>Filtrar Usuarios</h1>
        <div action="conect.php">
        <fieldset  class="filtro" >
            <legend>Por Compra Tal</legend>
                <SELECT Name="categoria">
                <option value=" ">Categoria</option>
                <?php 

                    $result = mysqli_query($link, "SELECT * FROM categorias");
                    for ($i = 1; $i <= $result->num_rows; $i++) {
                        mysqli_data_seek ($result, i);
                        $extraido= mysqli_fetch_array($result);
                        echo "<option value='".$extraido['IdCategoria']."'>";
                        echo "".$extraido['Categoria']."</option>";
                    }


                ?>
                </SELECT>
                <br/><br/>

                <SELECT Name="Combo2">
                    <option value="SCategoria">Sub Categoria</option>
                </SELECT><br/><br/>

                <label form="MontoCat">Monto por Categoría:</label><br/>
                <input type="text" placeholder="S/.00.00" name="MontoCat">
        </fieldset></div>

        <fieldset id="filtro">
            <legend>Cliente</legend>
              
               <select name="ComboGenero">
                   <option>Genero</option>
                   <?php 

                    $result = mysqli_query($link, "SELECT * FROM generos");
                    for ($i = 1; $i <= $result->num_rows; $i++) {
                        mysqli_data_seek ($result, i);
                        $extraido= mysqli_fetch_array($result);
                        echo "<option value='".$extraido['IdGenero']."'>";
                        echo "".$extraido['Genero']."</option>";
                    }


                ?>
               </select>

                <select name="Combo4">
                   <option>Método de Pago</option>
                   <option>Efectivo</option>
                   <option>Targeta</option>
               </select>

                 <select name="Combo5">
                   <option>Rango de edad</option>
                   <option>>17</option>
                   <option>18</option>
               </select><br/>

                 <select name="Combo6">
                   <option>Lista de deseos</option>
               </select><br/>

               <select name="Combo7">
                   <option  value=" ">Estado Civil</option>
                   <option>Solter@</option>
                   <option>Viud@</option>
                   <option>Casad@</option>
                   <option>Divorciad@</option>
               </select>

               <fieldset>
                   <legend>Dinero en su Cuenta</legend>
                   <label form="MinMax">Min:</label>
                   <label form="Max">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max:</label>
                <br/><input type="text" placeholder="S/.00.00" name="Min">
                <input type="text" placeholder="S/.00.00" name="Max">
               </fieldset>

               <fieldset>
                   <legend>Compras Totales</legend>
                   <input type="text" placeholder="S/.00.00"  name="CompTotales">
               </fieldset>

        </fieldset>
        


        <fieldset>
            <legend>Ubigeo</legend>
            <select name="Combo8">
                <option>Departamento</option>
                <?php 

                    $result = mysqli_query($link, "SELECT * FROM departamentos");
                    for ($i = 1; $i <= $result->num_rows; $i++) {
                        mysqli_data_seek ($result, i);
                        $extraido= mysqli_fetch_array($result);
                        echo "<option value='".$extraido['IdDepartamentos']."'>";
                        echo "".$extraido['Departamento']."</option>";
                    }


                ?>
            </select><br/>

            <select name="Combo9">
                <option value=" " >Provincia</option>
            </select><br/>

            <select name="Combo10">
                <option value=" ">Distrito</option>
            </select><br/>
        </fieldset>


    <div id="botones">
        <div class="butonftr">
            <button type="submit"><img src="img/Examinar.png" alt="x" height="60px" width="60px" onclick="Buscar();"/></button>
        </div>
        <div class="butonftr">
        <button type="button" onclick="savet()">Save Txt</button>
        </div>
            
        <div class="butonftr">
                <button ><img src="img/OPEN.png" alt="x" height="60px" width="60px"  /> </button>
        </div>
        <div class="butonftr">
                <button><img src="img/Clear.png" alt="x" height="60px" width="60px" /> </button>
        </div>

        <div class="butonftr">
                    <button><img src="img/submit.png" alt="x" height="60px" width="60px"  /> </button>
        </div>
    </div>
       
         
        
            <article id="listauser"> <!--Se han encontrado <label id="resulta">xxxx</label> clientes con estas caracteristicas-->
                <fieldset>
                 <legend>Cliente</legend>
                    <br />
                        <section id="tablaus">
                        <?php 

                        $result = mysqli_query($link, "SELECT * FROM ((usuarios 
                        inner JOIN clientes on  usuarios.IdUsuario=clientes.FkUsuario)
                        INNER JOIN generos on clientes.FkGenero=generos.IdGenero);");
                        
                        echo "<table><tr><th> IDCliente: </th>";
                        echo "<th> Email: </th>";
                        echo "<th> Nombre:</th> ";
                        echo "<th> Genero:</th> </tr>";
                        $vargenero=$_GET['ComboGenero'];
                        $temptotal =0;
                        for ($i = 1; $i <= $result->num_rows; $i++) {
                            mysqli_data_seek ($result, i);
                            $extraido= mysqli_fetch_array($result);
                             if($vargenero==1 ||$vargenero==2)
                            {
                                if ($extraido['IdGenero']==$_GET['ComboGenero'])
                                {
                                    echo "<tr><th> ".$extraido['IdCliente']."</th>";
                                    
                                    echo "<th>".$extraido['Email']."</th>";
                                    
                                    echo "<th>".$extraido['Nombre']."</th>";
                                    
                                    echo "<th>".$extraido['Genero']."</th><tr/>";
                                    $temptotal++;
                                }
                            }else{
                                echo "<tr><th> ".$extraido['IdCliente']."</th>";
                                    
                                    echo "<th>".$extraido['Email']."</th>";
                                    
                                    echo "<th>".$extraido['Nombre']."</th>";
                                    
                                    echo "<th>".$extraido['Genero']."</th><tr/>";
                                    $temptotal++;
                            }
                        }
                        echo "Se han encontrado <label id='resulta'>".$temptotal."</label> clientes con estas caracteristicas";
                        ?>
                        </section>
                    <br />
                </fieldset>
            </article>
            
        </section>
      </div>
      
    </form>
        
                
</body>
</html>
