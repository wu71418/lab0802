<?php 
$link=@mysqli_connect('localhost','root','','testdbfromsql');

if(!$link){
    echo "資料庫連接失敗<br/>";
    exit();
}else{
    echo "資料庫連接成功<br/>";
}

$sql="SELECT * FROM 供應商";
//echo "SQL資料: $sql <br/>";

$result=mysqli_query($link,$sql);
    echo"資料表: 供應商</br>";
    $total_fields=mysqli_num_rows($result); //欄位數
    echo "欄位數: $total_fields 個<br/>";
    $total_records=mysqli_num_rows($result); //紀錄數
    echo "紀錄數: $total_records 筆<br/>";

    while($row=mysqli_fetch_assoc($result)){
        echo $row["供應商名稱"]."-"."[供應商編號]"."</br>";
    }

mysqli_free_result($result);

mysqli_close($link);
?>