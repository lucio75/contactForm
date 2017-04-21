<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>FREEWEBSOLUTION :: Modulo Contatti php,css3 ed ajax</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://www.freewebsolution.it" />
<!-- css -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" media="screen">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css" media="screen">
<link rel="stylesheet" href="assets/font/css/font-awesome.min.css" media="screen">
<link href="style.css" rel="stylesheet" media="screen" />

<!--jquery-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<!--google font-->
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
	<div class="text-center"><h1>Modulo contatti realizzato in php, css3 e ajax</h1></div>
	<div class="row modulo-contatti">
		<form id="contact-form" action="" name="contact-form" method="post">
			<div id="responde"></div>
			<p class="contact-form-fields input col-sm-5 col-sm-offset-1">
				<input id="nome" name="nome" placeholder="Enter name" required="required" type="text"></br>
				<input id="email" name="email" placeholder="Enter email" required="required" type="email"></br>
				<input type="tel" id="tel" name="tel" placeholder="your phone" required="required" pattern="^[0-9]{2,4}[0-9]{4,10}"></br>				
				<input id="oggetto" name="oggetto" placeholder="subject" required="required" type="text">	
			</p>
			<p class="contact-form-fields textarea col-sm-5">
				<textarea id="message" name="message" cols="33" rows="5" aria-invalid="false" placeholder="Message"></textarea>	
			</p>
			<p class="text-muted check contact-form-fields input col-sm-5 col-sm-offset-1" style="margin-top:-23px;">
				<input type="checkbox" name="privacy" id="privacy" value="1" required="required" onclick="ControlloSubmit()">
				Autorizzo ai sensi della <a href="http://www.freewebsolution.it/privacy/" target="_blank" title="leggi la nostra informativa" class="informativa_link"> legge 675/96 </a>il trattamento dei dati personali trasmessi. 
			</p>
			<p class="contact-form-fields input col-sm-4 col-sm-offset-1" style="margin-top:-20px;">
				<button type="submit" class="btn btn-skin pull-right" id="button" name="invia"><span class="load"><i class="fa fa-refresh fa-spin"></i></span> Send Message</button>
			</p>
		</form>
	</div>
</div>
</body>
</html>