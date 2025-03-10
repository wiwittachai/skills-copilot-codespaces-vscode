<?php 
    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(214, 253, 247);
            color: #333;
        }
        header {
            background-color: #5cb85c; /* สีเขียวที่ดูเป็นมิตร */
            color: white;
            padding: 10px 0;
            text-align: center;
            border-bottom: 4px solid #4cae4c;
        }
        .navbar {
            display: flex;
            justify-content: center;
            background-color:rgb(40, 61, 82);
        }
        .navbar a {
            color: white;
            padding: 14px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }
        .navbar a:hover {
            background-color: #4CAF50;
            color: white;
        }
        .container {
            margin: 40px auto;
            max-width: 1000px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1, h2, h3 {
            font-weight: bold;
            color: #333;
        }
        .card {
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #5cb85c;
            color: white;
            text-align: center;
        }
        .card-body {
            padding: 20px;
        }
        .btn-danger {
            background-color: #d9534f;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c9302c;
        }
        .footer {
            background-color: #003366;
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>CareData</h1>
        <p>เว็บไซต์ห้องพยาบาลโรงเรียนขาณุวิทยา</p>
    </header>

    <!-- แถบเมนู -->
    <div class="navbar">
        <a href="medicine_admin.html">คลังยา</a>
        <a href="imageadmin.html">สมาชิกผู้ดูแล</a>
        <a href="bedadmin.html">เตียงนอนพักผ่อน</a>
    </div>

    <div class="container">
        <?php 
            if (isset($_SESSION['admin_login'])) {
                $admin_id = $_SESSION['admin_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="card">
            <div class="card-header">
                <h3>ยินดีต้อนรับแอดมิน <?php echo $row['firstname']; ?></h3>
            </div>
            <div class="card-body">
                <h4>ข้อมูลบัญชี</h4>
                <p><strong>ชื่อ:</strong> <?php echo $row['firstname']; ?> </p>
                <p><strong>อีเมล์:</strong> <?php echo $row['email']; ?></p>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <?php } ?>
        
        <h2 class="mt-4">ยินดีต้องรับสู่ CareData เว็ปไซต์ห้องพยาบาลโรงเรียนขาณุวิทยา ที่จะอัปเดทข้อมูลข่าวสารของสิ่งจำเป็นในห้องพยาบาล</h2>
        <p>เลือกแถบเมนูต่างๆ ด้านบนตามที่ต้องการจะศึกษา</p>
    </div>

</body>
</html>
