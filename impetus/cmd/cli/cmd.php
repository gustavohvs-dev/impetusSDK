<?php

function cmd($availableCommands){
    echo "\n### Avaiable commands \n";
    foreach($availableCommands as $availableCommand){
        echo $availableCommand[0] . " - " . $availableCommand[1] . "\n";
    }
    echo "\n";
}