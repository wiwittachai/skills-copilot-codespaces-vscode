<?php 
    session_start();
    require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก - ระบบพยาบาล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #e3f2fd; /* สีฟ้าอ่อน */
            font-family: 'Arial', sans-serif;
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #42a5f5; /* ฟ้าเข้ม */
            border: none;
        }
        .btn-primary:hover {
            background-color: #1e88e5;
        }
        h3 {
            color: #1976d2;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .alert {
            font-size: 14px;
        }
        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3><i class="fa-solid fa-user-nurse"></i> สมัครสมาชิก</h3>
        <hr>
        <form action="signup_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger"><i class="fa-solid fa-circle-exclamation"></i> <?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success"><i class="fa-solid fa-check-circle"></i> <?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning"><i class="fa-solid fa-exclamation-triangle"></i> <?php echo $_SESSION['warning']; unset($_SESSION['warning']); ?></div>
            <?php } ?>

            <div class="mb-3">
                <label class="form-label"><i class="fa-solid fa-user"></i> First name</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fa-solid fa-user"></i> Last name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fa-solid fa-envelope"></i> Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fa-solid fa-lock"></i> Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fa-solid fa-lock"></i> Confirm Password</label>
                <input type="password" class="form-control" name="c_password" required>
            </div>
            <button type="submit" name="signup" class="btn btn-primary w-100"><i class="fa-solid fa-user-plus"></i> Sign Up</button>
        </form>
        <hr>
        <p class="footer-text"><center><h4>เป็นสมาชิกแล้วใช่ไหม? คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</h4></a></center></p>
    </div>

</body>
</html>
