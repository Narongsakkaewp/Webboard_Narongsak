
<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1 style="text-align: center;">Register</h1>
    <hr>
    <form action="">
        <table style="border: 2px solid black; width: 45%;" align="center">
            <tr>
                <td colspan="2" style="background-color: #6CD2FE;">กรอกข้อมูล</td>
            </tr>
            <tr>
                <td>ชื่อบัญชี: </td>
                <td> <input type="text" name="login" size="50"> </td>
            </tr>
            <tr>
                <td>รหัสผ่าน: </td>
                <td> <input type="password" name="pwd" size="50"> </td>
            </tr>
            <tr>
                <td>ชื่อ-นามสกุล: </td>
                <td><input type="password" name="pwd" size="50"> </td></td>
            </tr>
            <tr>
                <td>เพศ: </td>
                <td><input type="radio" name="gender" value="male">ชาย <br>
                    <input type="radio" name="gender" value="female">หญิง <br>
                    <input type="radio" name="gender" value="other">อื่น ๆ <br>
                </td>
            </tr>
            <tr>
                <td>อีเมล: </td>
                <td><input type="email" name="email" size="50"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" value="สมัครสมาชิก"> </td>
            </tr>
        </table>
        <br>
        <div style="text-align: center;">
            <a href="index.php">กลับไปหน้าหลัก</a>
        </div>
</body>

</html>