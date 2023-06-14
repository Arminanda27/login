<?php
include "connection.php";

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $query = "call login('$username','$password')";
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);
}   
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['level'] == 'user'){
        #code
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['user'];
        header('location: welcome.php');
        }
        if($row['level'] == 'admin'){
        #code
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['admin'];
        header('location: welcome.php');

    }if($row['level'] == 'SuperAdmin'){
        #code
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['user'];
        header('location: welcome.php');
    }
    else{
        echo "<script>alert('username atau password salah, silahkan isi ulang')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        body {
            font-family:sans-serif;
            background-image: url("./image/img-login.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kotak_login {
            width: 350px;
            background: #6290c8;
            margin: 80px auto;
            padding: 30px 20px;
            border-radius: 30px;
        }
        .judul {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            color: white;
            font-size: 18pt;
        }
        .input_form {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
            border-color: #1d3461;
            border-radius: 10px;       
        }
        .tombol_login {
            background-color: #1f487e;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 10px;
            padding:10px 20px ;
        }
        .link {
            color: white;
            text-decoration: none;
            font-size: 11pt;
        }
        .text{
            text-align: center;
        }

    </style>
</head>
<body>
    <!--<div class="background"> -->
        <div>
            <h4 style="color: red;"><?= $_SESSION['error'] ?></h4>
        </div>
        <div class="kotak_login">
            <p class="judul">Silahkan Login</p>
   
            <form action="" method="post">

                <input class ="input_form" type="text" placeholder="Username" name="username" required>
                <br><br>
                <input class ="input_form" type="password" placeholder="Password" name="password" required>
                <br><br>
                <button class="tombol_login" name="submit" class="btn">Login</button>

            </form>
        </div>

        <img src="/asset/img/sintetis.jpeg" alt="">
     <!-- </div> -->
</body>
</html>