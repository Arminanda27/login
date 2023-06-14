<?php
    session_start();
    if($_SESSION['level'] = ""){
        header('location: index.php');
    }
?>
<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        
        .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: #1f487e;
            margin: 0 ;
            padding: 0;       
        }
        
        .menu-list {
            float: left;
        }

        .menu-list a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 24px;
        }

        .menu-list a:hover {
            background-color: #1d3461;
        }

        .jumbotron {
            padding: 30px;
        }

        .container {
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
        }
        .jumbotron .container{
            max-width: 100%;
            background-color: #6290c0;
        }

        .jumbotron h1{
            text-align: center;
            color: white;
            font-family: 'raleway', helvetica, arial, sans-serif;
            font-weight: 600;
            font-size: 60px;
            text-transform: uppercase;
            text-align: center;
        }

        .jumbotron p{
            text-align: center;
            color: white;
            font-family: 'raleway', helvetica, arial, sans-serif;
            font-weight: 600;
            font-size: 35px;
            text-transform: uppercase; 
        }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"><a href="./form/pendaftar.php">Daftar</a></li>
        <li class="menu-list"><a href="./logout.php">Logout</a></li>
    </ul>
    <div class="jumbotron">
        <div class="container">
        <h1>Hello <?php echo strtoupper($_SESSION['username']) ?>!</h1>
        <p>How are u today? ;D</p>
        </div>
    </div>
</body>
</html