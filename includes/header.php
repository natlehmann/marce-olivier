<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es-es">
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css" />
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/StackBlur.js"></script>
        <script type="text/javascript" src="js/inicializar.js"></script>
        <script type="text/javascript" src="js/expandingMenus.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.21750.js"></script>
    </head>
    
    <script type="text/javascript">
	    $(function() {

		    var pagina = '<?php echo $pagina ?>';
		    $("#menu .seleccionado").removeClass("seleccionado");

		    var itemSeleccionado = $("#menu ." + pagina);
		    itemSeleccionado.parent().parent().show(200);
		    itemSeleccionado.addClass("seleccionado");
	    });
	</script>
    
    <body>
      <div class="container">    
             <div id="contenedor">
             
             
				<div id="menu">
					<div class="container1">
                            
 						<a href="home.php"><br>
							<img src="images/logo.jpg" height="94" width="121">
						</a>
                            
						<ul>
							<li style="cursor: pointer;" class="section-title" onclick="mostrarSubItems(this)">
								GRAPHISME
							</li>
							<ul style="display:none;">
                            	<li>
                            		<a href="visuel.php" class="visuel">-Visuel</a>
                            	</li>
                                <li>
                            		<a href="logo.php" class="logo">-Logo</a>
                            	</li>
                            	<li>
                            		<a href="illustration.php" class="illustration">-Illustration</a>
                            	</li>
                            	<li>
                            		<a href="peinture.php" class="peinture">-Peinture</a>
                            	</li>
                            </ul>
						</ul>
						
						<ul>
							<li style="cursor: pointer;" class="section-title" onclick="mostrarSubItems(this)">
								SERIGRAPHIE
							</li>
							<ul style="display:none;">
                            	<li>
                            		<a href="teeshirt.php" class="teeshirt">-Tee-shirt</a>
                            	</li>
                            	<li>
                            		<a href="poster.php" class="poster">-Poster</a>
                            	</li>
                            </ul>
						</ul>
						
						<ul>
							<li style="cursor: pointer;" class="section-title" onclick="mostrarSubItems(this)">
								PHOTO
							</li>
							<ul style="display:none;">
                            	<li>
                            		<a href="blog.php" class="blog">-Blog</a>
                            	</li>
                            </ul>
						</ul>
						
						<ul>
							<li style="cursor: pointer;" class="section-title" onclick="mostrarSubItems(this)">
								INFO
							</li>
							<ul style="display:none;">
                            	<li>
                            		<a href="atelier.php" class="atelier">-L'atelier</a>
                            	</li>
                            	<li>
                            		<a href="contact.php" class="contact">-Contact</a>
                            	</li>
                            	<li>
                            		<a href="amis.php" class="amis">-Amis</a>
                            	</li>
                            </ul>
						</ul>
                        
					</div>	
          		</div>	                 
                                                            
     
                              
                            
