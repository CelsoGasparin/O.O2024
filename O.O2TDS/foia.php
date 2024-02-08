<?php















function atv3(){
    $Yin = 1980;
    $Yla = 2024;
    for($i=$Yin+1; $i < $Yla; $i++){ 
        if(($i%4 == 0 and $i%100 > 0) or ($i%4 == 0 and $i%400 == 0)){
            print "O ano $i é um ano bissexto.\n";
        }
    }
}
function atv1(){
    $j = 10;
    for($i=1; $i <= $j*2; $i += 2){ 
        print $i." ";
    }   
    print "\n";
}