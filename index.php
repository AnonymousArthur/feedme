<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FeedMe</title>

<link type="text/css" rel="stylesheet" href="css/layout.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
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
  $(".dropdown-menu li a").click(function(){
    $(".btn:first-child").text($(this).text());
     $(".btn:first-child").val($(this).text());
  });
});	
</script>
</head>
<body>
<br></br>
<div class="container">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Location <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#"><span class="filter" data-filter="app">Upper Campus</span></a></li>
    <li><a href="#"><span class="filter" data-filter="icon">Middle campus</span></a></li>
    <li><a href="#"><span class="filter" data-filter="card">Lower campus</span></a></li>
    <li class="divider"></li>
    <li><a href="#"><span class="filter active" data-filter="app card icon logo web">All</span></a></li>
  </ul>
</div>

<!
***********************************************************************************************
since we have no database right now, just list them one by one
>	
	<div id="portfoliolist">
		<div class="portfolio logo" data-cat="logo">
			<div class="portfolio-wrapper">
				<img src="img/portfolios/logo/5.jpg" alt="" />
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


</body>
</html>
