<?php
    $link = mysqli_connect("192.168.0.19", "root", "1234");
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
    
    <style type="text/css">
        .auto-style1 {
            height: 27px;
        }
    </style>
</head>
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
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        mysqli_data_seek ($result, $i);
                        $extraido= mysqli_fetch_array($result, MYSQLI_ASSOC);
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
                   <option value=0>Genero</option>
                   <?php 

                    $result = mysqli_query($link, "SELECT * FROM generos");
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        mysqli_data_seek ($result, $i);
                        $extraido= mysqli_fetch_array($result, MYSQLI_ASSOC);
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
                   <option value="0">Rango de edad</option>
                   <option value="1">>17</option>
                   <option value="2">18</option>
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
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        mysqli_data_seek ($result, $i);
                        $extraido= mysqli_fetch_array($result, MYSQLI_ASSOC);
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

        <input type="text" placeholder="Nombre de Lista"  name="txtnombrelista">
        
        <div class="butonftr">
                <button name="subirlista"><img src="img/G3.png" alt="x" height="60px" width="60px"/> </button>
        </div>
         
        <div class="butonftr">
            <button type="submit"><img src="img/Examinar.png" alt="x" height="60px" width="60px" onclick="Buscar();"/></button>
        </div>
    </div>
       
         
            <article id="listauser"> <!--Se han encontrado <label id="resulta">xxxx</label> clientes con estas caracteristicas-->
                <fieldset>
                 <legend>Cliente</legend>
                    <br />
                        <section id="tablaus">
                        <?php 


                        $vargenero=0;
                                if(isset($_GET['ComboGenero'])){
                        $vargenero=$_GET['ComboGenero'];
                        ;}

                        if($vargenero==1){
                            $result = mysqli_query($link, "SELECT * FROM ((usuarios 
                            inner JOIN clientes on  usuarios.IdUsuario=clientes.FkUsuario)
                            INNER JOIN generos on clientes.FkGenero=generos.IdGenero)
                            WHERE clientes.FkGenero=1 ;") ;
                        }elseif($vargenero==2){
                            $result = mysqli_query($link, "SELECT * FROM ((usuarios 
                            inner JOIN clientes on  usuarios.IdUsuario=clientes.FkUsuario)
                            INNER JOIN generos on clientes.FkGenero=generos.IdGenero)
                            WHERE clientes.FkGenero=2 ;");
                        }else{
                            $result = mysqli_query($link, "SELECT * FROM ((usuarios 
                            inner JOIN clientes on  usuarios.IdUsuario=clientes.FkUsuario)
                            INNER JOIN generos on clientes.FkGenero=generos.IdGenero);");   
                        }
                        
                        
                        echo "<table><tr><th> IDCliente: </th>";
                        echo "<th> Email: </th>";
                        echo "<th> Nombre:</th> ";
                        echo "<th> Genero:</th> </tr>";
                        

                        $temptotal =0;
                        
                        for ($i = (int)0; $i < $result->num_rows; $i++) 
                        {
                            mysqli_data_seek ($result, $i);

                            $extraido= mysqli_fetch_array($result, MYSQLI_ASSOC);
                            
                                
                            echo "<tr><th> ".$extraido['IdCliente']."</th>";
                                    
                            echo "<th>".$extraido['Email']."</th>";
                                    
                            echo "<th>".$extraido['Nombre']."</th>";
                                    
                            echo "<th>".$extraido['Genero']."</th><tr/>";
                            
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
