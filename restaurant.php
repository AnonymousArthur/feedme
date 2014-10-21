<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/baguettebox.min.css">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
<script src="js/baguetteBox.js"></script>
<style type="text/css">
</style>
</head>
<body>
<?php
	$restaurant_ID = $_GET['restaurant'];
	$photo_ID = $_GET['photo'];
	
	$DB_PASSWORD='1235789zyc';
	$con = mysql_connect("localhost","root",$DB_PASSWORD);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }			
	
	mysql_select_db("fmDB", $con);
	
	//For testing
	//$restaurant_ID = 6;
?>
<div class="restaurant-container">
	<div class="restaurant-info">
	<?php
		$restaurant_query = mysql_query("SELECT * FROM RESTAURANTS WHERE RESTAURANT_ID = $restaurant_ID;");
		while($restaurant = mysql_fetch_array($restaurant_query)){
			echo "<h1>",$restaurant["RESTAURANT_NAME"],"</h1>";
			echo "<p class='restaurant-location'><a class='restaurant-location' href='locationTutorial.php'>",$restaurant["LOCATION"],"</a><p>";
			echo "<p class='restaurant-trade-time'>",$restaurant["OPENING_HOUR"],"<p>";
		}
	?>	
	</div>
	<div class="photo-detail-container">
		<div class="baguetteBoxOne gallery">
			<?php	
					$result = mysql_query("SELECT * FROM PHOTOS,RESTAURANTS_PHOTOS WHERE RESTAURANT_ID = $restaurant_ID AND RESTAURANTS_PHOTOS.PHOTO_ID=PHOTOS.PHOTO_ID;");
					while($row = mysql_fetch_array($result))
					 {
			            echo "<a href='",$row['URL'],"' title=",$row['INFORMATION'],"><img src='",$row['URL'],"' height='500px'/></a>";        
					}
			 ?>
		</div>
	</div>
</div>
<script src="js/baguetteBox.js"></script>
<script type="text/javascript">
baguetteBox.run('.baguetteBoxOne', {
    animation: 'slideIn',
    async: true
});
</script>
<?php
	mysql_close();
?>
</body>
</html>
