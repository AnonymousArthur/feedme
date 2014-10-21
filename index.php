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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_CN/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<nav class="top-bar" data-topbar role="navigation"> 
  <ul class="title-area"> 
    <li class="name"> 
        <h1><a href="index.php">FeedMe</a></h1> 
    </li> 
 
    <li class="toggle-topbar menu-icon">
       <a href="#"><span>Menu</span></a>
    </li> 
  </ul> 
  <section class="top-bar-section"> <!-- Right Nav Section --> 
    <ul class="right"> 
      <li class="has-form">
      <div class="row collapse">
<!-- Seach button-->
     <form method="get" action="index.php"> 
     		<div class="large-8 small-9 columns">    		
      		<input name="search-term" type="text" placeholder="What would you like">
       		</div>
       		<div class="large-4 small-3 columns">
         	<input type="submit"  class="alert button expand" placeholder="Feed me">
       		</div>
       </form>  
<!-- ------------>
   </div>
     </li>
    </ul>  
    <ul class="right">
  	<li><div class="fb-share-button" data-href="http://feedme.site40.com" data-width="200px"></div></li>  
  	</ul>
  </section> 
</nav>

<div class="panel" align="center">
<img id="intro" src="patrick.png">
</div>
<div class="flip" align="center">
<button class="button" >Feed Me Now</button>
</div>
<div class="container">

	<ul id="filters" class="clearfix">
  <a href="index.php"><li><span class="filter active" data-filter="Asian_Food Mexican_Food Indian_Food Malaysian_Food Desserts Vegetarian Miscellaneous Drinks Turkish_Food Fast_Food Coffee_shop Mediterranean_Food Cuban_Food Vietnamese_Food">All</span></li></a>
  <!--<li><a href="#"><span class="filter" data-filter="Chinese_Food">Chinese Food</span></a></li>-->
  <li><a href="#"><span class="filter" data-filter="Mexican_Food">Mexican Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Asian_Food">Asian Food</span></a></li>
  <li><a href="#"><span class="filter" data-filter="Cuban_Food">Cuban Food</span></a></li>
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
  <li><a href="#"><span class="filter" data-filter="Vietnamese_Food">Vietnamese Food</span></a></li>
	</ul>
 </script>
</div>
</div>
 <script>
    $(document).foundation();
 </script>
<?php 
function contains($str, array $arr)
{
    foreach($arr as $a) {
        if (stripos($str,$a) !== false) return true;
    }
    return false;
}
?>

<div id="myModal" class="reveal-modal" data-reveal></div>
<?php
		$DB_PASSWORD='1235789zyc';
		$con = mysql_connect("localhost","root",$DB_PASSWORD);
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
if(is_null($_GET['search-term']))
{
		mysql_select_db("fmDB", $con);
		//ONE FILTER*****************************************************************
		echo "<div id='portfoliolist'>";
		$restaurants = mysql_query("SELECT * FROM RESTAURANTS;");
		while($restaurant_IDs = mysql_fetch_array($restaurants)){
			$i = $restaurant_IDs['RESTAURANT_ID'];
			$result = mysql_query("SELECT * FROM PHOTOS,RESTAURANTS_PHOTOS WHERE RESTAURANT_ID = $i AND RESTAURANTS_PHOTOS.PHOTO_ID=PHOTOS.PHOTO_ID;")or die (mysql_error());
			$restaurant_types = mysql_query("SELECT * FROM RESTAURANTS,RESTAURANTS_PREFERENCES,PREFERENCES WHERE RESTAURANTS.RESTAURANT_ID = $i AND RESTAURANTS_PREFERENCES.PREFERENCE_ID = PREFERENCES.PREFERENCE_ID AND RESTAURANTS_PREFERENCES.RESTAURANT_ID = RESTAURANTS.RESTAURANT_ID;");
			$restaurant = mysql_fetch_array($restaurant_types);
				//echo $restaurant['PREFERENCE'];
			$newphrase = str_replace(" ", "_", $restaurant['PREFERENCE']);
			///one block********************************************************************
			echo "<div class='portfolio ",$newphrase,"' data-cat = \"",$newphrase,"\">";
			echo "<div class='portfolio-wrapper'>";
			echo "<ul class='tester' data-orbit>";
			while($row = mysql_fetch_array($result)){
				echo "<li><a  href='restaurant.php?restaurant=$i' data-reveal-id='myModal' data-reveal-ajax='true'><img src='",$row['URL'],"' alt=''/></a>";
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
		}
		echo "</div>";
                //*****************************************************************************************
		mysql_close($con);
}else{
mysql_select_db("fmDB", $con);
		//ONE FILTER*****************************************************************
		echo "<div id='portfoliolist'>";
		$search_string = $_GET['search-term'];
		$restaurants = mysql_query("SELECT * FROM TAGS,PHOTOS,RESTAURANTS_PHOTOS WHERE UPPER(CONTENT) LIKE UPPER('%$search_string%') AND PHOTOS.TAG_ID=TAGS.TAG_ID AND RESTAURANTS_PHOTOS.PHOTO_ID=PHOTOS.PHOTO_ID;");
		$restaurant_pool = array();
		while($restaurant_IDs = mysql_fetch_array($restaurants)){
				$id = $restaurant_IDs['RESTAURANT_ID'];
				if(!contains($id, $restaurant_pool)){
					array_push($restaurant_pool,$id);
				}	
		}
		$restaurant_by_location = mysql_query("SELECT * FROM RESTAURANTS WHERE UPPER(LOCATION) LIKE UPPER('%$search_string%');");
		while($restaurant_IDs = mysql_fetch_array($restaurant_by_location)){
				$id = $restaurant_IDs['RESTAURANT_ID'];
				if(!contains($id, $restaurant_pool)){
					array_push($restaurant_pool, $id);
				}	
		}
		foreach($restaurant_pool as $i){
			//$i = $restaurant_IDs['RESTAURANT_ID'];
			$result = mysql_query("SELECT * FROM PHOTOS,RESTAURANTS_PHOTOS WHERE RESTAURANT_ID = $i AND RESTAURANTS_PHOTOS.PHOTO_ID=PHOTOS.PHOTO_ID;")or die (mysql_error());
			$restaurant_types = mysql_query("SELECT * FROM RESTAURANTS,RESTAURANTS_PREFERENCES,PREFERENCES WHERE RESTAURANTS.RESTAURANT_ID = $i AND RESTAURANTS_PREFERENCES.PREFERENCE_ID = PREFERENCES.PREFERENCE_ID AND RESTAURANTS_PREFERENCES.RESTAURANT_ID = RESTAURANTS.RESTAURANT_ID;");
			$restaurant = mysql_fetch_array($restaurant_types);
				//echo $restaurant['PREFERENCE'];
			$newphrase = str_replace(" ", "_", $restaurant['PREFERENCE']);
			///one block********************************************************************
			echo "<div class='portfolio ",$newphrase,"' data-cat = \"",$newphrase,"\">";
			echo "<div class='portfolio-wrapper'>";
			echo "<ul class='tester' data-orbit>";
			while($row = mysql_fetch_array($result)){
				echo "<li><a  href='restaurant.php?restaurant=$i' data-reveal-id='myModal' data-reveal-ajax='true'><img src='",$row['URL'],"' alt=''/></a>";
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
		}
		
		echo "</div>";
                //*****************************************************************************************
		mysql_close($con);
}
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
