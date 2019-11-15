<?php


$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root','0970431566');

if(!empty($_POST['mon'])){
$year=$_POST['year'];
 $mon=$_POST['mon'];
 $num1=$_POST['num1'];
 $num2=$_POST['num2'];
 $num3=$_POST['num3'];
 $num4=$_POST['num4'];
 $num5=$_POST['num5'];
 $num6=$_POST['num6'];
 $num7=$_POST['num7'];
 
 
 
 $sql="INSERT INTO `rec`(`id`, `year`, `mon`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`) VALUES 
('','2019','$mon','$num1','$num2','$num3','$num4','$num5','$num6','$num7')";
echo $sql;
$pdo->query( $sql);
header("location:REC.php");
}else{
    echo "";
}
?>

