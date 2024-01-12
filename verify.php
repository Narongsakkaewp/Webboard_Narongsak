<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veriify</title>
</head>
<body>
    <h1 style="text-align: center;">Narongsak's Webboard</h1>
    <hr>
    <div style="text-align: center;">
    <?php
    $login= $_POST["login"];
    $pwd= $_POST["pwd"];
    if($login=="admin" && $pwd=="ad1234"){
        echo "ยินดีต้อนรับคุณ ADMIN <br>";
    }elseif($login=="member" && $pwd=="mem1234"){
        echo "ยินดีต้อนรับคุณ MEMBER <br>";
    }else{
        echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง<br>";
    }

    /*echo "เข้าสู่ระบบด้วย <br>";
    echo "Login = $_POST[login]<br>";
    echo "Password = $_POST[pwd]<br>"; //สามารถใช้แบบนี้ได้ โดยไม่ต้องเปิดแท็ก php ประจำ
    */
    ?>
    <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>