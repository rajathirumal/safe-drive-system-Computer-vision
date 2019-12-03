<?php
    $today = $_POST['value1'];
    $type = $_POST['value2'];
    $today_arr = explode (" ", $today);
    //Thu Aug 15 2019 00:09:56 GMT 0530 (India Standard Time)
    $value ="python xl.py -DayName ".$today_arr[0]." -month " .$today_arr[1]." -date " .$today_arr[2] ." -year ".$today_arr[3]  ." -time ".$today_arr[4] ." -zone ".$today_arr[5] ." -type ".$type;
    //python xl.py -d Thu Aug 15 2019 01:37:11 GMT 0530 (India Standard Time) -r 0
    // print_r($value); 
    // $command = escapeshellcmd("python hello.py");
    $res = exec($value);
    echo $value;

?>