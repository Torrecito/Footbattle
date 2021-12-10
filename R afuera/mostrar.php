<?php 
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM locales";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado-> fetch_array ()) {
	    $Local = $row['Local'];
	    $Ubicacion = $row['Ubicacion'];
	    $Numero = $row['Numero'];
	    $Nombre = $row['Nombre'];
	    ?>
        <div>
        	<h2><?php echo $Nombre; ?></h2>
        	<div>
        		<p>
				
        			<a href=""><b>Local: </b> <?php $Local ?><br></a>
        		    <a href="Mapa.html"><b>Ubicacion: </b> <?php $Ubicacion ?><br></a>
        		    <a href=""><b>Numero: </b> <?php $Numero ?><br></a>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?> 
