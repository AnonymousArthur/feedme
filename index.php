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
<script src="masonry.pkgd.min.js"></script>
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
        <h1><a href="#">FeedMe</a></h1> 
    </li> 
 
    <li class="toggle-topbar menu-icon">
       <a href="#"><span>Menu</span></a>
    </li> 
  </ul> 
  <section class="top-bar-section"> <!-- Right Nav Section --> 
    <ul class="right"> 
      <li class="has-form">
      <div class="row collapse">	
     <div class="large-8 small-9 columns">
      <input name="search-term" type="text" placeholder="Enter Keyword">
       </div>
       <div class="large-4 small-3 columns">
         <a href="#" class="filter alert button expand" type="submit" data-filter="search-term">Search</a>
       </div>  
   </div>
     </li>
    </ul>  
  </section> 
</nav>

<div class="panel" align="center">
<img src="patrick.png">
</div>
<div class="flip" align="center">
<button class="button" >Feed Me Now</button>
</div>

<div class="container">

	<ul id="filters" class="clearfix">
  <li><span class="filter active" data-filter="Chinese_Food Italian_Food Japanese_Food American_Food Indian_Food Malaysian_Food Desserts Vegetarian Miscellaneous Drinks Turkish_Food Fast_Food Coffee_shop Mediterranean_Food">All</span></li>
  <li><a href="#"><span class="filter" data-filter="Chinese_Food">Chinese Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Italian_Food">Italian Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Japanese_Food">Japanese Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="American_Food">American Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Indian_Food">Indian Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Malaysian_Food">Malaysian Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Desserts">Desserts</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Vegetarian">Vegetarian</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Miscellaneous">Miscellaneous</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Drinks">Drinks</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Turkish_Food">Turkish Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Fast_Food">Fast Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Coffee_shop">Coffee shop</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Mediterranean_Food">Mediterranean Food</span></a></li>

	</ul>
 </script>
</div>
</div>
 <script>
    $(document).foundation();
 </script>


<div id="myModal" class="reveal-modal" data-reveal></div>
<?php
		$DB_PASSWORD='1235789zyc';
		$con = mysql_connect("localhost","root",$DB_PASSWORD);
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		$i = 1;
		mysql_select_db("fmDB", $con);
		//ONE FILTER*****************************************************************
		echo "<div id='portfoliolist'>";
		while($i<=14){
			$result = mysql_query("SELECT * FROM PHOTOS,RESTAURANTS_PHOTOS WHERE RESTAURANT_ID = $i AND RESTAURANTS_PHOTOS.PHOTO_ID=PHOTOS.PHOTO_ID;")or die (mysql_error());
			if( isset($_GET['submit']) ){
    			$val1 = htmlentities($_GET['search-term']);
    			$result = mysql_query("SELECT * FROM PHOTOS,RESTAURANTS_PHOTOS WHERE RESTAURANT_ID = $i AND RESTAURANTS_PHOTOS.PHOTO_ID LIKE $val1;")or die (mysql_error());
    			echo "<h2>",$val1,"</h2>";
    		}	
			$restaurant_types = mysql_query("SELECT * FROM RESTAURANTS,RESTAURANTS_PREFERENCES,PREFERENCES WHERE RESTAURANTS.RESTAURANT_ID = $i AND RESTAURANTS_PREFERENCES.PREFERENCE_ID = PREFERENCES.PREFERENCE_ID AND RESTAURANTS_PREFERENCES.RESTAURANT_ID = RESTAURANTS.RESTAURANT_ID;");
			$restaurant = mysql_fetch_array($restaurant_types);
				//echo $restaurant['PREFERENCE'];
			$newphrase = str_replace(" ", "_", $restaurant['PREFERENCE']);
			///one block********************************************************************
			echo "<div class='portfolio ",$newphrase,"' data-cat = \"",$newphrase,"\">";
			echo "<div class='portfolio-wrapper'>";
			echo "<ul class='tester' data-orbit>";
			while($row = mysql_fetch_array($result)){
				echo "<li><a  href='restaurant.php?restaurant=$i' data-reveal-id='myModal' data-reveal-ajax='true'><img src='",$row['URL'],"' alt='' height=\"300\" width=\"400\"/></a>";
				echo "<div class='label'>";
				echo "<div class='label-text'><span class='text-title'>",$restaurant['RESTAURANT_NAME'],"</span></div>";
				echo "<div class='label-bg'></div></div></li>";

		  	//echo $row['URL'] . " " . $row['INFORMATION'];
			//echo "***********";
			}
			echo "</ul>";
			echo "</div>";
			echo "</div>";
			//****************************************************************************
			$i = $i+1;
		}
		echo "</div>";
                //*****************************************************************************************
		mysql_close($con);
	?>

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
