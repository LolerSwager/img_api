<?php
    $data = file_get_contents( "img_data.txt" );
    $myfile = fopen('JSON/output.json', 'w') or die('Unable to open file!');
    fwrite($myfile, "[\n".$data."\n]");     
    fclose($myfile);
    header("Location: index.html");
    exit;
?>