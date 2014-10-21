<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FeedMe</title>
<link type="text/css" rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/css/foundation.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/vendor/modernizr.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/vendor/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/foundation.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/foundation/foundation.reveal.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
<script type="text/javascript">
$(function(){

	var filterList = {

		init:function(){
			// MixItUp plugin asd
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});				

		},
		
		hoverEffect:function(){
			// Simple parallax effect
			$('#portfoliolist .portfolio').hover(function(){
				$(this).find('.label').stop().animate({bottom:0},200,'easeOutQuad');
				$(this).find('img').stop().animate({top:-30},500,'easeOutQuad');				
			},function(){
				$(this).find('.label').stop().animate({bottom:-40},200,'easeInQuad');
				$(this).find('img').stop().animate({top:0},300,'easeOutQuad');								
			});				
		}

	};

	// Run the show!
	filterList.init();
//*********************************************filter text replace
$(".dropdown-menu li span").click(function(){
     $(".btn:first-child").text($(this).text());
     $(".btn:first-child").val($(this).text());
     $("ul").hide(0);
  });
});

$(document).ready(function(){
$(".flip").click(function(){
    $(".panel").slideToggle("slow");
  });
});

</script>

</head>
<body onload="checkCookie()">
<style type="text/css">
#a div {display:inline;}
</style>

<nav class="top-bar" data-topbar role="navigation"> 
  <ul class="title-area"> 
    <li class="name"> 
        <h1><a href="#">Feed Me</a></h1> 
    </li> 
 
    <li class="toggle-topbar menu-icon">
       <a href="#"><span>Menu</span></a>
    </li> 
  </ul> 
</nav>

<div class="panel" align="center">
<img src="img/food_header.jpg">
</div>
<div class="flip" align="center">
<button class="button" >Feed Me Now</button>
</div>

<div class="container">

<div id='a'>
<div class="btn-group">
<button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button btn dropdown">Location</button>
<ul id="drop1" data-dropdown-content class="f-dropdown dropdown-menu" aria-hidden="true" tabindex="-1">
  <li><a href="#"><span class="filter" data-filter="app">Upper Campus</span></a></li>
  <li><a href="#"><span class="filter" data-filter="icon">Middle campus</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">Lower campus</span></a></li>
</ul>
</div>
<div class="btn-group" id='a'>
<button href="#" data-dropdown="drop2" aria-controls="drop2" aria-expanded="false" class="button btn1 dropdown">Type of Food</button><br>
<ul id="drop2" data-dropdown-content class="f-dropdown dropdown-menu1" aria-hidden="true" tabindex="-1">
  <li><a href="#"><span class="filter" data-filter="app1">Chinese Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="icon">Italian Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">Japanese Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">American Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">Indian Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">Mexican Food</span></a></li>
</ul>
 <script>
    $(".dropdown-menu1 li span").click(function(){
     $(".btn1:first-child").text($(this).text());
     $(".btn1:first-child").val($(this).text());
     $("ul").hide(1500);
     });
 </script>
</div>
</div>
 <script>
    $(document).foundation();
 </script>



<?php
		$DB_PASSWORD='1235789zyc';
		$con = mysql_connect("localhost","root",$DB_PASSWORD);
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db("fmDB", $con);
		$result = mysql_query("SELECT * FROM PHOTOS,RESTAURANTS_PHOTOS WHERE RESTAURANT_ID = 1 AND RESTAURANTS_PHOTOS.PHOTO_ID=PHOTOS.PHOTO_ID;");
		while($row = mysql_fetch_array($result))
		  {
		  //echo $row['URL'] . " " . $row['INFORMATION'];
		  //echo "<br />";
		  }
		mysql_close($con);
	?>
<br/><br/>
<div id="myModal" class="reveal-modal" data-reveal></div>
	<div id="portfoliolist">
		<div class="portfolio logo" data-cat="logo">		
   			<div class="portfolio-wrapper full">			
				<ul class="tester" data-orbit>
					<li>
						<img src="img/Classic Kebab/Pizza.jpg" alt="" />
						<div class="label">
							<div class="label-text"><a class="text-title">Bird Document</a><span class="text-category">Logo</span></div>
							<div class="label-bg"></div>
						</div>
					</li>
					<li class="active">
						<a  href="restaurant.php?restaurant=10" data-reveal-id="myModal" data-reveal-ajax="true"><img src="img/portfolios/app/1.jpg" alt="" /></a>
						<div class="label">
							<div class="label-text"><a class="text-title">Visual Infography</a><span class="text-category">APP</span></div>
							<div class="label-bg"></div>

						</div>
					</li>
				</ul>
			</div>			
		</div>
		<div class="portfolio app1" data-cat="app1">
			<div class="portfolio-wrapper">
				<a  href="restaurant.php?restaurant=7" data-reveal-id="myModal" data-reveal-ajax="true"><img src="img/portfolios/app/1.jpg" alt="" /></a>
				<div class="label">
					<div class="label-text"><a class="text-title">Visual Infography</a><span class="text-category">APP</span></div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
  <script>
    $(document).foundation({
    	orbit: {
    		timer_speed: 3000,
    		pause_on_hover: true,
    		resume_on_mouseout: true,
    		slide_number: false,
    		bullets: false,
    		navigation_arrows: false,
    		animation: 'slide'
    	}
    	
    });
    
  </script>

</body>
</html>
