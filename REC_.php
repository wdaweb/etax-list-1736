<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
 <style>
     
     .A{
            width:700px;
            height:700px;
            border-radius:50%;
            overflow:auto;
     }
 
 </style>
</head>
<body>
<?php
$id=$_POST['id'];
$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root','0970431566');
$sql="SELECT * FROM `rec` WHERE 1";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
//   print_r($row);
// echo $row['num1'];

$sql="SELECT `num` FROM `invo` WHERE mon='$id'";
// echo $sql;
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//  print_r($rows);
// echo $rows[0]['num'];
?>

<div id="bg">
<div class="A">
<table>
<tr>
    <td>2019年度</td>
    
</tr>
<tr>
    <td>第1期</td>

</tr>
</table>


<h1>開始對獎</h1>
<?php
foreach ($rows  as $key) {
    
    if(($row['num1'])==substr($key['num'],2,8)){
        echo "中一千萬";
        echo $key['num'];
        echo "<br>";
    }else if(($row['num2'])==substr($key['num'],2,8)){
        echo "中二百萬";  
        echo $key['num'];
        echo "<br>";
    }else if(($row['num3'])==substr($key['num'],2,8)){

        echo "中20萬";
        echo $key['num'];
        echo "<br>";
    }else if(($row['num4'])==substr($key['num'],2,8)){

        echo "中20萬";
        echo $key['num'];
        echo "<br>";
    }else if(($row['num5'])==substr($key['num'],2,)){

        echo "中20萬";
        echo $key['num'];
        echo "<br>";
    }else if(substr($row['num3'],1,7)==substr($key['num'],3,7) || substr($row['num4'],1,7)==substr($key['num'],3,7)|| substr($row['num5'],1,7)==substr($key['num'],3,7)){
        echo "中二獎";
        echo $key['num'];
        echo "<br>";
    }else if(substr($row['num3'],2,6)==substr($key['num'],4,6) || substr($row['num4'],2,6)==substr($key['num'],4,6)|| substr($row['num5'],2,6)==substr($key['num'],4,6)){
        echo "中三獎";
        echo $key['num'];
        echo "<br>";
    }else if(substr($row['num3'],3,5)==substr($key['num'],5,5)|| substr($row['num4'],3,5)==substr($key['num'],5,5)|| substr($row['num5'],3,5)==substr($key['num'],5,9)){
        echo $key['num'];
        echo "中四獎";
        echo "<br>";
    }else if(substr($row['num3'],4,4)==substr($key['num'],6,4)|| substr($row['num4'],4,4)==substr($key['num'],6,4)|| substr($row['num5'],4,4)==substr($key['num'],6,9)){
        echo $key['num'];
        echo "中五獎";
        echo "<br>";
    }else if(substr($row['num3'],5,3)==substr($key['num'],7,3)|| substr($row['num4'],5,3)==substr($key['num'],7,3)|| substr($row['num5'],5,3)==substr($key['num'],7,9)){
        echo $key['num'];
        echo "中六獎";
        echo "<br>";
    }else if(substr($row['num6'],5,3)==substr($key['num'],7,3)||substr($row['num7'],5,3)==substr($key['num'],7,3)){
        echo $key['num'];
        echo "中六獎";
        echo "<br>";
    }else{
        echo "沒有中獎";
        echo $key['num'];
        echo "<br>";
    }
    }
    
    ?>
    <a href="ind.php" >上一頁</a>

    </div>
</div>
</body>
</html>