<?php 
 /*
	Crear un array con el contenido de la tala
	ACCION AVENTURA DEPORTE
	GTA		MARIO	FIFA
	COD 	GOW		FIFA 2019
	PUG     DRAGON	PES



 */
 $tabla = array(
 	"ACCION" => array('GTA','COD','PUG'),
 	"AVENTURA" => array('MARIO','GOW','DRAGON'),
 	"DEPORTE" => array('FIFA','FIFA 2019','PES')
 );
 crearTabla($tabla);
 function crearTabla($tabla){
 	?>
 			<table border="1">
 				<thead>
 					<tr>
	 					<?php foreach ($tabla as $key => $value) {
	 						echo "<th>$key</th>";
	 					} ?>	
 					</tr>			
 				</thead>
 				<tbody>
 					<?php for($i=0;$i<count($tabla);$i++) {
 						    echo "<tr>"; 
 						    							
 							 echo "<td>";

 							 	echo $tabla['ACCION'][$i];
 							 echo "</td>";
 							  
 							 echo "<td>";
 							 	echo $tabla['AVENTURA'][$i];
 							 echo "</td>";

 							 echo "<td>";
 							 	  echo $tabla['DEPORTE'][$i];
 							 echo "</td>";
 							 
 							echo "<tr>";					
													
 						
 					} ?>
 				</tbody>
 			</table>
 		
	<?php
 	}
 
?>