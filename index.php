<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWS EC2 PHP Server</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:linear-gradient(135deg,#4facfe,#00f2fe);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            width:500px;
            background:#fff;
            padding:40px;
            border-radius:15px;
            text-align:center;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
        }

        h1{
            color:#007BFF;
            margin-bottom:15px;
        }

        h2{
            color:#28a745;
            margin-bottom:20px;
        }

        p{
            font-size:18px;
            color:#555;
            margin-bottom:15px;
        }

        .footer{
            margin-top:25px;
            font-size:15px;
            color:#777;
        }

        .btn{
            display:inline-block;
            margin-top:20px;
            padding:12px 25px;
            background:#007BFF;
            color:white;
            text-decoration:none;
            border-radius:6px;
            transition:0.3s;
        }

        .btn:hover{
            background:#0056b3;
        }
    </style>

</head>
<body>

<div class="container">

    <h1>Welcome to PHP on AWS EC2</h1>

    <h2>Name: Vidhya</h2>

    <p>Apache Web Server is running successfully.</p>

    <p>PHP is installed successfully.</p>

    <p>Server Time:
        <strong>
            <?php
                date_default_timezone_set("Asia/Kolkata");
                echo date("d-m-Y h:i:s A");
            ?>
        </strong>
    </p>

    <a href="#" class="btn">AWS EC2 PHP Server</a>

    <div class="footer">
        © 2026 AWS Cloud Computing Lab
    </div>

</div>

</body>
</html>