<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #e3f2fd; /* สีฟ้าอ่อน */
            font-family: 'Arial', sans-serif;
            text-decoration: none;
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }
        .btn-primary {
            background-color: #42a5f5; /* ฟ้าเข้ม */
            border: none;
            text-decoration: none;
        }
        .btn-primary:hover {
            background-color: #1e88e5;
            text-decoration: none;
        }
        h3 {
            color: #1976d2;
            text-align: center;
            margin-bottom: 20px;
            text-decoration: none;
        }
        .form-label {
            font-weight: bold;
            text-decoration: none;
        }
        .alert {
            font-size: 14px;
            text-decoration: none;
        }
        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3 class="mt-4">เข้าสู่ระบบ</h3>
        <hr>
        <form action="signin_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
        </form>
        <hr>
        <p><center><h4>ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่เพื่อ <a href="index.php">สมัครสมาชิก</a></h4></center></p>
    </div>
    
</body>
</html>