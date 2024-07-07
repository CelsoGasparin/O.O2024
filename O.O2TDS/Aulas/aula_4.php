<?php


print ceaser("Brasil",7);


                        







function ceaser($text,int $key){
    $A = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $a = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $txtlen = strlen($text); 
    $txt = "";
    $key %= 26;
    for($i=0; $i < $txtlen; $i++){ 
        $c = substr($text,$i,$i+1);
        for($j=0; $j < 26; $j++) { 
            if($c == $A[$j] or $c == $a[$j]){
                $txt += $a[$j];
                break;
            }elseif($j == 25){
                $txt += $c;
            }
        }

    }
    return $txt;
}







