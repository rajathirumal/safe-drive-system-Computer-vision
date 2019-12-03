<?php
$ip=$_GET['ip'];
echo $_GET['type'];
if($_GET['type']=="driver")
{
$value ="python detect_drowsiness.py -p shape_predictor_68_face_landmarks.dat -a alarm.wav -url ".$ip;
$command = escapeshellcmd($value); 
}
else
{
    $value ="python people_counter.py -p MobileNetSSD_deploy.prototxt -m MobileNetSSD_deploy.caffemodel -url ".$ip;
$command = escapeshellcmd($value);
}
exec($command);  
?>