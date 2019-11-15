<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
  <style>
  B{
    position:relative;
  }
    </style>
  <style>
  .A{
    width:500px;
    height:500px;
    border-radius:50%;
  }
  .right{
    position:relative;top:50%;
  }
  table{
    width:80%;
    height:10%;
    border:3px solid white;
    color:white;
    border-radius: 5%;
  }
  
  </style>
</head>
<body>
<div id="bg">
<?php
  $year=$_POST['year'];
 $mon=$_POST['mon'];
 $num=$_POST['num'];
 $money=$_POST['money'];

$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root','0970431566');

$sql="INSERT INTO `invo`( `year`, `mon`, `num`, `money`) VALUES ('$year','$mon','$num','$money')";
// echo $sql;
$pdo->exec($sql);
if(!empty($_POST['year'])||(!empty($_POST['mon']))){
?>
<div class="A" border="1">
<h1>輸入發票明細</h1>
<table>
  <tr>
      <td>年分</td>
      <td>期別</td>
      <td>發票號碼</td>
      <td>發票金額</td>
  </tr>    
  <tr>
      <td><?=$_POST['year']?></td>
      <td><?=$_POST['mon'];?></td>
      <td><?=$_POST['num'];?></td>
      <td><?=$_POST['money'];?></td>
  </tr>
 
  <div class="right">
  <a href="index.php">繼續輸入</a>
  </div>
</table>
<?php
}else{
  echo "";
}
?>
</div>
</div>
</body>
</html>


