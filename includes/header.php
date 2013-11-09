<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es-es">
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
       <!–[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	   <![endif]–>
	   

		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="stylesheet" 
			media="all and (min-width : 768px) and (max-width : 1024px)" href="style/ipad.css">



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
                            		<a href="textil.php" class="textil">-Textil</a>
                            	</li>
                            	<li>
                            		<a href="poster.php" class="poster">-Poster</a>
                            	</li>
                            </ul>
						</ul>
						
						<ul>
   							<li style="cursor: pointer;" class="section-title">
         								<a href="http://ajimolido.tumblr.com/" target="_blank" class="photo">PHOTO</a>
   							</li>
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
                                                            
     
                              
                            
