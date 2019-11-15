<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>統一發票兌獎</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    
    </style>
</head>
<body> 
<?php
?>
<div id="bg">
<div class="A">
            <table>
                <tr>
                    <td><a href="num.php">當期發票</a></td>
                </tr>
                <tr>
                    <td><a href="REC.php">對&emsp;&emsp;獎</a></td>   
                </tr>
                <tr>
                    <td><a href="win.php">輸入獎號</a></td>
                </tr>
            </table>
        </div>
    <div class="B">
        <h1>統一發票輸入</h1>
        <form action="index_api.php" method="POST" >
            <table>
                <tr>
                    <td>年&emsp;&emsp;份</td>
                    <td><input type="text" name="year" id="year" ></td>
                </tr>
                <tr>
                    <td>期&emsp;&emsp;別</td>
                    <td><select name="mon" id="mon">
                        <option value="1">1-2月</option>
                        <option value="2">3-4月</option>
                        <option value="3">5-6月</option>
                        <option value="4">7-8月</option>
                        <option value="5">9-10月</option>
                        <option value="6">11-12月</option>
                    </select></td>
                </tr>
                <tr>
                    <td>發票號碼</td>
                    <td><input type="text" name="num" id="num"></td>
                </tr>
                <tr>
                    <td>發票金額</td>
                    <td><input type="text" name="money" id="money"></td>
                </tr>
                <tr>
                    <td colspan="2"><br><br>
                    <input type="submit" value="送出" class="inpu">
                    
                    </td>
                </tr>
            </table>
        </form>
    </div>
        
    </div>
</body>
</html>
