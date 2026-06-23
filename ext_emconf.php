<?php

$EM_CONF['ot_sitekitcetexticon'] = [
    'title' => 'CE Text with icon',
    'description' => 'TYPO3 content element that displays an icon above text. Integrates with the Sitekit and ot-irrebuttons extensions.',
    'category' => 'frontend',
    'author' => 'Oliver Thiele',
    'author_email' => 'mail@oliver-thiele.de',
    'state' => 'stable',
    'author_company' => 'Web Development Oliver Thiele',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.99.99',
            'php' => '8.4.0-8.99.99',
            'ot_icons' => '3.0.0-3.99.99',
            'ot_irrebuttons' => '4.0.0-4.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
