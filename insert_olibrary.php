<?php 
include "connection.php";
@$email = $_POST['email'] ;
@$password = $_POST['psw'];
@$kirim= $_POST['signup'];
@$query= "INSERT INTO user VALUES('','$email','$password')" ;
 ?>