<!DOCTYPE html>
<html>
<head>
	<title>OLibrary</title>
	<link rel="stylesheet" type="text/css" href="OLibrarycss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
	<div class="kotak ">
		<div class="kotak1">
		<div id="OLibrary_sidenav" class="navigasi">
  			<a href="javascript:void(0)" class="tutup" onclick="tutup_navigasi()">&times;</a>
  			<a href="index.html">Home</a>
  			<a href="Olibrary2.html">Buku</a>
  			<a href="Olibrary_profil.html">Profil</a>
		</div>
		<span class="segaris margin1 slideInUp" style="font-size :40px ; cursor:pointer" onclick="buka_navigasi()">&#9776;</span>
		</div>
	</div>
  <div class="kotak3">
    <a href="Olibrary2.php"><div class="kotakbuku segaris" onclick="">Buku</div></a>
    <a href="Olibrary_profil.php"><div class="kotaktentang segaris" onclick="">Tentang</div></a>
  </div>
    <div class="footer">    
      <div class="footer1 " style="float: left;">
        <center>
        <a href=""><img src="icon.jpg"></a>
        </center>
      </div>
      <div class="footer2 paddingft2 " style="margin-right: 20px ;">
        <p class="tulisan2" style="cursor: default;"> Profil </p>
        <p class="tulisan3"> Tentang </p>
        <p class="tulisan3"> ... </p>
        <p class="tulisan3"> ... </p>
      </div>
      <div class="footer2" style="float: right; margin-top: 40px">
        <img src="... .jpg"><br>
        <a>Rnoviandra3@gmail.com</a>
      </div>
    </div>

	<script>
		function buka_navigasi() 
		{
  			document.getElementById("OLibrary_sidenav").style.width = "250px";
  			document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}
		function tutup_navigasi() 
		{
 			document.getElementById("OLibrary_sidenav").style.width = "0";
 			document.body.style.backgroundColor = "white";
		}
	</script>
</body>
</html>