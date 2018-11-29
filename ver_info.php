<?php 
include ('conexion.php');
?>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<link href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' rel='stylesheet'>
		<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src="//cdn.ckeditor.com/4.5.10/basic/ckeditor.js"></script>
		<link href="http://54.225.110.0/framework/bootstrap/css/estilo_estandar.css" rel="stylesheet">
		
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-11">
					<div class="x_panel">
						<div class="tituloDiv">Visualizacion</div>
						<textarea id="contenido" class="form-control" style="height: 500px;"></textarea>
						<input type="hidden" id="id_contenido" value="<?=$id_contenido;?>" />
					</div>	
				</div>
			</div>
		</div>
		<script>
			$(function(){
									
				setTimeout(function(){ 
					
					$.getJSON('ajax.php',
				   				{ parametro: "mostrar_un_contenido", id_contenido: $('#id_contenido').val() },						       				
				   				function(data){ 
				   					
				   					//console.log(data[0]['contenido'])
				   					$('#contenido').html(data[0]['contenido']);
				   					//CKEDITOR.instances['contenido'].setData("hola");
				   					//CKEDITOR.replace($('#contenido'));
				   					
				   					/*$('textarea').each(function(){
					
										CKEDITOR.replace(this);						
									});*/			
				   					
				   				}//fin function data
				   	
				   	);//fin getjson
				   	
				}, 1000);				
				
			})
		</script>
	</body>
</html>