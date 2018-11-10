<?php 
	if($alerta!=""){
        if($alerta=="cuidado"){
           echo "<div class='alertCuidado'><strong>¡Cuidado!</strong> No debe dejar los campos vacios (*).</div>";
        }
        elseif($alerta=="logrado"){
            echo "<div class='alertLogrado'><strong>¡Accion Realizada!</strong> Por favor cierre este mensaje y actualize la pagina.</div>";
       	}
        else{
            echo"<div class='alertError'><strong>¡Error!</strong> Debe de completar los campos correctamente.</div>";
    	}
	}
?>