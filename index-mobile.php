<?php $thispage="index" ?>
<?php include('header-mobile.php'); ?>
<!-- Carousel -->
<div id="inicio">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="no-drag" src="img/index/banner/1.jpg" alt="Banner">
			</div>
			<div class="item">
				<img class="no-drag" src="img/index/banner/2.jpg" alt="Banner">
			</div>
			<div class="item">
				<img class="no-drag" src="img/index/banner/3.jpg" alt="Banner">
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div class="nosotros container spacing center" id="nosotros">
	<h1 class="title green">NOSOTROS</h1>
	<p class="text-content">En Dexe Desarolladora estamos comprometidos con la comunidad y el planeta. Consecuencia de lo anterior, somos una empresa de elevada rentabilidad conforme a los parámetros de la industria y una fuente de creación de valor para nuestros clientes, proveedores, colaboradores, comunidad y accionistas.</p>
</div>

<div class="parallax-container" id="descargar">
	<div class="parallax"><img src="img/index/parallax/1.jpg" alt=""></div>
	<div class="container transform-center-vertical center">
		<h1 class="title title-bigline white">DESDE NUESTRA APLICACIÓN</h1>
		<h2 class="title white">Sigue de cerca la construción de tu nuevo hogar</h2>
	</div>
</div>

<div class="contacto container spacing" id="contacto">
	<h1 class="title orange center">CONTACTO</h1>
	<h3 class="title center text-uppercase">Aceptamos tu crédito de Infonavit e ISSSTE</h3>
	<div class="row">
		<div class="col-sm-4">
			<p class="contact-text">
				<span class="orange">Dirección:</span><br>
				Periférico de la Juventud #4101 Local #23<br>
				Plaza San Ángel<br>
				Chihuahua, Chih.
			</p>

			<p class="contact-text">
				<span class="orange">Teléfono:</span><br>
				(614) 426.0252
			</p>

			<p class="contact-text">
				<span class="orange">Correo:</span><br>
				info@dexe.mx
			</p>
		</div>
		<div class="col-sm-8 border-left-gray">
			<form action="mailer.php" method="post" id="contact-form">
				<div class="input-container">
					<input class="input" type="text" id="name" name="name" placeholder="Nombre" required><img src="img/index/mail/user.png" alt="Nombre">
					<input class="input" type="text" id="email" name="email" placeholder="Correo electrónico" required><img src="img/index/mail/email.png" alt="Email">
					<input class="input" type="text" id="location" name="location" placeholder="Dirección" required><img src="img/index/mail/pin.png" alt="Dirección">
					<input class="input" type="text" id="phone" name="phone" placeholder="Teléfono" required><img src="img/index/mail/phone.png" alt="Teléfono">
					<textarea class="input" name="info" id="info" cols="30" rows="5" placeholder="Mensaje" required></textarea><img src="img/index/mail/mail.png" alt="Mensaje">
					<button class="orange-btn submit pull-right" id="form-submit">Enviar</button>
					<div id="form-output"></div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>