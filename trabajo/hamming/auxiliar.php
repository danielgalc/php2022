<?php

function hamming($cad1, $cad2){  
    
    $dist= 0;

    $long = strlen($cad1);

    for($i = 0; $i < $long; $i++):
        if ($cad1[$i] != $cad2[$i]):
            $dist++;
        endif;
    endfor;

    return $dist;
}