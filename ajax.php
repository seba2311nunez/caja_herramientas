<?php 
include ('conexion.php');

switch ($parametro) {
	
	case 'buscar':
			
			$sql="SELECT id, nombre, creador, descripcion, contenido, DATE_FORMAT(fechador,'%d-%m-%Y %H:%i') AS fechador 
					FROM herramientas 
						WHERE nombre LIKE '%$valor%'
							OR descripcion LIKE '%$valor%'
							OR contenido LIKE '%$valor%' ";							
			
			$result=mysql_query($sql) or die(mysql_error()."<br>".$sql);
			
			while ($row = mysql_fetch_assoc($result)) {
				
			    $json[] = array(
			        		'id' => $row['id'],
			        		'nombre' => $row['nombre'],					        		
			        		'creador' => $row['creador'],
			        		'descripcion' => $row['descripcion'],
			        		'contenido' => $row['contenido'],			        		
			        		'fechador' => $row['fechador']
			        		       
			      );
			}
			
			echo json_encode($json);
			
			
		break;
		
	case 'mostrar_un_contenido':
			
			$sql="SELECT id, nombre, creador, descripcion, contenido, DATE_FORMAT(fechador,'%d-%m-%Y %H:%i') AS fechador 
					FROM herramientas 
						WHERE id=$id_contenido ";							
			
			$result=mysql_query($sql) or die(mysql_error()."<br>".$sql);
			
			while ($row = mysql_fetch_assoc($result)) {
				
			    $json[] = array(
			        		
			        		'contenido' => $row['contenido']			        		
			        		
			        		       
			      );
			}
			
			echo json_encode($json);
			
			
		break;	
	
	default:
		
		break;
}

?>