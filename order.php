<?php
    
    if(!$link)
    {
        echo "mysql資料庫連結錯誤"."<br>";
        exit();
    }
    else
        echo "mysql資料庫連結成功".'<br>';
    


    $sql="insert into 訂單明細(訂單編號,產品編號,實際單價,數量) 
    values($orn_Num,$pn_num,$pr_num,$q_name)";

    update 


    mysqli_close($link);
?>
