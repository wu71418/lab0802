<?php 
$link=@mysqli_connect('localhost','root','','testdbfromsql');

if(!$link){
    echo "資料庫連接失敗<br/>";
    exit();
}else{
    echo "資料庫連接成功<br/>";
}
mysqli_close($link);
?>