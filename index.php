<?php
$myfile = fopen("output.txt", "w");
$txt = "Jan Klaassen; 5\n";
fwrite($myfile, $txt);
$txt = "Jan de Groot; 7\n";
fwrite($myfile, $txt);
$txt = "Pietje Puk; 10\n";
fwrite($myfile, $txt);
fclose($myfile);
?>