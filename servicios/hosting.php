<form method="GET" action="#" class="box-table">
	<section class="columna-info">
		<article class="fila none"></article>
		<article class="fila obscuro">
			<p class="tabla">
				Pago Mensual MX
			</p>
		</article>
		<article class="fila">
			<p class="tabla anual">
				Pago Anual MX
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				Espacio de disco
			</p>
		</article>
		<article class="fila">
			<p class="tabla">
				Trasferencia de datos
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				Cuentas de correo
			</p>
		</article>
		<article class="fila check">
			<!-- ------------ -->
		</article>
		<article class="fila botonsolict">
			<!-- ------------ -->
		</article>
	</section>
	<section class="columna" id="boxJunior">
		<article class="fila">
			<p class="tabla title-tabla">
				Junior
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				$ 450.00
			</p>
		</article>
		<article class="fila anual">
			<p class="tabla sin-top">
				$ 4,500.00
			</p>
			<del>$ 5,400.00</del>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				2 Gb
			</p>
		</article>
		<article class="fila">
			<p class="tabla">
				20 Gb 
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				50
			</p>
		</article>
		<article class="fila check">
			<input type="radio" name="Plan" value="Junior" id="Junior" onclick="selectJunio()">
		</article>
		<article class="fila botonsolict">
			<input type="submit" value="Solicitalo" class="boton-enviar-oc" id="btomJunio">
		</article>
	</section>
	<section class="columna" id="BoxBasic1">
		<article class="fila">
			<p class="tabla title-tabla">
				Básico 1
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				$ 899.00
			</p>
		</article>
		<article class="fila anual">
			<p class="tabla sin-top">
				$ 8,990.00
			</p>
			<del>$ 10,788.00</del>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				4 Gb
			</p>
		</article>
		<article class="fila">
			<p class="tabla">
				40 Gb 
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				100
			</p>
		</article>
		<article class="fila check">
			<input type="radio" name="Plan" value="Basic1" id="Basic1" onclick="selectBasic1()">
		</article>
		<article class="fila botonsolict">
			<input type="submit" value="Solicitalo" class="boton-enviar-oc" id="btomb1">
		</article>
	</section>
	<section class="section-active" id="BoxBasic2">
		<article class="fila">
			<p class="tabla title-tabla">
				Básico 2
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				$ 1,250.00
			</p>
		</article>
		<article class="fila anual">
			<p class="tabla sin-top">
				$ 12,500.00
			</p>
			<del>$ 15,000.00</del>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				5 Gb
			</p>
		</article>
		<article class="fila">
			<p class="tabla">
				50 Gb 
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				200
			</p>
		</article>
		<article class="fila check">
			<input type="radio" name="Plan" value="Basic2" id="Basic2" checked onclick="SelectBasic2()">
		</article>
		<article class="fila botonsolict">
			<input type="submit" value="Solicitalo" class="boton-enviar" id="btomb2">
		</article>
	</section>
	<section class="columna" id="BoxBasic3">
		<article class="fila">
			<p class="tabla title-tabla">
				Básico 3
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				$ 1,599.00
			</p>
		</article>
		<article class="fila anual">
			<p class="tabla sin-top">
				$ 15,990.00
			</p>
			<del>$ 19,188.00</del>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				6 Gb
			</p>
		</article>
		<article class="fila">
			<p class="tabla">
				60 Gb 
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				300
			</p>
		</article>
		<article class="fila check">
			<input type="radio" name="Plan" value="Basic3" id="Basic3" onclick="SelectBasic3()">
		</article>
		<article class="fila botonsolict">
			<input type="submit" value="Solicitalo" class="boton-enviar-oc" id="btomb3">
		</article>
	</section>
	<section class="columna" id="BoxPremium">
		<article class="fila">
			<p class="tabla title-tabla">
				Premium
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				$ 2,650.00
			</p>
		</article>
		<article class="fila anual">
			<p class="tabla sin-top">
				$ 26,500.00
			</p>
			<del>$ 31,800.00</del>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				18 Gb
			</p>
		</article>
		<article class="fila">
			<p class="tabla">
				100 Gb 
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				600
			</p>
		</article>
		<article class="fila check">
			<input type="radio" name="Plan" value="Premium" id="Premium" onclick="SelectPremium()">
		</article>
		<article class="fila botonsolict">
			<input type="submit" value="Solicitalo" class="boton-enviar-oc" id="btombprem">
		</article>
	</section>
	<section class="columna" id="BoxPremiumPL">
		<article class="fila">
			<p class="tabla title-tabla">
				Premium +
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				$ 3,599.00
			</p>
		</article>
		<article class="fila anual">
			<p class="tabla sin-top">
				$ 35,990.00
			</p>
			<del>$ 43,188.00</del>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				36 Gb
			</p>
		</article>
		<article class="fila">
			<p class="tabla">
				160 Gb 
			</p>
		</article>
		<article class="fila obscuro">
			<p class="tabla">
				ilimitadas
			</p>
		</article>
		<article class="fila check">
			<input type="radio" name="Plan" value="premium+" id="premium+" onclick="SelectPremiumP()">
		</article>
		<article class="fila botonsolict">
			<input type="submit" value="Solicitalo" class="boton-enviar-oc"	id="btombprempl">
		</article>
	</section>
</form>

<div class="box-conten2">
	<section class="title-conten2-hosting">
		<h2 class="title-content2">
			Todos nuestros planes incluyen:
		</h2>
	</section>
	<article class="listas-de-planes">
		<p class="listas">
			• Panel de control de fácil uso <br>
			• Configuración de cuentas POP3 <br>
			• Configuración de cuentas IMAP <br>
			• Acceso directo a las bases de datos <br>
			• Alias de dominio <br>
			• Perl <br>
			• Python <br>
			• Almacenamiento total del correo electrónico <br>
			• PHP 5 y MySQL 5 <br>
			• Redirecciones de correo 
		</p>
	</article>
	<article class="listas-de-planes">
		<p class="listas">
			• Autocontestadores <br>
			• Panel de control <br>
			• Soporte MySQL <br>
			• Dominio <br>
			• Web Mail <br>
			• Servicio de FTP <br>
			• Servicio HTTP y HTTPS <br>
			• Sistema Antispam Warriors Defender <br>
			• Respaldos automáticos
		</p>
	</article>
	<section class="title-conten2-hosting" style="margin-top: 15px;">
		<h2 class="title-content2">
			Beneficios:
		</h2>
	</section>
	<article class="listas-de-planes">
		<p class="listas">
			• Activación gratis. <br>
			• Panel de control flexible y de fácil uso. <br>
			• Soporte técnico personalizado. <br>
			• Apoyo en la migración. <br>
			• Fácil instalación. <br>
			• Respaldos automáticos. 
		</p>
	</article>
</div>

<div class="box3-form">
	<form action="" method="POST" class="boxform">

		<select name="plan" id="plan" required>
			<option value="">Selecciona tu plan..</option>
			<option value="Junior">Junior</option>
			<option value="Basico1">Basico 1</option>
			<option value="Basico2">Basico 2</option>
			<option value="Basico3">Basico 3</option>
			<option value="Premium">Premium</option>
			<option value="Premium+">Premium +</option>
		</select>

		<article class="check-radio-pago sombra">
			<label for="pago1">Menual</label>
			<input type="radio" name="pago" id="pago1" value="mensual" id="">
		</article>

		<article class="check-radio-pago sombra">
			<label for="pago2">Anual</label>
			<input type="radio" name="pago" id="pago2" value="anual" id="">
		</article>

		<input type="text" name="name" placeholder="Nombre y Apellidos" required>
		<input type="mail" name="mail" placeholder="Correo" required>
		<input type="tel" name="phone" min="8" max="15" placeholder="Telefono" required>
		<textarea name="comentario" placeholder="Dejanos un Comentario en tu solicitud"></textarea>
		<input type="submit" class="boton-enviar" value="Enviar" class="enviar">

	</form>	
</div>
































































