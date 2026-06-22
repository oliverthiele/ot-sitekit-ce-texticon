<?php

$EM_CONF['ot_sitekitcetexticon'] = [
    'title' => 'CE Text with icon',
    'description' => 'TYPO3 content element that displays an icon above text. Integrates with the Sitekit and ot-irrebuttons extensions.',
    'category' => 'frontend',
    'author' => 'Oliver Thiele',
    'author_email' => 'mail@oliver-thiele.de',
    'state' => 'stable',
    'author_company' => 'Web Development Oliver Thiele',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.99.99',
            'ot_icons' => '*',
            'ot_irrebuttons' => '4.0.0-4.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
