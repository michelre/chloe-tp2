<?php 

$pages = [
    1 => [
        'name' => 'Accueil',
        'url' => "page00.php"      
    ],
    2 => [
        'name' => 'Passer le test',
        'url' => 'page02.php',
        'tabs' => [
            1 => [
                "name" => "Test",
                "url" => 'page02.php'
            ]
        ]
    ],
    3 => [
        'name' => 'Lire le cours',
        'url' => 'page01.php',
        'tabs' => [
            1 => [
                "name" => "Introduction",
                "url" => 'page01.php'
            ],
            2 => [
                "name" => "Variables",
                "url" => 'page03.php'
            ],
            3 => [
                "name" => "Tableaux",
                "url" => 'page04.php'
            ],
            4 => [
                "name" => "Graphiques",
                "url" => 'page05.php'
            ],
        ]
    ],
    4 => [
        'name' => "Réaliser le TP",
        'url' => 'page06.php',
        'tabs' => [
            1 => [
                "name" => "Le TP",
                'url' => 'page06.php',
            ]
        ]
    ]
        ];