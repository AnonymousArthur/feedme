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
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>

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
     $("ul").hide(1500);
  });
});

</script>

</head>
<body>
<<<<<<< Updated upstream
<style type="text/css">
#a div {display:inline;}
</style>
<br></br>
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
  <li><a href="#"><span class="filter" data-filter="app">Chinese Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="icon">Italian Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">Japanese Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">American Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">Indian Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="card">Maxican Food</span></a></li>
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
=======
<div class="container">
>>>>>>> Stashed changes
<!
***********************************************************************************************
since we have no database right now, just list them one by one
>	
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
		  echo $row['URL'] . " " . $row['INFORMATION'];
		  echo "<br />";
		  }
		mysql_close($con);
	?>

	<div id="portfoliolist">
		<div class="portfolio logo" data-cat="logo">
			<div class="portfolio-wrapper">
				<img src="img/Classic Kebab/Pizza.jpg" alt="" />
				<div class="label">
					<div class="label-text"><a class="text-title">Bird Document</a><span class="text-category">Logo</span></div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio app" data-cat="app">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/app/1.jpg" alt="" />
				<div class="label">
					<div class="label-text"><a class="text-title">Visual Infography</a><span class="text-category">APP</span></div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio web" data-cat="web">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/web/4.jpg" alt="" />
				<div class="label">
					<div class="label-text"><a class="text-title">Sonor's Design</a><span class="text-category">Web design</span></div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio card" data-cat="card">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/card/1.jpg" alt="" />
				<div class="label">
					<div class="label-text"><a class="text-title">Typography Company</a><span class="text-category">Business card</span></div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio app" data-cat="app">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/app/3.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Weatherette</a> <span class="text-category">APP</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio card" data-cat="card">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/card/4.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">BMF</a> <span class="text-category">Business card</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio card" data-cat="card">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/card/5.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Techlion</a> <span class="text-category">Business card</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio logo" data-cat="logo">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/logo/1.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">KittyPic</a> <span class="text-category">Logo</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio app" data-cat="app">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/app/2.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Graph Plotting</a> <span class="text-category">APP</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio card" data-cat="card">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/card/2.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">QR Quick Response</a> <span class="text-category">Business card</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio logo" data-cat="logo">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/logo/6.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Mobi Sock</a> <span class="text-category">Logo</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio logo" data-cat="logo">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/logo/7.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Village Community Church</a> <span class="text-category">Logo</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio icon" data-cat="icon">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/icon/4.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Domino's Pizza</a> <span class="text-category">Icon</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio web" data-cat="web">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/web/3.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Backend Admin</a> <span class="text-category">Web design</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio icon" data-cat="icon">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/icon/1.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Instagram</a> <span class="text-category">Icon</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio web" data-cat="web">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/web/2.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Student Guide</a> <span class="text-category">Web design</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio icon" data-cat="icon">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/icon/2.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Scoccer</a> <span class="text-category">Icon</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio icon" data-cat="icon">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/icon/5.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">3D Map</a> <span class="text-category">Icon</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio web" data-cat="web">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/web/1.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Note</a> <span class="text-category">Web design</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio logo" data-cat="logo">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/logo/3.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Native Designers</a> <span class="text-category">Logo</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio logo" data-cat="logo">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/logo/4.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Bookworm</a> <span class="text-category">Logo</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio icon" data-cat="icon">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/icon/3.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Sandwich</a> <span class="text-category">Icon</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio card" data-cat="card">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/card/3.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Reality</a> <span class="text-category">Business card</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
		<div class="portfolio logo" data-cat="logo">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/logo/2.jpg" alt="" />
				<div class="label">
					<div class="label-text"> <a class="text-title">Speciallisterne</a> <span class="text-category">Logo</span> </div>
					<div class="label-bg"></div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>


  <script>
    $(document).foundation();
  </script>
</body>
</html>
