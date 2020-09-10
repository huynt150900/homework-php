<?php
    
    $myfile = fopen("input.txt", "r") or die("Unable to open file!");

    $text_array = preg_split("/[\s,]+/",fread($myfile,filesize("input.txt")));

    $count = array_count_values($text_array);

    $number_count = array();
        foreach ($count as $key=>$value){
            if($value >= 3){
                array_push($number_count,$key);
            }
        }
    $output = implode(',',$number_count);
    //xuat
    echo 'number repeated 3 times :'.$output;
   
?>
