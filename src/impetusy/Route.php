<?php

function routes($tableName)
{
    $functionName = ucfirst(strtolower($tableName));

    echo "\nCriando rotas ({$tableName})";

    if(!is_dir("app/routes/") && !file_exists("app/routes/routes.php")){
        echo "\n(404 Not found) Arquivo de rotas não encontrado";
        return null;
    }else{
        $arquivo = fopen ('app/routes/routes.php', 'r');
        $result = [];
        while(!feof($arquivo)){
            $result[] = explode("];",fgets($arquivo));
        }
        fclose($arquivo);

        $snippet = "";
        $rows = count($result);

        foreach($result as $line){
            if (--$rows <= 0) {
                break;
            }
            $snippet.= $line[0];
        }

$snippet .= '    //'.$functionName.' routes
    "'.$tableName.'/get" => fn() => Router::get("app/controllers/'.$functionName.'/get'.$functionName.'.php"),
    "'.$tableName.'/list" => fn() => Router::get("app/controllers/'.$functionName.'/list'.$functionName.'.php"),
    "'.$tableName.'/new" => fn() => Router::post("app/controllers/'.$functionName.'/create'.$functionName.'.php"),
    "'.$tableName.'/update" => fn() => Router::put("app/controllers/'.$functionName.'/update'.$functionName.'.php"),
    "'.$tableName.'/delete" => fn() => Router::delete("app/controllers/'.$functionName.'/delete'.$functionName.'.php"),
];

Router::ImpetusRouter($routes);';

        $arquivo = fopen("app/routes/routes.php", 'w');
        if($arquivo == false){
            echo "\033[1;31m" . "\n(500 Server Internal Error) Falha ao criar arquivo de rotas" . "\033[0m" ;
            return null;
        }else{
            $escrever = fwrite($arquivo, $snippet);
            if($escrever == false){
                echo "\033[1;31m" . "\n(500 Server Internal Error) Falha ao preencher arquivo de rotas" . "\033[0m";
                return null;
            }else{
                echo "\033[1;32m" . "\n(200 OK) Rotas criadas com sucesso" . "\033[0m";
                return null;
            }
        } 
    }

}