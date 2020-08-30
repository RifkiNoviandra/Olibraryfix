<?php
include "connection.php";

        if (isset($_POST['submit'])) {
            $email=$_POST['email'];
            $username=$_POST['username'];
            $pass= $_POST['password'] ;
            $kirim=$_POST['submit'];

                
            $num = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM `user` WHERE ( `username` = '".$_POST['username']."' )"));

            if ($num == True){
                echo "udah dipakai usernamenya zeyenk";
            }else{
                $query="INSERT INTO user (email, username, password) VALUES ('$email', '$username','$pass')";
                mysqli_query($koneksi, $query);
                header('location:index.php');
            }
            
        }
        ?>
    </body>
</html>
<?php
echo "<a href='sgnup.php'>Daftar</a>";
?>