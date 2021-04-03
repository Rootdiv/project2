<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/project/project2/global_pass.php';

if(!empty($_POST['email']) && !empty($_POST['text'])){
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($link , "utf8");
    $fields = mysqli_query($link, "SHOW COLUMNS FROM `leads`");
    $i = 0;
    $name_columns = [];
    while($columns_r[$i] = mysqli_fetch_assoc($fields)){
        if($columns_r[$i]['Field'] !== 'id'){
            $name_columns[$i] = $columns_r[$i]['Field'];
        }
        $i++;
    }
    $arr_fields = [];
    $arr_values = [];
    foreach($name_columns as $columns){
        if($_POST[$columns]){
            $arr_fields[] = $columns;
            $arr_values[] = trim($_POST[$columns]);
        }
    }
    $mess = new Leads(0);
    if($mess->createLine($arr_fields,$arr_values)){
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }else{
        echo 'Ошибка';
    }
}else{
    header('Location: '.$_SERVER['HTTP_REFERER']);
}