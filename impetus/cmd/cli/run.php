<?php

function run($scriptName){
    $impetusJson = file_get_contents('impetus.json');
    $impetusJsonDecoded = json_decode($impetusJson);
    $founded = false;
    foreach($impetusJsonDecoded->scripts as $key => $value){
        if($key == $scriptName){
            $founded = true;
            chdir('src');
            $output = shell_exec($value);
            print_r($output);
        }
    }
    if($founded != true){
        echo "Comando inválido \n";
    }
}