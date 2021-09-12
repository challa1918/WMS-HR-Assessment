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
        echo nl2br("Querter $q:- \n");
        $months[]=array();
        $months=array_filter($months);
        foreach($quarter[$i] as $key=>$value){
            array_push($months,date("n",strtotime("2021-".$value)));
            echo nl2br($key." ".$value."\n");
        }
       // echo nl2br(Print_r($months)."\n");
    }
    $in_date= $_GET["date"];
    $in_month= date("n",strtotime($in_date));
    $k=0-1;
    $quarter=1;
    while($k<=5){
        $start=$months[++$k];
        $end=$months[++$k];
        echo "Quarter : ".$quarter;
        if(getQuarter($start,$end,$in_month)){
            echo "The  date ".$in_date." falls in Quarter $quarter";
            break;
        }
        $quarter++;

    }
    function getQuarter($start,$end,$in_month){
        echo nl2br("\n".$start." - ".$end."\n");
        $prev=-1;
            while($prev!=$end){
                if($start==$in_month)return true;
                $prev=$start;
                $start=($start+1)%12;
            }
            return false;
    }

  
?>
