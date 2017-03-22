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
	   <!--banner-->
	<div class="banner two">
     	<div class="container">
			<h2 class="second-head"> </h2>	
	    </div>
	</div>
	  <!--//banner-->
	<!--welcome-->
	<div class="our-story">
		<div class="container">
			<!--our-story-top-->
			<div class="row our-story-top">
			    <div class="col-md-6 our-story-img">
			    	<div class="mask">
			    		<img src="assets/images/samanta2.jpg" alt="image" class="img-responsive">
		    		</div>
			    </div>
			    <div class="col-md-6 our-story-text">
				    <h4>Samanta</h4>
					<p class="para1">A vida da voltas e a gente não imagina que a pessoa que você vê durante algum tempo no ônibus e em eventos sem ao menos saber o nome chegaria ao altar. 
					Engraçado como as várias coisas que eu pensava sobre o Felipe quando encontrava com ele, achava ele bravo, meio anticristo e talvez rebelde. Mas apesar de alguns desencontros acabamos nos reencontrando no Facebook. Aliás eu adicionei para garantir o xaveco, no início ele se fez de difícil, depois fluiu tão simples como a gente esperava. Sem grandes esforços e declarações loucas, mas simples como tudo deve ser. 
					</p>
				</div>
		    </div>
			<div class="row our-story-top">
			    <div class="col-md-6 our-story-text two">
					<h4>Felipe</h4>
					<p class="para1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unkno clwn printer took a galley</p>
					<p class="para1">Type and scrambled it to make a type specimen book. It has survived not only five centuries. ndustry's standard dummy. Lorem Ipsum has been the industry's standard dummy standard dummy text ever since the 1500s, when an unknown scrambled it to make a type of all.</p>
				</div>
			    <div class="col-md-6 our-story-img">
			    	<div class="mask">
			    		<img src="assets/images/cotto.jpg" alt="image" class="img-responsive">
		    		</div>
			    </div>
		    </div>
		    <div class="row" style="margin-top: 30px">
		    	<div class="col-md-6">
		    		<img src="assets/images/troca1.jpg" class="img-responsive" alt="">
		    	</div>
		    	<div class="col-md-6">
		    		<img src="assets/images/troca2.jpg" class="img-responsive" alt="">
		    	</div>
		    </div>
	   </div>
	</div>

	<!--/footer-->
	<?php include 'layouts/_footer.php';?>
	<!--//footer-->
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
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>