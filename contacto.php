<a name="contact" id="contact"></a>

<section class="conten-bg-principal bg3">
	
	<header class="box-contact">
		<h1 class="title-contact">Contacto</h1>
	</header>

	<article class="box-contact">
		<h2 class="texto-contact">
			<span class="icon-WarriosOnline-07" style="color: rgba(255,255,255,.0)"></span>	(55) 5579 2273 <br>
			<span class="icon-WarriosOnline-07"></span>	(55) 5698 9651 <br>
			<span class="icon-WarriosOnline-07" style="color: rgba(255,255,255,.0)"></span>	(55) 2535 5159
		</h2>
		<h2 class="texto-contact">
			<span class="icon-WarriosOnline-12"></span>
			info@warriorslabs.com
		</h2>
		<h2 class="texto-contact">
			<span class="icon-WarriosOnline-09" style="color: rgba(255,255,255,.0)"></span> Pedro Santacilia No. 258-3 <br>
			<span class="icon-WarriosOnline-09"></span> Col. Iztaccihuatl, Del. Benito Juárez, <br>
			<span class="icon-WarriosOnline-09" style="color: rgba(255,255,255,.0)"></span> Cuidad de México, CP. 03520
		</h2>	
		<a  class="texto-contact boton-map" href="https://maps.google.com/maps?ll=19.389567,-99.137385&z=17&t=m&hl=es&gl=MX&mapclient=embed&cid=14468048531491094671" target="_bank">
			<span class="icon-WarriosOnline-10"></span>
			Mapa completo.
		</a>
	</article>


	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); echo "#contact";?>" method="POST" class="box-contact">
		<?php if (isset($_GET['contactsuccess'])){echo $_GET['contactsuccess'];} ?>
		<input type="text" id="fomrulario" placeholder="Nombre" name="nombre" required <?php if (isset($_POST["nombre"])) { echo "value='".$_POST['nombre']."'"; } ?> >
		<?php if (isset($nameError)){echo $nameError;}  ?> 
		<input type="mail" id="fomrulario" placeholder="Correo" name="mail" required   <?php if (isset($_POST["mail"])) { echo "value='".$_POST['mail']."'"; }     ?> >
		<?php if (isset($emailError)){echo $emailError;} ?> 
		<textarea type="text" id="fomrulario" placeholder="Mensaje" name="textarea"></textarea>
		<?php if (isset($messageError)){echo $messageError;} ?> 
		<div class="g-recaptcha dark" data-sitekey="6LezgCETAAAAAJnoqLbBPxhgerjtSE3S3pK6SCub"></div>
		<?php if (isset($captchaError)){echo $captchaError;} ?> 
		<input type="submit" value="Enviar" name="boton">
	</form>

	<article id="googleMap"></article>

</section>