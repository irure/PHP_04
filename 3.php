<?php
    function all_multi($arr){
        $size = count($arr);
        $return_value=$arr[0];
        for($i=1;$i<$size;$i++){
            $return_value *= $arr[$i];
        }
        return $return_value;
    }
    
    $array=[
        "1",
        "3",
        "5",
        "7",
        "9",
        ];
    
    echo all_multi($array);