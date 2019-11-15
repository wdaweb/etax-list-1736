
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    .B{
        position:relative;top:50px;
    }
    </style>
</head>
<body>
    <div id="bg">
        <div class="B">
<form action="win_.php" method="post">
    <table>
    <h1>統一發票中獎名單</h1>
        <tr>
            <td>年度</td>
            <td >  <input type="text" name="year"> </td>
        </tr>
        <tr>
            <td>月份</td>
            <td>
                <select name="mon" id="">
                    <option value="1">1、2月</option>
                    <option value="2">3、4月</option>
                    <option value="3">5、6月</option>
                    <option value="4">7、8月</option>
                    <option value="5">9、10月</option>
                    <option value="6">11、12月</option>
                </select>
                <td>獎金</td>
            </td>
        </tr>
        <tr>
            <td>特別獎</td>
            <td> <input type="text" name="num1"> </td>
            <td>1000萬元</td>
        </tr>
        <tr>
            <td>特獎</td>
            <td> <input type="text" name="num2"> </td>
            <td>200萬元</td>
        </tr>
        <tr>
            <td rowspan="3">頭獎</td>
            <td > <input type="text" name="num3"></td>
            <td rowspan="3">20萬元</td>
            <tr>
                <td><input type="text" name="num4"></td>
                
            </tr>
            <tr>
                <td><input type="text" name="num5"></td>
                
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
            <td> <input type="text" name="num6"> </td>
            <td rowspan="2">2百元</td>
        </tr>
        <tr>
           
            <td> <input type="text" name="num7"> </td>
            
        </tr>
        
        <tr ><br>
            <td colspan="3"> <input type="submit" value="送出" class="inpu"></td>
            
        </tr>
       <tr>
       <td colspan="3"><br>
       <a href="ind.php">回首頁</a>
       </td>
       </tr>
    </table>
    </form>
    </div>
    </div>
</body>
</html>