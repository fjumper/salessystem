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
            <li class="headerselected"><a href="Promocion.php">Enviar Promocion</a></li>
            <li><a href="Historial.php">Historial de Promociones</a></li>
            
        </ul>
    </header>
    <section>
        <h1>Enviar Promocion</h1>
        <div id="selectores">
        <select name="Comboproducto">
            <option value="">Producto</option>
            <?php 

            $result = mysqli_query($link, "SELECT * FROM productosporpromocionar");
            for ($i = 0; $i < $result->num_rows; $i++) {
            mysqli_data_seek ($result, $i);
            $extraido= mysqli_fetch_array($result);
            echo "<option value='".$extraido['idproductoporpormocionar']."'>";
            echo "".$extraido['nombrepromocion']."</option>";
            }
            ?>
        </select>

        <select name="Combolista">
            <option value="">Listas</option>
            <?php 
            
            $result = mysqli_query($link, "SELECT * FROM listaparapromoc");
            $totalclientes=$result ->num_rows;
            for ($i = 0; $i < $result->num_rows; $i++) {
            mysqli_data_seek ($result, $i);
            $extraido= mysqli_fetch_array($result);
            echo "<option value='".$extraido['Idlistausuarios']."'>";
            echo "".$extraido['nombrelista']."</option>";
            }
            ?>
        </select>
        <select name="combomail">
            <option value="">Mail</option>
            <?php 

            $result = mysqli_query($link, "SELECT * FROM mailformato");
            for ($i = 0; $i < $result->num_rows; $i++) {
            mysqli_data_seek ($result, $i);
            $extraido= mysqli_fetch_array($result);
            echo "<option value='".$extraido['idmail']."'>";
            echo "".$extraido['nombremail']."</option>";
            }
            ?>
        </select>
        </div>
        
        <h2>Se han seleccionado  $totalclientes  clientes</h2>



        <br />
        <br />
        <br />


        <textarea id="TextArea1" >
           Asunto: Gran oferta
            Estimado Señor(a) $Nombre$ se le acaba de generar una oferta exclusiva para isted por haber consumido $monto$ en $categoria/subcategoria$ en el ultimo periodo.

        </textarea>
        
        <?php 
            /*
            $varmaili=0;
            if(isset($_GET['combomail'])){
                    $varmaili=$_GET['combomail'];            
                    ;}
            $result = mysqli_query($link, "SELECT * FROM mailformato where idmail=$varmaili");
            mysqli_data_seek ($result, 0);
            $extraido= mysqli_fetch_array($result);
            echo "<textarea id='textarea2'>".$extraido['textomail']."</textarea>";
            }*/
        ?>
            
        <div class="butonftr1">
            <button type="submit"><img src="../img/Submit.png" alt="x" height="50px" width="50px" />Enviar Lista</button></div>        
     
            
            
     </section>
        
            
    </div>
    </form>
</body>

