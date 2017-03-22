<!DOCTYPE HTML>
<html>
<head>
    <title>Samanta e Felipe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    
    <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Custom-Theme-files-->
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' />	
    
    <script src="assets/js/jquery.min.js"> </script>
    <script type="text/javascript" src="assets/js/move-top.js"></script>
    <script type="text/javascript" src="assets/js/easing.js"></script>
    <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
			});
		});
    </script>
</head>
<body>
    <?php include 'layouts/_header.php';?>
	<div class="banner two">
     	<div class="container">
			<h2 class="second-head"></h2>	
	    </div>
	</div>

	<div class="container">
		<div class="section-contact">
			<div class="row contact-main">
				<div class="col-md-6 contact-in">
					<h5>Alguns detalhes sobre o dia.</h5>
					<p class="para1">A cerimônia e a festa serão no mesmo local, iniciamos as 10:30h com o casamento e logo após almoçamos na Restaurante do Espaço. </p>
					<p class="para1">O Restaurante da Terra é um espaço muito aconchegante com cara de casa da vó no sitio. No dia teremos musica ao vivo, com uma playlist especialmente selecionada. Não se preocupe com roupas de gala, pode usar roupas leves, claras e alegres.</p>
					
					<div style="margin-top: 20px">
						<p class="para1"> <a href="http://casamento.pontofrio.com.br/#/lista-presentes/609878" target="_blank"> Nossa lista de casamento </a></p>
						<p class="para1"><a href="#"> Ajudar pelo PagSeguro </a></p>
					</div>

					<img src="" alt="" class="img-responsive">
<!-- 					<form>
						<div class="form-group">
							<label for="email">Nome</label>
							<input type="text" class="form-control" id="name">
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="email" class="form-control" id="email">
						</div>
						<div class="form-group">
							<label for="comment">Mensagem</label>
						    <textarea class="form-control" rows="3" id="comment"></textarea>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-default">Enviar</button>
						</div>
					</form> -->
				</div>
				<div class="col-md-6 contact-grid">
					<img src="assets/images/contato.jpg" class="img-responsive" alt="">
				</div>
			</div>
		</div>

</div>
<!--//contact-->
	</div>

    <?php include 'layouts/_footer.php';?>
	<!--start-smooth-scrolling-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" id="toTop" class="scroll" style="display: block;">
        <span id="toTopHover" style="opacity: 1;"> </span>
    </a>
    </body>
</html>