<?php

function hamming($cad1, $cad2){
    $dist= 0;

    for($i = 0; $i < strlen($cad1); $i++):
        if ($cad1[$i] != $cad2[$i]):
            $dist++;
        endif;
    endfor;

    return $dist;
}