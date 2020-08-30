<?php
    session_start();
    include "connection.php";

    if (isset($_POST['submit'])){
        $username_login = $_POST['username'];
        $password_login = $_POST['password'];

        $query = "select * from user";
        $hasil = mysqli_query($koneksi, $query);

        while($data = mysqli_fetch_array($hasil)) {
            if ($username_login == $data['username'] && $password_login == $data['password']){
                $_SESSION["loggedin"] = true;
                $_SESSION["id_user"] = $data["id_user"];
                $_SESSION["username"] = $username_login;
                $_SESSION["password"] = $password_login;

                echo $_SESSION["username"]."<br>";
                echo $_SESSION["password"];
                
                header('location:home.php');
            }else{
                echo "Error";
            }
        }
    }
?>