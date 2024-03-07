<?php

for($i=0; $i < 4; $i++){ 
    $pessoas[$i]['nome'] = readline("Qual teu nome?");
    $pessoas[$i]['idade'] = readline("Qual tua idade?");
    $pessoas[$i]['CidNat'] = readline("Qual tua Cidade natal?");
    $pessoas[$i]['profissao'] = readline("Qual tua profissão?");
}
$idadeveio = $pessoas[0]['idade'];
for($i=1; $i < 4; $i++){ 
    if($idadeveio < $pessoas[$i]['idade']){
        $idadeveio = $pessoas[$i]['idade'];
        $veio = $i;
    }

}
print "PESSOA MAIS VELHA\n";
print "[NOME]:".$pessoas[$veio]['nome']."\n";
print "[IDADE]:".$pessoas[$veio]['idade']."\n";
print "[CIDADE NATAL]:".$pessoas[$veio]['CidNat']."\n";
print "[PROFISSÃO]:".$pessoas[$veio]['profissao']."\n";

































die;


for ($i=0; $i < 10; $i++) { 
    $vetA[] = readline("Informe um número");
    $vetB[] = readline("Informe um número");    
}

//vetC
$vetC = array();

foreach($vetA as $A){
    foreach($vetB as $B){
        if($B == $A){
            if(in_array($B,$vetC) == false){
                $vetC[] = $B;
            }
        }
    }
}

var_dump($vetC);





















function atv_2($num){
    for ($i=0; $i < $num; $i++) { 
        $vetA[$i] = readline("Informe uma palavra");
    }
    foreach($vetA as $A){
        $vetB[] = $A;
    }
    foreach($vetB as $B){
        print "$B,";
    }
}

function atv_1($nums){
    $media = 0;
    for($i=0; $i < $nums; $i++){ 
        $valor[$i] = readline("Informe um número");
        
    }
    $media = array_sum($valor);
    $media /= $nums;
    print "A média é desses números é $media :D"; 


}






