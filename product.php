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
    
    
    
   /* $sql="select * from 產品資料";
    $result=mysqli_query($link,$sql);

    while($row=mysqli_fetch_assoc($result)){
        echo $row['產品編號']."-".$row['產品名稱']."<br>";
    }*/

    $sql="insert into 產品資料(產品編號,類別編號,供應商編號,產品名稱,建議單價,平均成本,庫存量,安全存量) 
    values($pd_num,$cat_num,$sup_num,$suggestion_price,$avg_cost,$inventory,$safe_amount)";
    $result=mysqli_query($link,$sql);
    $insert_id=mysqli_insert_id($link);
    $new_id= mysqli_insert_id ($link);
    echo "新增後的id為 {$new_id} ";

    mysqli_close($link);
?>