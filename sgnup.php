<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sgnup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .container {
            margin: auto;

        }
    </style>
    <title>Sign-Up</title>
</head>
<body class="bg-blue-gradient">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <div class="container signin-div bg-light rounded" style="max-width: 400px; padding: 20px;">
        <h2 align="center">Sign Up</h2>
        <form method="POST" action="insertuser.php">
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" id="Email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <label for="Username" name="user">Username</label>
              <input type="text" class="form-control" id="Username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="Password" name="pass">Password</label>
              <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required>
            </div>
            <br>
			<button style="width: 100%" type="submit" name="submit" class="btn btn-primary rounded"> <a class="text-light" href="index.php"> Sign Up</a></button>
          </form>
    </div>
</body>
</html>