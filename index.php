<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
</head>
<body>
    <h1 style="text-align: center;">Narongsak's Webboard</h1>
    <hr>
    <form>
    หมวดหมู่: 
        <select name="category">
        <option value="All">--ทั้งหมด--</option>
        <option value="General">เรื่องทั่วไป</option>
        <option value="Study">เรื่องเรียน</option>
        </select>
        <a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
    </form>
    <ul>
        <?php
            for($i = 1; $i<=10; $i++){
                echo "<li><a href=post.php?id=$i>กระทู้ที่ $i </a></li>";
            }
        ?>
    </ul>
</body>
</html>