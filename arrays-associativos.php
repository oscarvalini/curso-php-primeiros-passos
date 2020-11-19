<?php

    //ARRAY ASSOCIATIVO
    $pessoas = [
        3 =>[
            'nome' => 'Oscar',
            'sobrenome' => 'Cunha',
            'idade' => 25
        ],
        1 =>[
            'nome' => 'Diana',
            'sobrenome' => 'Soares',
            'idade' => 21,
            'cargo' => 'pituzinha'
        ],
        5 => [
            'nome' => 'Wolverino',
            'sobrenome' => 'Logan',
            'idade' => 250
        ],
        10 => [
            'nome' => 'Kratos',
            'sobrenome' => 'Da Silva',
            'idade' => 150,
            'cargo' => 'God of War'
        ]
    ];

    $pessoas[12] = [
        'nada' => 'a ver',
        'tudo' => 'a constatar',
        'algo' => 'para verificar'
    ];

    $pessoas[] = ['novo' => 'elemento', 'antiga' => 'forma'];

    // for($i = 0; $i < count($pessoas); $i++){
    //     echo $pessoas[$i]['nome'] . PHP_EOL;
    // }

    // foreach($pessoas as $pessoa) {
    //     echo "{$pessoa['nome']} {$pessoa['sobrenome']}" . PHP_EOL;
    // }

    foreach($pessoas as $chave => $pessoa) {
        echo "$chave" . PHP_EOL;
        foreach($pessoa as $attr => $valor) 
            echo "$attr: $valor" . PHP_EOL;
        echo PHP_EOL;
        
    }

    echo gettype($pessoas) . PHP_EOL;

    echo gettype($pessoas) == gettype([]) ? 'IGUAL' : 'DIFERENTE'; //IGUAL
    echo PHP_EOL;
    echo gettype($pessoas) == 'array' ? 'IGUAL' : 'DIFERENTE'; //IGUAL
    echo PHP_EOL;

    echo gettype($pessoas) === gettype([]) ? 'IGUAL' : 'DIFERENTE'; //IGUAL
    echo PHP_EOL;
    echo gettype($pessoas) === 'array' ? 'IGUAL' : 'DIFERENTE'; //IGUAL