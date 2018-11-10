<?PHP
require 'header.php';
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
            <select>
                <option>Categoria</option>
            </select>
            <br />
            <br />
            <select>
                <option>Sub Categoria</option>
            </select>
            <br />
        </div>
        
        <div class="butonftr">
            <button type="reset"><img src="../img/Clear.png" alt="x" height="50px" width="50px" />Limpiar Lista</button></div>


        <div><table style="width:100%">
                <tr>
                    <th class="auto-style1">ID Promocion</th>
                    <th class="auto-style1">Fecha Inicio</th> 
                    <th class="auto-style1">Fecha Final</th> 
                    <th class="auto-style1">Stock Inicial</th>
                    <th class="auto-style1">Stock Restante</th>
                    <th class="auto-style1">Categoria</th>
                    <th class="auto-style1">Producto Ofertado</th>
                </tr>
                
            </table></div>
    </section>
    </div>
    </form>
</body>

