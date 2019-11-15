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
     $array = [] ; 
     for($i=0;$i<4;$i++){
    $str1 = rand(65,65);
    $str2 = rand(65,65);
    $number = rand(1,3);

    //  str_pad (來源字串,要補到幾個字,要補什麼字,從哪裡開始補)
    //  從哪裡開始補 1.左右都補:STR_PAD_BOTH ,2.由左邊開始補:STR_PAD_LEFT , 3.由右邊開始補:STR_PAD_RIGHT
    $number1 =str_pad( $number,8,"0",STR_PAD_LEFT);
    $str3 =$number1;

    $period = rand(4,4);
    $money = rand(1,3);
           
        // $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
        //  $pdo = new pdo($dsn,'root','');
         
        //  $sql  =  "insert into user ( `id`, `number`, `money`, `period`, `year`)
        //  values('null','$str3','$money','$period ','2019')";
        
        //  echo "sql語法是 :".$sql;
          
        
         if(in_array($str3,$array)){
                // $i--;
                echo "ads";
            }else{
                $array[] = $str3;
                // $result=$pdo->query($sql);
            }
        }
            
     
          
        //   $data=$result->fetchAll();
          print_r($array); 
       
    


    
     ?>

</body>
</html>