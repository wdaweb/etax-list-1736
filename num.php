<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>各期發票列表</title>
    <link rel="stylesheet" href="./css/style.css">
<style>
    body{
        font-size:1.2em;
    }
</style>
</head>
<body>
 
<div id="bg">
<div class="A">
<table>
        <tr>
             <td><a href="num.php?id=1">1-2月</a></td>
        </tr>
        <tr>
            <td><a href="num.php?id=2">3-4月 </a></td>
        </tr>
        <tr>
            <td><a href="num.php?id=3">5-6月</a></td>
        </tr>
        <tr>
            <td><a href="num.php?id=4">7-8月</a></td>
        </tr>
        <tr>
            <td> <a href="num.php?id=5">9-10月</a></td>
        </tr>
        <tr>
            <td><a href="num.php?id=6">11-12月</a></td>
        </tr>
        <tr>
            <td><a href="ind.php?">回首頁</a></td>
        </tr>
           
    </table>
    </div>
    <div class="B">
    <h1>各月份發票明細</h1>
<?php

if(!empty($_GET['id'])){
    $id=$_GET['id'];
 
// echo $id;
$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root','0970431566');
$sql="select * from invo where mon='$id'";
$rows=$pdo->query($sql)->fetchAll();
// echo $sql;
?>
<table>
    <tr>
        <td>年分</td>
        <td>期別</td>
        <td>發票號碼</td>
        <td>發票金額</td>
    </tr>
<?php foreach($rows AS $rec){
        ?>
    <tr>
        <td><?=$rec['year'];?></td>
        <td><?=$rec['mon'];?></td>
        <td><?=$rec['num'];?></td>
        <td><?=$rec['money'];?></td>
    </tr>
    <?php
    }
    }else{
    ?>
        <table>
        <tr>
            <td>年分</td>
            <td>期別</td>
            <td>發票號碼</td>
            <td>發票金額</td>
        </tr>
</table>
<?php
}
?>
</div>
</div>
</body>
</html>