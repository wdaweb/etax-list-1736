<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
             <td><a href="REC.php?id=1">1-2月</a></td>
        </tr>
        <tr>
            <td><a href="REC.php?id=2">3-4月 </a></td>
        </tr>
        <tr>
            <td><a href="REC.php?id=3">5-6月</a></td>
        </tr>
        <tr>
            <td><a href="REC.php?id=4">7-8月</a></td>
        </tr>
        <tr>
            <td> <a href="REC.php?id=5">9-10月</a></td>
        </tr>
        <tr>
            <td><a href="REC.php?id=6">11-12月</a></td>
        </tr>
        <tr>
            <td><a href="index.php?">回首頁</a></td>
        </tr>
           
    </table>
    </div>

    <div class="B">
    <h1>統一發票中獎號碼</h1>
<?php
if(!empty($_GET['id'])){
    $dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
    $pdo=new PDO($dsn,'root','0970431566');
    $id=$_GET['id'];
    $sql="select * from rec where mon='$id'";
// echo $sql;
$rows=$pdo->query($sql)->fetch();
// print_r($rows);


?>
 
<?PHP
    
?>
<form action="REC_.php" method="post">
<table class="lis">
        <tr>
            <td>年度</td>
            <td><?=$rows['year'];?></td>
        </tr>
        <tr>
            <td>期別</td>
            <td><?=$rows['mon'];?></></td>       
            <td>獎金</td>
            
        </tr>
        <tr>
            <td>特別獎</td>
            <td><?=$rows['num1'];?></td>
            <td>1000萬元</td>
        </tr>
        <tr>
            <td>特獎</td>
            <td><?=$rows['num2'];?></td>
            <td>200萬元</td>
        </tr>
        <tr>
            <td rowspan="3">頭獎</td>
            <td ><?=$rows['num3'];?></td>
            <td rowspan="3">20萬元</td>
            <tr>
                <td><?=$rows['num4'];?></td>
                
            </tr>
            <tr>
                <td><?=$rows['num5'];?></td>
                
            </tr>
        <tr>
            <td>二獎</td>
            <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
            <td>4萬元</td>
        </tr>
        <tr>
            <td>三獎</td>
            <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
            <td>1萬元</td>
        </tr>
        <tr>
            <td>四獎</td>
            <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
            <td>4千元</td>
        </tr>
        <tr>
            <td>五獎</td>
            <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
            <td>1千元</td>
        </tr>
        
        <tr>
            <td>六獎</td>
            <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
            <td>2百元</td>
        </tr>
        <tr>
            <td rowspan="2">增開六獎</td>
            <td><?=$rows['num6'];?></td>
            <td rowspan="2">2百元</td>
        </tr>
        <tr>
           
            <td><?=$rows['num7'];?></td>
            
        </tr>
        
        <tr ><br>
            <td colspan="3"> <input type="submit" value="對獎"></td>
            <input type="hidden" name="id" value="<?=$id;?>">
        </tr>
       <tr>
       <td colspan="3"><br>
       <a href="index.php">回首頁</a>
       </td>
       </tr>
    </table>
    </form>
<?PHP

}else{
    ?>
    <table >
    <tr>
            <td>年度</td>
            <td>2019</td>
        </tr>
        <tr>
            <td>月份</td>
            <td>9、10月</td>
            <td>獎金</td>
        </tr>
        <tr>
            <td>特別獎</td>
            <td></td>
            <td>1000萬元</td>
        </tr>
        <tr>
            <td>特獎</td>
            <td></td>
            <td>200萬元</td>
        </tr>
        <tr>
            <td rowspan="3">頭獎</td>
            <td ></td>
            <td rowspan="3">20萬元</td>
            <tr>
                <td></td>
                
            </tr>
            <tr>
                <td></td>
                
            </tr>
        <tr>
            <td>二獎</td>
            <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
            <td>4萬元</td>
        </tr>
        <tr>
            <td>三獎</td>
            <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
            <td>1萬元</td>
        </tr>
        <tr>
            <td>四獎</td>
            <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
            <td>4千元</td>
        </tr>
        <tr>
            <td>五獎</td>
            <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
            <td>1千元</td>
        </tr>
        
        <tr>
            <td>六獎</td>
            <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
            <td>2百元</td>
        </tr>
        <tr>
            <td rowspan="2">增開六獎</td>
            <td></td>
            <td rowspan="2">2百元</td>
        </tr>
        </table>
<?php
}
?>
</div>
</div>
</body>
</html>