<?php
date_default_timezone_set("Asia/Kolkata");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWS EC2 PHP Website</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            background:linear-gradient(135deg,#1e3c72,#2a5298);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .card{
            width:500px;
            background:#fff;
            border-radius:15px;
            padding:35px;
            text-align:center;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
        }

        .logo{
            font-size:60px;
            margin-bottom:15px;
        }

        h1{
            color:#0d6efd;
            margin-bottom:10px;
        }

        h2{
            color:#198754;
            margin-bottom:20px;
        }

        p{
            font-size:18px;
            color:#444;
            margin:10px 0;
        }

        .info{
            margin-top:20px;
            background:#f5f5f5;
            padding:15px;
            border-radius:10px;
        }

        .footer{
            margin-top:20px;
            color:#777;
            font-size:14px;
        }

        .button{
            display:inline-block;
            margin-top:20px;
            padding:12px 25px;
            background:#0d6efd;
            color:white;
            text-decoration:none;
            border-radius:6px;
        }

        .button:hover{
            background:#084298;
        }
    </style>

</head>
<body>

<div class="card">

    <div class="logo">☁️</div>

    <h1>Welcome to AWS EC2</h1>

    <h2>Apache + PHP Web Server</h2>

    <p><strong>Name:</strong> Vidhya</p>

    <p>Apache and PHP are running successfully.</p>

    <div class="info">
        <p><strong>Server:</strong> Amazon Linux EC2</p>
        <p><strong>Web Server:</strong> Apache (httpd)</p>
        <p><strong>Language:</strong> PHP</p>
        <p><strong>Date:</strong> <?php echo date("d-m-Y"); ?></p>
        <p><strong>Time:</strong> <?php echo date("h:i:s A"); ?></p>
    </div>

    <a href="#" class="button">AWS Cloud Computing</a>

    <div class="footer">
        © 2026 AWS EC2 Practical Assignment
    </div>

</div>

</body>
</html>