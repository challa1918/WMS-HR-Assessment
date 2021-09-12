<?php
  
  $quarter = [
    ['start' => '12-01', 'ends' => '02-28'],
    ['start' => '03-01', 'ends' => '05-31'],
    ['start' => '06-01', 'ends' => '08-31'],
    ['start' => '09-01', 'ends' => '11-31'],
    ];
    $size=sizeof($quarter);
    for($i=0;$i<$size;$i++){
        $q=$i+1;
        echo nl2br("Quarter $q:- \n");
        foreach($quarter[$i] as $key=>$value){
            echo nl2br($key." ".$value."\n");
        }
        echo nl2br("\n");
    }
    $in_date= $_GET["date"];
    $in_month= date("n",strtotime($in_date)); 
    $quarter=getQuarter($in_month);
    echo "The date ".$in_date." falls in Quarter ".$quarter;
    
    function getQuarter($in_month){
        if($in_month==12||$in_month==1||$in_month==2)
        return 1;  
        if($in_month==3||$in_month==4||$in_month==5)
        return 2;  
        if($in_month==6||$in_month==7||$in_month==8)
        return 3;
        if($in_month==9||$in_month==10||$in_month==11)
        return 4;     
    }

  
?>