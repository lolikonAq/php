<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='style.css'>
<title>Calculator</title>
</head>
<body>
<form action="/result.php"  >
<p>Введите число a= <br><input type="text" name="numb1"></p>
<p><input name="operation" type="radio" value="+">+</p>
<p><input name="operation" type="radio" value="-">-</p>
<p><input name="operation" type="radio" value="*">*</p>
<p><input name="operation" type="radio" value="/">/</p>
<p>Введите число b= <br><input type="text" name="numb2"></p>
<input type="submit" value="Ответ">
</form>
</body>
</html>
<?php

$n1=$_GET['numb1'];
$n2=$_GET['numb2'];
$temp= $n1.' '.$_GET['operation'].' '.$n2.' = ';
return $temp;
 
switch($_GET['operation'])
{
    case '+':
        $res = $n1+$n2;
    break;
    case '-':
        $res = $n1-$n2;
    break;
    case '*':
        $res = $n1*$n2;
    break;
    case '/':
        $res = $n1/$n2;
    break;
}
 
return $temp. $res;
?>