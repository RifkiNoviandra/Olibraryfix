<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="OLibrarycss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}
.mySlides {display: none;}
img.gambar
{
	vertical-align: middle;
	max-width: 100%;
	max-height: 500px ; 
}
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

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
</head>
<body>
<a href="index.php" style="text-decoration: none ; color: black ;" class="tutup" onclick="tutup_navigasi()">(&times;)Kembali</a>
<div class="slideshow-container" style="margin-top: 30px ;">
<div class="mySlides fade">
  <img class="gambar" src="LRM_EXPORT_414269802913365_20190412_105047118.jpeg" style="width:100%">
</div>

<div class="mySlides fade">
  <img class="gambar" src="gambar-buku-hd.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img class="gambar" src="contoh-gambar-buku.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center ; margin-bottom: 30px ;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div style="font-size: 40px ; text-align: center;"><b>Profil Perpustakaan</b></div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>