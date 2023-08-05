<?php
    $pd_num=$_POST['Pd_Num'];
    $cat_num=$_POST['Cat_Num'];
    $sup_num=$_POST['Sup_Num'];
    $suggestion_price=$_POST['Suggestion_Price'];
    $avg_cost=$_POST['Avg_Cost'];
    $inventory=$_POST['INVENTORY'];
    $safe_amount=$_POST['Safe_Amount'];

    $link=@mysqli_connect(
        'localhost',
        'root',
        '',
        'sqlserver');
    if(!$link)
    {
        echo "mysql資料庫連結錯誤"."<br>";
        exit();
    }
    else
        echo "mysql資料庫連結成功".'<br>';
    
    
    
    $sql="select * from 產品資料";
    $result=mysqli_query($link,$sql);

    while($row=mysqli_fetch_assoc($result)){
        echo $row['產品編號']."-".$row['產品名稱']."<br>";
    }
    mysqli_free_result($result);
    mysqli_close($link);
?>