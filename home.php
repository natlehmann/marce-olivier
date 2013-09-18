<?php 
	$pagina = "home";
	include("includes/header.php"); 
?>

<div id="contenido">
	<div class="scroll">
		<div class="galeria">
				<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />
				<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />                                	<img src="images/33_arcade-mode.jpg" alt="" width="573" height="800" />
		</div>
	</div>
</div> 
                            
<?php 
	$imagenes[0]='images/aleatorias/1.jpg'; 
    $imagenes[1]='images/aleatorias/2.jpg';
	
	$i=rand(0,1);
	
	$imagenFondo = $imagenes[$i];
	include("includes/footer.php"); 
?>