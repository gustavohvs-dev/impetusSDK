<?php

function tests(){

    $qntError = 0;

    /**
     * Criando diretórios
     */
    echo "\nCriando diretórios... \n";
    if(!is_dir("src/tests")){
        mkdir("src/tests", 0751);
        echo "Pasta 'tests' criada. \n";
    }else{
        echo "Pasta 'tests' já existente. \n";
    }

    /** 
     * Copiando arquivos utilitários
     */
    if(!copy("impetus/cmd/files/tests/config.php", "src/tests/config.php")){
        echo "(500 Internal Server Error) Falha ao copiar arquivo 'config.php'. \n";
        $qntError++;
        return null;
    }else{
        echo "Arquivo de configuração de testes 'config.php' criado com sucesso. \n";
    }

    if(!copy("impetus/cmd/files/phpunit.xml", "src/phpunit.xml")){
        echo "(500 Internal Server Error) Falha ao copiar arquivo 'phpunit.xml'. \n";
        $qntError++;
        return null;
    }else{
        echo "Arquivo de configuração de testes 'phpunit.xml' criado com sucesso. \n";
    }

    if(!copy("impetus/cmd/files/tests/ServerTest.php", "src/tests/ServerTest.php")){
        echo "(500 Internal Server Error) Falha ao copiar arquivo 'ServerTest.php'. \n";
        $qntError++;
        return null;
    }else{
        echo "Teste 'ServerTest.php' criado com sucesso. \n";
    }

    if(!copy("impetus/cmd/files/composer.json", "src/composer.json")){
        echo "(500 Internal Server Error) Falha ao copiar arquivo 'composer.json'. \n";
        $qntError++;
        return null;
    }else{
        echo "Arquivo 'composer.json' criado com sucesso. \n";
    }

    //Executando comandos
    chdir('src');
    $addPhpUnit = exec('composer require --dev phpunit/phpunit');
    $addGuzzle = exec('composer require --dev guzzlehttp/guzzle');

    //Error reporting
    if($qntError == 0){
        echo "(200 OK) Testes configurado com sucesso. \n";
        echo "\nDica: Para seguir com a configuração, siga os passos abaixo: \n";
        echo "1 - Abra o arquivo 'src/tests/config.php' e defina o endpoint do webservice. \n";
        echo "2.1 - Acesse a pasta 'src' utilizando o comando 'cd src' e execute o comando 'composer test'. \n";
        echo "2.2 - Ou execute o comando 'php impetus.php run test' . \n";
    }else{
        echo "Verifique os erros, em caso de problemas, verifique a documentação em https://github.com/gustavohvs-dev/impetus. \n";
    }

    echo "\n";
    
}