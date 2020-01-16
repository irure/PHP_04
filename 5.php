<?php
    echo strip_tags("出力の<br>テスト\n");
    
    $array=[
        "3",
        "5",
        "color"=>"blue"
        ];
    
    array_push($array,7,"red");
    foreach($array as $a){
        echo $a."\n";
    }
    
    $array2=[
        "10",
        "color"=>"yellow"
        ];
    
    $result = array_merge($array,$array2);
    print_r($result);
    
    $tommorow = time() + (24*60*60);
    
    echo 'tommorow:'.date('Y,m,d',$tommorow)."\n";