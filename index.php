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
	<!--start-home-->
    <div class="banner">
        <div class="container">
            <div  class="callbacks_container">
<!--                 <ul class="rslides" id="slider4">
                    <li>
                        <div class="banner-info">
                            <h3>Vamos <span>Casar</span></h3>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                        <h3>Felipe & <span> Samanta</span> </h3>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h3>Vamos <span>Casar</span></h3>
                        </div>								
                    </li>
                </ul> -->
            </div>
            <!--banner-->
            <script src="assets/js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager:true,
                        nav:false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
            </script>
            <!--main-drop-->
            <div class="main-drop">
                <img src="assets/images/transp.gif" alt="" class="img-responsive" />
                <div class="hands">
                </div>
                <div class="couple">
                    <div class="bride">
                        <img src="assets/images/groom.jpg" class="img-responsive" alt="">
                        <h5>Felipe Cotto</h5>
                    </div>
                    <div class="groom">
                        <img src="assets/images/bride.jpg" class="img-responsive" alt="">
                        <h5>Samanta Luz</h5>
                    </div>
                </div>
            </div>
            <!--//main-drop-->
        </div>
    </div>
	<!--welcome-->
    <div class="welcome">
        <div class="container">
            <div class="welcome-top">
            <img src="assets/images/home.jpg" class="img-responsive" alt="">
                <h2>Felipe & Samanta</h2>
                <p>Chegou nosso grande dia <i class="fa fa-smile-o" aria-hidden="true"></i> aqui no site você vai poder ver mais detalhes da nossa história, informações do grande dia e como dar um presentinho pra gente. </p>
                <a class="read" href="story.php">Leia Mais</a>
            </div>
        </div>
    </div>
    <!--welcome-->
	<!--registry-->
     <div class="registry-section">
	     <h3 class="tittle">Local e Lista</h3>
		  <div class="registry">
			    <div class="col-md-6 registry-left">
					<div class="registry-text">
					   <h4>Restaurante da Terra</h4>
					   <h6>21/04 | 10:30h</h6>
					   <p>O <a href="https://www.facebook.com/restaurantedaterra0/" target="_blank">Restaurante da Terra </a> fica na <a href="https://goo.gl/maps/35qw9ZGLfio" target="_blank"> <i class="fa fa-map-marker" aria-hidden="true"></i> Estrada Joao Lopes, 2001 - Brigadeiro Tobias. </a> Ele é um restaurante chácara de Sorocaba. Seu objetivo é proporcionar o que há de melhor em comida caipira (Paulista, Tropeira e Mineira) com ambiente agradável, com muito verde e tranquilidade. </p>
					</div>
					<a href="javascript:;" class="mask">
                        <img src="assets/images/gift.jpg" alt="image" class="img-responsive zoom-img">
                    </a>
			    </div>
			    <div class="col-md-6 registry-right">
				    <a href="javascript:;" class="mask">
                        <img src="assets/images/restaurante-da-terra.jpg" alt="image" class="img-responsive zoom-img">
                    </a>
    				<div class="registry-text">
    				    <h4>Presentes</h4>
    				    <h6>Nossa listinha</h6>
    				    <p style="margin-bottom: 20px">Separamos alguns itens para nossa casa nessa <a href="http://casamento.pontofrio.com.br/#/lista-presentes/609878" target="_blank"> listinha aqui </a> e você também pode dar uma ajudinha em $$$ para nossa Lua de Mel via <a href="#">Pag Seguro.</a> Fiquem a vontade, qualquer dúvida nos mandem mensagem.</p>
                            <a href="http://casamento.pontofrio.com.br/#/lista-presentes/609878" target="_blank" class="btn-doe"> Lista </a>
                            <a href="#" class="btn-doe">Pag Seguro</a>
                        </div>
                    </div>
				</div>
				<div class="clearfix"> </div>
		  </div>
	 </div>
	<!--//registry-->
	
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