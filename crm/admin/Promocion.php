<?PHP
require 'header.php';
?>

<body>
    <form id="form1" runat="server">
    <div>
    <header>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
        <ul>
            <li>Producto promocional</li>
            <li><a href="../index.php">Filtro de Usuarios</a></li>
            <li class="headerselected"><a href="Promocion.php">Enviar Promocion</a></li>
            <li><a href="Historial.php">Historial de Promociones</a></li>
            
        </ul>
    </header>
    <section>
        <h1>Enviar Promocion</h1>

        <h2>Se han seleccionado <label>XXXX</label> clientes</h2>


        <br />
        <br />
        <br />


        <textarea id="TextArea1" >
           Asunto: Gran oferta
            Estimado Señor(a) $Nombre$ se le acaba de generar una oferta exclusiva para isted por haber consumido $monto$ en $categoria/subcategoria$ en el ultimo periodo.

        </textarea>
        <div class="butonftr1">
            <button type="submit"><img src="../img/cancel.png" alt="x" height="50px" width="50px" />Cancelar Lista</button></div>        

        <div class="butonftr">
            <button type="submit"><img src="../img/submit.png" alt="x" height="50px" width="50px" />Enviar Lista</button></div>
    </section>
        

    </div>
    </form>
</body>

