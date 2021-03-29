<!-- sección HOME INICIO -->
<div class="mainbox bl1" style="background-image: url(<?php echo(base_url( 'assets/public/img/fondo-the-rocket-tv-guatemala.jpg' )); ?> )">
	<div id="astronauta">
		<img src="<?php echo(base_url( 'assets/public/img/astronauta.png' )); ?>" />
	</div>
	
	<div id="textoLogo">
		<div id="logo2"><img src="<?php echo(base_url( 'assets/public/img/logo-guatemala.svg' )); ?>" /></div>
		<h1 id="textoIntro">
			Todo el universo del entretenimiento<br />
			en un solo lugar y a un único precio
		</h1>
	</div>
</div>




<div class="mainbox bl2">
	<h2 class="titulo">¿Qué es <span class="colorMarca">The Rocket TV</span>?</h2>
	<div class="col2">
		<div class="texto">
			<p>Sabias que es posible ver todo el contenido de muchísimas plataformas de streaming, pagos por eventos, mas  de 5000 películas, 500 canales de television americana y latinoamericana, box, partidos, conciertos, kids y mucho más.</p>
			<p>Bueno esto  es <span class="colorMarca">The Rocket TV</span>, un servicio en el que encontraras todo esto por el costo de apenas uno solo de ellos por separado.</p>
		</div>
		<div class="grafico">
			<img src="<?php echo(base_url( 'assets/public/img/grafico-marcas.png' )); ?>" />
		</div>
	</div>
</div>




<div class="mainbox bl3">
	<div id="tematica">
		<div id="textoFranja">
			Entretenimiento para todos
		</div>
		<div id="franja"></div>
		<div class="grafico">
			<img src="<?php echo(base_url( 'assets/public/img/tematicas.png' )); ?>" />
		</div>
	</div>
	
	<div id="tiraPeliculas">
		<img src="<?php echo(base_url( 'assets/public/img/tira-peliculas.jpg' )); ?>" />
	</div>
	<p>
		Series, Películas, Zona Kids, TV<br />
		Abierta, Documentales y más
	</p>
	
	<div class="btnBox">
		<input type="button" value="PRUEBA"></input>
		<input type="button" value="COMPRAR" class="compra"></input>
	</div>
</div>




<div class="mainbox bl4">
	<div class="triangulo"></div>
	<h2 class="titulo">¡Requisitos de <span class="colorMarca">Instalación</span>!</h2>
	<h3>En pocos pasos podrás disfrutar de miles de horas de entretenimiento.</h3>
	<div class="col2">
		<div class="texto">
			<p>
				Dispositivos con sistema<br />
				Android (Celular, TV Box o<br />
				Firestick)
			</p>
			<img src="<?php echo(base_url( 'assets/public/img/android-logo.svg' )); ?>" />
		</div>
		<div class="grafico">
			<img src="<?php echo(base_url( 'assets/public/img/dispositivos.png' )); ?>" />
		</div>
	</div>
</div>



<div class="mainbox bl5">
	<div class="fondoFix" style="background-image: url(<?php echo(base_url( 'assets/public/img/fondo-nebulosa.jpg' )); ?> )"></div>
	
	<h2 class="titulo">¡Nuestros <span class="colorMarca">Paquetes</span>!</h2>
	
	<div id="btnsCompras" class="boxDown">
		<div class="colPrecios">
			<div class="boxInfo">
				<div class="numero">1</div>
				<div class="texto">Mes</div>
				<div class="precio">$300</div>
			</div>
			<div class="btnComprar">
				<input id="btn1mes" type="button" value="COMPRAR" class="compra" onclick="goPay('<?php echo(base_url('inicio/paySesion/1')); ?>');"></input>
			</div>
		</div>
		
		<div class="colPrecios">
			<div class="boxInfo">
				<div class="numero">2</div>
				<div class="texto">Meses</div>
				<div class="precio">$580</div>
			</div>
			<div class="btnComprar">
				<input id="btn2mes" type="button" value="COMPRAR" class="compra" onclick="goPay('<?php echo(base_url('inicio/paySesion/2')); ?>');"></input>
			</div>
		</div>
		
		<div class="colPrecios ideal">
			<div class="boxInfo">
				<div class="numero">3</div>
				<div class="texto">Meses</div>
				<div class="precio">$740</div>
			</div>
			<div class="btnComprar">
				<input id="btn3mes" type="button" value="COMPRAR" class="compra" onclick="goPay('<?php echo(base_url('inicio/paySesion/3')); ?>');"></input>
			</div>
		</div>
		
		<div class="colPrecios">
			<div class="boxInfo">
				<div class="numero">6</div>
				<div class="texto">Meses</div>
				<div class="precio">$1,300</div>
			</div>
			<div class="btnComprar">
				<input id="btn6mes" type="button" value="COMPRAR" class="compra" onclick="goPay('<?php echo(base_url('inicio/paySesion/6')); ?>');"></input>
			</div>
		</div>
	</div>
</div>





<div class="mainbox bl6">
	<div class="grafico">
		<img src="<?php echo(base_url( 'assets/public/img/fondo-prueba.png' )); ?>" />
	</div>
	
	<div class="flotarCentro">
		<h2 class="titulo">Prueba Gratis</h2>
		<h3 class="titulo2 onlyDesktop">Acceso total por 24 horas en una muestra gratis</h3>
		<input id="btnFormEnviar" type="button" value="PRUEBA"></input>
	</div>
</div>







<div class="mainbox bl7">
	<h2 class="titulo">Contacto</h2>
	<h4 class="titulo2">Puedes contactarnos a través del siguiente formulario.</h4>
	
	<form id="formulario" action="" method="post" enctype="application/x-www-form-urlencoded">
		<div class="col2">
			<div class="p1">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="" autocomplete="off" class="validaciones vc form-control input-lg" data-validar="texto"></input>
				<input type="email" name="correo" id="correo" placeholder="Correo" value="" autocomplete="off" class="validaciones vc form-control input-lg" data-validar="correo"></input>
			</div>
			<div class="p2">
				<textarea name="comentarios" id="comentarios" placeholder="Comentarios o Información" autocomplete="off" class="validaciones vc form-control input-lg" data-validar="correo"></textarea>
			</div>
		</div>
		<div class="boxBtn">
			<input type="button" value="enviar" id="btnForm"></input>
		</div>
	</form>
</div>


















