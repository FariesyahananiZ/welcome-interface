<!DOCTYPE html>
<html>
<title>Insurance Plan Recommendation System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:18px;width:18px;padding:0;margin-top:6px}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="https://www.zurich.com.my/en/about-zurich" class="w3-button w3-block">About Us</a>
    </div>
    <div class="w3-col s3">
      <a href="https://www.zurich.com.my/en/takaful-products/top-family-takaful-products-to-choose-from" class="w3-button w3-block">Takaful Products</a>
    </div>
     <div class="w3-col s3">
      <a href="{{ route('login') }}" class="w3-button w3-block">Login</a>
    </div>
     <div class="w3-col s3">
      <a href="{{ route('register') }}" class="w3-button w3-block">Register</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-center w3-panel">
    <h1><b>Insurance Plan Recommendation System</b></h1>
    <p>Zurich Takaful</p>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img       src="https://www.zurich.com.my/-/media/project/zwp/malaysia/images/components/carousel-slide/image_slider_mzl_desktop.jpg?la=en&mw=1450&rev=fead12179a55425298842c337ccbaed7&hash=741E1A7D4F2E7A6B7081C5493C29DF44" style="width:100%">
     
    </div>
    <div class="w3-display-container mySlides">
      <img src="https://www.zurich.com.my/-/media/project/zwp/malaysia/images/components/carousel-slide/image_medical-ihp_desktop.jpg?la=en&mw=1450&rev=b9465ba31a944011a501233747446531&hash=B1E10A88475A90E048A8414DFE1DF4C3" style="width:100%">
      
    </div>
    <div class="w3-display-container mySlides">
      <img src="https://www.zurich.com.my/-/media/project/zwp/malaysia/images/components/carousel-slide/carousel_covid19_desktop.jpg?la=en&mw=1450&rev=28bf1590d2ca4284b66f8e7e913e0eaf&hash=1603BBF4F32DBF78CF2F03D2C03A60F6" style="width:100%">
      
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Find Us</span>
    </div>
    <div class="w3-container">
    <div class="w3-display-container">
      <img src="https://www.zurich.com.my/-/media/project/zwp/malaysia/images/customer-hub/hero-banners/image_hero_banner_locate-a-branch.jpg?la=en&w=1250&hash=E4C684F136BA85F95D1B420243EE4695" style="width:100%">
     
    </div>
  </div>
  
  <!-- Grid -->
  <div class="w3-center w3-row-padding" id="plans">
  <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
    </div>
	<div class="w3-center w3-col 100 m6 w3-light-grey w3-container w3-padding-30">
      <h3>Our Head office</h3>
      <p><b>Zurich General Insurance Malaysia Berhad<br>
		 Zurich General Takaful Malaysia Berhad<br>
		 Zurich Life Insurance Malaysia Berhad<br>
		 Zurich Takaful Malaysia Berhad</b>
		<br>
         Level 23A, Mercu 3,
         No. 3, Jalan Bangsar, KL Eco City,
         59200 Kuala Lumpur, Malaysia</p>
       </div>
    <div class="w3-center w3-col 40 m6 w3-grey w3-container w3-padding-28">
      <h3>Our Call Centre</h3>
      <p><br>Call us at <b>1-300-888-622</b> (within Malaysia) <br> <br> or 
      <br> <br>
      <b>+603-2109-7999</b> (outside Malaysia).</p>
    
    </div>
     </div>
    

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
