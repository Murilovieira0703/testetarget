<?php 

function myStrRev($string) {
    $length = strlen($string);
    $reversed = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    
    return $reversed;
}

$string = "Exemplo de string para inverter";
$invertedString = myStrRev($string);

echo $invertedString; // imprime "retrevni arap gnirts ed olpmxE"


?>