<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root','0970431566');
for($i=1;$i<=3;$i++){
    $mon=rand(1,6);
    $money=rand(1,300);
    $num=rand(65,90);
    $a=chr($num);
    $num1=rand(65,90);
    $b=chr($num1);
    // echo $b,$a;
    $num2=rand(1,99999999);
    // echo $num2;
    echo "<br>";
    $num2 = str_pad($num2,8,'0',STR_PAD_LEFT);
    // echo $num2;
    $number=[];
    if(in_array($num2,$number)){
        $i--;
    }else{
        
        $string=$a.$b.$num2;
        $number[]=$num2;
        $sql="INSERT INTO `invo`( `year`, `mon`, `num`, `money`) VALUES ('2019','$mon','$string','$money')";
        $pdo->exec($sql);
        echo $sql;
    }
}
echo "<br>";


?>
</body>
</html>
