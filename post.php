<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 style="text-align: center;">Narongsak's Webboard</h1>
    <hr>
    <div style="text-align: center;">
    <?php
    echo "<p><center>ต้องการดูกระทู้หมายเลข $_GET[id]</center></p><br>";
    ?>

    <table style="border: 2px solid black; width: 40%;" align="center">
    <tr> <td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td> </tr>
    <tr> <td><form> <textarea name="message" rows="20" cols="50"></textarea></form> </td> </tr>
    <tr> <td colspan="2" align="center"> <input type="submit" value="ส่งข้อความ"> </td> </tr>
    </table>
    <a href="index.html">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>