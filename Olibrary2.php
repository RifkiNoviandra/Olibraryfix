<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="OLibrarycss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="kotak_1">
		<div class="kotak1">
		<div id="OLibrary_sidenav" class="navigasi">
  			<a href="javascript:void(0)" class="tutup" onclick="tutup_navigasi()">&times;</a>
  			<a href="index.php">Home</a>
  			<a href="Olibrary2.php">Buku</a>
  			<a href="Olibrary_profil.php">Profil</a>
		</div>
		<span class="segaris margin1 slideInUp" style="font-size :40px ; cursor:pointer" onclick="buka_navigasi()">&#9776;</span>
	<center>
      <b><p class="slideInUp" style="font-size: 3em ; padding-left: 100px ; padding-right: 100px ; color: #010059 ; cursor: default;">Mulailah Membaca Dan Temukan Pengetahuan Lebih Banyak Untuk Kemajuan Masa Depanmu.</p></b>
      <form class="example slideInUp" >
      <input type="text" style="width: 80% ; height: 40px ;" placeholder="Cari Buku atau Genre..." name="search">
      <button type="submit" style="height: 50px; cursor: pointer;"><i class="fa fa-search"></i></button>
      </form>
   </center>
    </div>
</div>
    <center>
    <div style="margin-bottom: 30px ; ">
    	<p style="font-size: 60px ; color: red ;"><b>Daftar Rekomendasi Buku Perpustakaan</b></p>
    </div>
  <div class="kotak3">
  <a href="">
    <div class="kotak4 segaris">
      <center>
      <div class="kotak5">
        <img class="gambar1" src="book.jpg">
      </div>
      <div>
      	<p>a</p>
      </div>
    </center>
    </div>
  </a>
  <a href="">
    <div class="kotak4 segaris">
      <center>
      <div class="kotak5">
        <img class="gambar1" src="book.jpg">
      </div>
      <div>
      	<p>a</p>
      </div>
    </center>
    </div>
  </a>
  <a href="">
    <div class="kotak4 segaris">
      <center>
      <div class="kotak5 ">
        <img class="gambar1" src="book.jpg">
      </div>
    </center>
   	 <div>
      	<p>a</p>
      </div>
    </div>
  </div>
  </a>
  <a href="">
  <div class="kotak4 segaris">
      <center>
      <div class="kotak5">
        <img class="gambar1" src="book.jpg">
      </div>
    </center>
      <div>
      	<p>a</p>
      </div>
    </div>
    </a>
    <a href="">
    <div class="kotak4 segaris">
      <center>
      <div class="kotak5">
        <img class="gambar1" src="book.jpg">
      </div>
    </center>
      <div>
      	<p>a</p>
      </div>
    </div>
    </a>
    <a href="">
    <div class="kotak4 segaris">
      <center>
      <div class="kotak5">
        <img class="gambar1" src="book.jpg">
      </div>
      <div>
      	<p>a</p>
      </div>
    </center>
    </div>
    </a>
</center>
    <div style="margin-bottom: 30px ; ">
    	<p style="font-size: 60px ; color: red ; text-align: center;"><b>Daftar Genre</b></p>
    	<div style="width: 100% ; text-align: center; background-color: black ; font-size: 50px ; margin-bottom: 20px ; color: white ;">FIKSI</div>
    	<div class="kotakgenre">
    		<div class="kotakgenre2 segaris" onclick="">
    		Horror	
    		</div>
    		<div class="kotakgenre2 segaris" onclick="">
    		Fantasi	
    		</div>
    		<div class="kotakgenre2 segaris" onclick="">
    		Sci-fi	
    		</div>    		
    		<div class="kotakgenre2 segaris" onclick="">
    		Romance	
    		</div>
    		<div class="kotakgenre2 segaris" onclick="">
    		Humor	
    		</div>
    		<div class="kotakgenre2 segaris" onclick="">
    		Misteri	
    		</div>
    		<div class="kotakgenre2 segaris" onclick="">
    		Petualangan	
    		</div>
    	</div>
    	<div style="width: 100% ; text-align: center; background-color: black ; font-size: 50px ; margin-bottom: 20px ;margin-top: 20px ; color: white ;">NON-FIKSI</div>
    	<div class="kotakgenre">
    		<div class="kotakgenre2 segaris" onclick="">
    		Biografi	
    		</div>
    		<div class="kotakgenre2 segaris" onclick="">
    		Ensiklopedia	
    		</div>
    		<div class="kotakgenre2 segaris" onclick="">
    		Kamus	
    		</div>    		
    		<div class="kotakgenre2 segaris" onclick="">
    		Jurnal	
    		</div>
    		<div class="kotakgenre2 segaris" onclick="">
    		Filsafat	
    		</div>
    </div>
</body>
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
</html>