<?php
    function max_array($arr){
        // とりあえず配列の最初の要素を一番大きい値とする
        $max_number = $arr[0];
        foreach($arr as $a){
            if($a>$max_number){
                $max_number=$a;//$aの方がmax_numberより大きい場合$max_numberを更新
            }
        }
    
     return $max_number;
    }
     
    $array=[
         "10",
         "5",
         "21",
         "3",
         "9",
         ];
    
    echo max_array($array);