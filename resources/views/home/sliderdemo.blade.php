<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<h2>Otomatik Geçişli Slider Yapımı</h2>
<p>Resimler 2 Saniye'de bir değişmektedir.</p>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="http://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
  <div class="text">Sldier 1 Yazı Alanı</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="http://www.w3schools.com/howto/img_fjords_wide.jpg" style="width:100%">
  <div class="text">Sldier 2 Yazı Alanı</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="http://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
  <div class="text">Sldier 3 Yazı Alanı</div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

    <script> 
        let slideIndex = 0;
        showSlides();
        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex> slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); // Bu alandan resimlerin geçiş süresini değiştirebilirsiniz.
    }
        </script>