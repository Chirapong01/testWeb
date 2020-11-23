<?php 
  session_start();
  include '../connectdb.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>เข้าสู่ระบบ</title>
        <link href="../style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <form action="../login/login.php">
            <h> เข้าสู่ระบบคลังสินค้า </h><br>
            <br><label> กรุณากรอกเบอร์โทร</label></br>
            <input type="text" name="tel" required autofocus><br>
            <br><input type="submit" value="เข้าสู่ระบบ" ><br>
            </form>
            <form action="../regis/from_regis.php">
            <br><input type="submit" value="ลงทะเบียนพนักงาน"><br>
            </form>
        </div>
  <?php
  if(!empty($_GET)){
    $Tel = $_GET['tel'];
    $result = $pdo->query("select*from employee");
    while ($row = $result->fetch()){
        if($row['Tel'] == $Tel){
           $_SESSION['name'] = $row['fname'];
           header("Location: ../stock/main_page.php?warehouse=A01");
        }
    }
 }
  ?>
    </body>
</html>
