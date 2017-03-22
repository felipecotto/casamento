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
    <link href="assets/css/gallery.css" rel='stylesheet' type='text/css' />	
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
		<section class="photos">
			<img class="img-responsive" src="assets/images/gallery/01.jpg">
			<img class="img-responsive" src="assets/images/gallery/02.jpg">
			<img class="img-responsive" src="assets/images/gallery/03.jpg">
			<img class="img-responsive" src="assets/images/gallery/04.jpg">
			<img class="img-responsive" src="assets/images/gallery/05.jpg">
			<img class="img-responsive" src="assets/images/gallery/06.jpg">
			<img class="img-responsive" src="assets/images/gallery/07.jpg">
			<img class="img-responsive" src="assets/images/gallery/08.jpg">
			<img class="img-responsive" src="assets/images/gallery/09.jpg">
			<img class="img-responsive" src="assets/images/gallery/10.jpg">
			<img class="img-responsive" src="assets/images/gallery/11.jpg">
			<img class="img-responsive" src="assets/images/gallery/12.jpg">
			<img class="img-responsive" src="assets/images/gallery/13.jpg">
			<img class="img-responsive" src="assets/images/gallery/14.jpg">
			<img class="img-responsive" src="assets/images/gallery/15.jpg">
			<img class="img-responsive" src="assets/images/gallery/16.jpg">
			<img class="img-responsive" src="assets/images/gallery/17.jpg">
			<img class="img-responsive" src="assets/images/gallery/18.jpg">
			<img class="img-responsive" src="assets/images/gallery/19.jpg">
			<img class="img-responsive" src="assets/images/gallery/20.jpg">
			<img class="img-responsive" src="assets/images/gallery/21.jpg">
		</section> 
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

	<script>
		function getRandomSize(min, max) {
		  return Math.round(Math.random() * (max - min) + min);
		}

		var allImages = "";

		for (var i = 0; i < 25; i++) {
		  var width = getRandomSize(200, 400);
		  var height =  getRandomSize(200, 400);
		  allImages += '<img src="assets/images/gallery/'+width+'/'+height+'" alt="pretty kitty">';
		}

		$('.photos').append(allIma
	</script>

</body>
</html>