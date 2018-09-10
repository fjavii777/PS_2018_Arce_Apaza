<?php
include "../../Modelo/modelo_mesa.php";
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>prueba</title>
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<style>
.alert {
	display: none;
	font-size: 12px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	padding: 10px;
}

.alert-danger, .alert-info {
	
}

.errores {
	-webkit-boxshadow: 0 0 10px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	-o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	background: blue;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	color: #fff;
	display: none;
	font-size: 12px;
	margin-top: -50px;
	margin-left: 200px;
	padding: 10px;
	position: absolute;
}
</style>

<script src="js/jquery-1.11.3.min.js"></script>

<script>
	//validar nombre
	var expr3 = /^[a-zA-Z]+$/;
	//Expresión para validar un correo electrónico
    var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    //Expresión para validar edad de 18 a 60 años
    var expr2 =/^([0-9]|[A-Z]|[a-z]){2}$/;
    
    var expr4= /^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/;
	$(document).ready(function() {
		
		$('#comprobar').click(function(event) {
			$("#msgNom").fadeOut();
			$("#msgApe").fadeOut();
			$("#msgEdad").fadeOut();
			$("#msgEma").fadeOut();
			$("#msgNick").fadeOut();
			$("#msgPass").fadeOut();
			$("#msgPass2").fadeOut();
			$("#respuesta").fadeOut();
			$("#msgNick2").fadeOut();
			var nickVar = $('#nick').val();
			 if(nickVar.trim() == "" ){
                 $("#msgNick").fadeIn("slow");
                 return false;
             }
             else{
            	 $("#msgNick2").fadeOut();
            	 $.post('comprobarUser', {
						nick: nickVar
					}, function(responseText) {
						$("#msgNick2").fadeIn("slow");
						$('#msgNick2').html(responseText);
					});
            	 
                 }
			
		});//click
		 
		$('#bot').click(function(event) {
			$("#msgNom").fadeOut();
			
			var nombreVar = $('#MesaNum').val();
			
			 // --- Condicionales anidados ----
            //Si nombre está vacío
            //Muestra el mensaje
            //Con false sale de los if's y espera a que sea pulsado de nuevo el botón de enviar
            if(nombreVar.trim() == "" || !expr2.test(nombreVar)){
                $("#msgNom").fadeIn("slow");
                return false;
            }
            //en otro caso, el mensaje no se muestra
            else{
                $("#msgNom").fadeOut();

                //Si correo está vacío y la expresión NO corresponde -test es función de JQuery
                //Muestra el mensaje
                //Con false sale de los if's y espera a que sea pulsado de nuevo el botón de enviar
                if(apellidoVar.trim() == ""){
                    $("#msgApe").fadeIn("slow");
                    return false;
                }
                else{
                    $("#msgApe").fadeOut();

                    if(edadVar.trim() == "" || !expr4.test(edadVar)){
                        $("#msgEdad").fadeIn("slow");
                        return false;
                    }
                    else{
                        $("#msgEdad").fadeOut();

                        if(emailVar.trim() == "" || !expr.test(emailVar)){
                            $("#msgEma").fadeIn("slow");
                            return false;
                        }else{
                        	$("#msgEma").fadeOut();
                        	
                        	if(nickVar.trim() == ""){
                        		$("#msgNick").fadeIn("slow");
                        		return false;
                        	}else{
                        		$("#msgNick").fadeOut();
                        		if(passVar.trim() == ""){
                        			$("#msgPass").fadeIn("slow");
                        			return false;
                        		}else{
                        			$("#msgPass").fadeOut();
                        			if(rpassVar != passVar){
                            			$("#msgPass2").fadeIn("slow");
                            			return false;
                            		}else{
                            			$("#msgPass2").fadeOut();
                        			// Si en vez de por post lo queremos hacer por get, cambiamos el $.post por $.get
                    					$.post('crearUsuario', {
                    						nombre : nombreVar,
                    						apellido: apellidoVar,
                    						edad: edadVar,
                    						email: emailVar,
                    						nick: nickVar,
                    						password: passVar
                    					}, function(responseText) {
                    						$("#respuesta").fadeIn("slow");
                    						$('#respuesta').html(responseText);
                    						$(":text").each(function(){	
                    							$($(this)).val('');
                    					});
                    						$(":password").each(function(){	
                    							$($(this)).val('');
                    					});
                    					});
                            		}
                        			
                        		}
                        	}
                        }
                    }
                }
            }
	

        });//click
    });//ready
					
</script>


		 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }

  /*  bhoechie tab */

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
  </style>
<!----font-Awesome----->
   	<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="inicio.html">EL DRAGONCITO </a></h1>
		</div>
		
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li ><a href="inicio.html">INICIO</a></li>
		        <li><a href="menu.html">MENUS</a></li>
		        <li><a href="conocenos.html">CONOCENOS</a></li>
		        <li   ><a href="calificanos.html">CALIFICANOS</a></li>
		        <li><a href="contactos.html">CONTACTANOS</a></li>
		        <li class="active" ><a href="administardor.html">ADMINISTRADOR</a></li>

		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		
	</div>
	<div class="clearfix"></div>
</div>
</div>
<!--Perfil-->
	<section class="main-ini container">
		<div class="row">
			<br>
			<section class="posts col-md-4">
			
				
				 <div class="profile-header-container">   
    				<div class="profile-header-img">
    				<?php 
    					
						$nom=$_SESSION['nombre'];
						$foto_em=$_SESSION['foto'];					
						?>
						<img  width="50%" height="50%" src="data:image/jpeg;base64,<?php echo base64_encode($foto_em); ?>" />
                		<!--  <img class="img-circle" src="../images/c1.jpg" />-->
                	<!-- badge -->
                	<div class="rank-label-container">
                    	<span class="label label-default rank-label">Administrador....</span>
                	</div>
            		</div>
        		</div>
			</section>
			<section class="posts col-md-8">
				<h2>MESAS</h2>
			</section>
		</div>
	</section>
	<!--Perfil-->

	<br>

	<br>

	<section class="main-ini container">
	
		<div class="row">
			<div class="posts col-md-12 bhoechie-tab-container">
	            <div class="posts col-md-2 bhoechie-tab-menu">
	              <div class="list-group">
	                <a href="../views_empleados/Admin_empleados.php" class="list-group-item  text-center">
	                  <br/>Empleados
	                </a>
	                <a href="#" class="list-group-item text-center active">
	                  <br/>Mesas
	                </a>
             
	                <a href="../views_plato/Admin_plato.php" class="list-group-item text-center">
	                  <br/>Platos
	                </a>
	                <a href="../views_empresa/Admin_empresa.php" class="list-group-item text-center">
	                  <br/>Empresa
	                </a>
	            </div>
	        	</div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab">
                <!-- flight section --> 
                <!-- train section -->
                <!-- hotel search -->
                
                <!-- Contenido aqui va todoo -->                    
                	 <div class="content-wrapper">
						<!-- Main content -->
						<section class="content">
							<div class="row">
								<div class="col-md-12">
									<div class="box">
										<div class="box-header with-border">
											<div class="box-tools pull-right">
												
											</div>
										</div>
										<!-- /.box-header -->
										<div class="box-body">
											<div class="row">
												<div class="col-md-12">
			
													<section class="content">
														<div class="row">
															<!-- PRIMERA COLUMNA  ROBERT ...............................-->
															<!-- left column -->
															<div class="col-md-4">
																<!--Contenido-->
																<div class="box box-primary">
																	<div class="box-header with-border">
																		
																	</div>
																	<!-- /.box-header -->
																	<!-- form start -->
																	<form role="form"
																		action="../../controlador/controlador_mesa.php" method="get">
																		<div class="box-body">
																			<div class="form-group">
																				<input type="hidden" name="crud" value="1"> <label
																					for=" ">Ingrese Mesa</label> <input
																					type="text" name="MesaNum" class="form-control"
																					id="MesaNum" placeholder="Ejemplo A5 , A1">
																			</div>	
																			
																			<div id="msgNom" class="alert alert-danger alert-dismissable">
  																				<strong>Error!</strong> formato incorrecto.
																					</div>																																		
																			
																		</div>
																		<!-- /.box-body -->
			
																		<div class="box-footer">
																			<button type="submit" class="btn btn-primary" id="bot" value="bot" >AGREGAR</button>
																		</div>
																	</form>
																</div>
															</div>
			
			
															<!-- SEGUNDA COLUMNA  ROBERT .............................................-->
															<div class="col-md-8">
			
																<div class="box-body table-responsive no-padding">
			
																	<table class="table table-bordered text-center">
																		<tr>
																			<th>MesaCod</th>
																			<th>Numero de Mesa</th>
																			<th>Eliminar</th>
																			<th>Modificar</th>
																		</tr>
			                <?php										
														             
																	    $resultado=show();
 
																		while ( $fila = mysqli_fetch_array ( $resultado ) ) {
																				?>		
																		<tr>
																			<td><?php echo $fila['MesaCod'];?></td>
																			<td><?php echo $fila['MesaNum'];?></td>
																			<td>
																				<button type="button"
																					onClick="eliminarMesa(<?php echo $fila['MesaCod'];?>)"
																					class='btn btn-block btn-danger'>Eliminar</button>
																			</td>
																			<td><a href="#" class="btn btn-success"
																				data-toggle="modal" data-target="#modal-success"
																				onClick="modificarMesa('<?php echo $fila['MesaCod']?>','<?php echo $fila['MesaNum'];?>');">Modificar
																			</a></td>
																		</tr>
																							
																 <?php			
																 
																		}
																			
																			?>
																			
							<script>
							function modificarMesa(idMesa,idNumero){
								$('#mmescod').val(idMesa);
								$('#mnumero').val(idNumero);
															
							}
						
							</script>
																		<script>
			
							$('#mbtnUpdateMesa').click(function(){
							var respuesta=	confirm("Estas eliminar la mesa");
										$('#mbtnCerradoModal').click();
											
							});		
							</script>
																		<script>
							 function eliminarMesa(id_mesa){
								var respuesta = confirm("Estas que desea Elinar la mesa");
								if(respuesta){
									window.location.href="../../controlador/controlador_mesa.php?id_mesa="+id_mesa+"&crud=2";
								}
							 } 				 
							 function modificarTipoPlato(){
								 function myFunction() {
									    document.getElementById("data-target='#modal-success'").show();
									}					 			
										//window.location.href="?id_tipoplato="+id_tipoplato;
							} 
			
							 $(document).ready(function(){
								    $("#myBtn").click(function(){
								        $("#modal-success").modal();
								    });
								});
							</script>
																	</table>
																</div>
															</div>
													</div>
													</section>
													<!-- ESTA PARTE ES PARA MODIFICAR  INCIAA  -->
			
													<div class="modal modal-success fade" id="modal-success">
														<div class="modal-dialog">
															<form role="form" action="../../controlador/controlador_mesa.php"
																method="GET">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal"
																			aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																		<h4 class="modal-title">Success Modal</h4>
																	</div>
																	<div class="modal-body">
																		<div class="box-body">
																			<div class="form-group">
																				<input type="hidden" name="mmescod" id="mmescod"> <input
																					type="hidden" name="crud" value="3"> <label
																					for=" "> Numero de Mesa</label> <input
																					type="text" name="mnumero" class="form-control"
																					id="mnumero" placeholder="">
																			</div>									
																				
																			
																		</div>
																		<!-- /.box-body -->
			
																	</div>
																	<div class="modal-footer">
																		<button type="button" id="mbtnCerradoModal"
																			class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
																		<button type="submit" id="mbtnUpdateMesa"
																			class="btn btn-outline">Guardar</button>
																	</div>
			
																</div>
															</form>
															<!-- /.modal-content -->
														</div>
														<!-- /.modal-dialog -->
													</div>
			
													<!-- fin de  la modificacionnnnn  -->
			
												</div>
											</div>
			
										</div>
									</div>
									<!-- /.row -->
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
					</section>
					</div>    
				<!--  -->

            </div>
        </div>		
		</div>
</section>			
			
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; reserva | ssss&nbsp;<a href="#"> el dragoncito</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>