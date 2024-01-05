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
    เข้าสู่ระบบด้วย<br>
    Login = <?php echo $_POST['login']?> <br>
    Password = <?php echo $_POST['pwd']?> <br> <br>

    <?php
    /*echo "เข้าสู่ระบบด้วย <br>";
    echo "Login = $_POST[login]<br>";
    echo "Password = $_POST[pwd]<br>";
    */ //สามารถใช้แบบนี้ได้ โดยไม่ต้องเปิดแท็ก php ประจำ
    ?>
    </div>
</body>
</html>