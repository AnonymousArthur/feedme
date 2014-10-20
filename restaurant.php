<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/css/foundation.css">
<link rel="stylesheet" href="css/layout.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/vendor/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/foundation.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/foundation/foundation.clearing.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/vendor/modernizr.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.6/js/foundation/foundation.orbit.js"></script>
<script>
$(document).ready(function(){
$(document).foundation({
  orbit: {
    animation: 'slide',
    timer_speed: 1000,
    pause_on_hover: true,
    animation_speed: 500,
    navigation_arrows: true,
    bullets: false
  }
});
});
</script>
</head>
<body>
<div class="restaurant-container">

<ul class="example-orbit" data-orbit>
  <li class="active">
    <img src="img/Classic Kebab/Kebab.jpg" alt="slide 2" />
    <div class="orbit-caption">
      Caption Two.
    </div>
  </li>
  <li>
    <img src="img/Classic Kebab/Pizza.jpg" alt="slide 3" />
    <div class="orbit-caption">
      Caption Three.
    </div>
  </li>
  <li>
    <img src="img/Classic Kebab/Gozleme.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Caption One.
    </div>
  </li>


</ul>
<!--<ul class="example-orbit-content" data-orbit>
  <li data-orbit-slide="headline-1">
    <div>
      <h2>Headline 1</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-2">
    <div>
      <h2>Headline 2</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-3">
    <div>
      <h2>Headline 3</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
</ul>
</div>-->

</body>
</html>