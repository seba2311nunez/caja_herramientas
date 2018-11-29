<?php 
header('Access-Control-Allow-Origin: *');
?>
<HTML>
    <head>
    	
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <!-- Meta, title, CSS, favicons, etc. -->
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	    <title>Caja de herramientas</title>
	
	    <!-- Bootstrap -->
	    <!-- <link href="http://54.225.110.0/dashboard_sistema/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	    
	    <link href="http://54.225.110.0/dashboard_sistema/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	    <!-- bootstrap-progressbar -->
	    <link href="http://54.225.110.0/dashboard_sistema/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	    
	    <!--Tabla responsive -->
	    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" />
	    	    
	    <!-- Grafico nuevo GOOGLE -->
	    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>		
		<script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>		
	    <link rel="stylesheet" href="http://54.225.110.0/dashboard_sistema/vendors/morris.js/morris.css">
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/morris.js/morris.min.js"></script>
	  	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
	  	
	  	<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css" />		
		<link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" />
		
		<script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
	  	
        <style>
        	body{
        		background-color: #F7F7F7;
        	}
        	.x_panel{
        		
			    width: 100%;			    
			    padding: 10px 17px;
			    display: inline-block;
			    background: #fff;
			    border: 1px solid #E6E9ED;
			    margin-left: 10px;
			    margin-top: 10px;
			    margin-bottom: 10px;
			    
        	}
        	#tabMedicosAtienden thead tr th{
        		text-align: center;
        	}
        	
        	.search-form .form-group {
			  float: right !important;
			  transition: all 0.35s, border-radius 0s;
			  width: 32px;
			  height: 32px;
			  background-color: #fff;
			  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
			  border-radius: 25px;
			  border: 1px solid #ccc;
			}
			.search-form .form-group input.form-control {
			  padding-right: 20px;
			  border: 0 none;
			  background: transparent;
			  box-shadow: none;
			  display:block;
			}
			.search-form .form-group input.form-control::-webkit-input-placeholder {
			  display: none;
			}
			.search-form .form-group input.form-control:-moz-placeholder {
			  /* Firefox 18- */
			  display: none;
			}
			.search-form .form-group input.form-control::-moz-placeholder {
			  /* Firefox 19+ */
			  display: none;
			}
			.search-form .form-group input.form-control:-ms-input-placeholder {
			  display: none;
			}
			.search-form .form-group:hover,
			.search-form .form-group.hover {
			  width: 100%;
			  border-radius: 4px 25px 25px 4px;
			}
			.search-form .form-group span.form-control-feedback {
			  position: absolute;
			  top: -1px;
			  right: -2px;
			  z-index: 2;
			  display: block;
			  width: 34px;
			  height: 34px;
			  line-height: 34px;
			  text-align: center;
			  color: #3596e0;
			  left: initial;
			  font-size: 14px;
			}
        	.jumbotron{
        		background-color: #337ab7b3;
			    color: #fff;
			    box-shadow: 7px 8px 4px 0px black;
        	}
        </style>
    </head>
    <BODY>    	
        <div class="container-fluid main">   
		    
	    	<div class="row col-md-12 col-lg-12">
	    		<div class="col-md-12 col-lg-12">
	    			<div class="x_panel">
	    				<div class="jumbotron">
	    					<h1>Caja de herramientas</h1>
	    				</div>
	    				<div>
	    					<!--<div class="col-md-4 col-md-offset-3">
					            <form action="" class="search-form">
					                <div class="form-group has-feedback">
					            		<label for="search" class="sr-only">Buscar</label>
					            		<input type="text" class="form-control" name="search" id="search" placeholder="Buscar"> 
					              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
					            	</div>					            	
					            </form>					            
					        </div>	-->				        
	    				</div>
	    				<div>
	    					<a id="btnBuscar" class="btn btn-success"><i class="fas fa-angle-double-right"></i></a>
	    				</div>
	    				<div class="pull-left" style="display: none;">
	    					<input id="inp_fecha_atencion_medicos" type="date" class="form-control" style="border-color: cornflowerblue;"  />    					
	    				</div>
	    				<br>
	    				<table id="tabHerramientas" class="table table-striped table-bordered  nowrap" style="font-size: 12px; ">
	    					<thead>
	    						<tr class="success">
			            			<th>#</th>
			            			<th>Nombre</th>
			            			<th>Creador</th>
			            			<th></th>
			            			<th>Descripcion</th>			            			
			            			<th>Fecha</th>			            								            			
			            		</tr>	    						
	    					</thead>
	    					<tbody>	    						
	    					</tbody>
	    				</table>  
	    			</div>	
	    		</div>	    		
	    	</div>	  
	    	<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		
	    		
          	</div>          	    	
    	</div>
    	
    	
    	<!-- jQuery -->
	    <!-- <script src="http://54.225.110.0/dashboard_sistema/vendors/jquery/dist/jquery.min.js"></script> -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    	
    	<script>    	
    		$(function(){
				
				
				
    			$('[data-toggle="tooltip"]').tooltip(); 
    			
    			$('#search').on('blur',function(){
    				
    				buscar($('#search').val())
    				
    			})
    			
    			$('#btnBuscar').on('click',function(){
    				
    				buscar($('#search').val())
    				
    			})							
    			
    		})
    		
    		function parpadear(){ $('#divNoAutorizadas').fadeIn(600).delay(500).fadeOut(600, parpadear)  }
    		
    		function buscar(valor){
    			
    			$("#tabHerramientas tbody").html("&nbsp;&nbsp;&nbsp;<i class='fa fa-spinner fa-pulse fa-x fa-fw'></i>");
					
				$.getJSON('ajax.php',
			   				{ parametro: "buscar", valor: valor },						       				
			   				function(data){ 
			   					
			   					$("#tabHerramientas tbody").html(""); 
			   					var index = 1;
			   					
			   					for(var i=0; i<=data.length-1 ;i++){
			   									   						
			   						$("#tabHerramientas tbody").append("<tr>"
		   																	+"<td>"+index+"</td>"
														      				+"<td>"+data[i]['nombre']+"</td>"
														      				+"<td>"+data[i]['creador']+"</td>"
														      				+"<td>"
														      					+"<div class='btn-group btn-group-default' >"						                    
																					+"<button style='margin-left: 20%; margin-right: auto;' data-toggle='dropdown' class='btn btn-default dropdown-toggle' style='height: 34px;' type='button'>"
																						+"<i class='fa fa-ellipsis-v' aria-hidden='true'></i>"
																					+"</button>"
																					+"<ul class='dropdown-menu'>"
																						 +"<li>"
																							+"<a href='ver_info.php?id_contenido="+data[i]['id']+"' target='NEW'>"						                     		
																								+"Ver contenido formateado"
																							+"</a>"						                     	
																						 +"</li>"													                     		 
																					+"</ul>"
																				+"</div>"
																			+"</td>"
														      				+"<td>"+data[i]['descripcion']+"</td>"														      				
														      				+"<td>"+data[i]['fechador']+"</td>"						      																	      				
															    		+"</tr>") ;		    		
			   						
			   						index++;
			   						
			   					}//fin for
			   					
			   					$('#tabHerramientas').DataTable({
							   		"searching": false,
							   		"bPaginate": false,
								    "bLengthChange": false,
								    "bFilter": true,
								    "bInfo": false,
								    "bAutoWidth": false,
							        fixedHeader: {
							            header: true
							        }
							        
							    });
			   					
			   				}//fin function data
			   	
			   	);//fin getjson
    		}
    		
    	</script>
    	
    	
	    <!-- Bootstrap -->
	    <!-- <script src="http://54.225.110.0/dashboard_sistema/vendors/bootstrap/dist/js/bootstrap.min.js"></script> -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <!-- FastClick -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/fastclick/lib/fastclick.js"></script>
	    <!-- NProgress -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/nprogress/nprogress.js"></script>
	    <!-- Chart.js -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/Chart.js/dist/Chart.min.js"></script>
	    <!-- gauge.js -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/gauge.js/dist/gauge.min.js"></script>
	    <!-- bootstrap-progressbar -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	    <!-- iCheck -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/iCheck/icheck.min.js"></script>
	    <!-- Skycons -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/skycons/skycons.js"></script>
	    <!-- Flot -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/Flot/jquery.flot.js"></script>
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/Flot/jquery.flot.pie.js"></script>
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/Flot/jquery.flot.time.js"></script>
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/Flot/jquery.flot.stack.js"></script>
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/Flot/jquery.flot.resize.js"></script>
	    <!-- Flot plugins -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/flot.curvedlines/curvedLines.js"></script>
	    <!-- DateJS -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/DateJS/build/date.js"></script>
	    <!-- JQVMap -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/jqvmap/dist/jquery.vmap.js"></script>
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	    <!-- bootstrap-daterangepicker -->
	    <script src="http://54.225.110.0/dashboard_sistema/vendors/moment/min/moment.min.js"></script>
	    
	
	    <!-- Custom Theme Scripts -->
	    <script src="http://54.225.110.0/dashboard_sistema/build/js/custom.min.js"></script>
		
		<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
    	
    	<script src='https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js'></script>
		<script src='https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js'></script> 
    </BODY>
</HTML>