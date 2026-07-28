<?php

declare(strict_types=1);

use OliverThiele\OtIcons\Tca\IconStyleItemsProcFunc;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

$key = 'ot_sitekitcetexticon';
$languageFile = $key . '.db:';

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => $languageFile . 'tt_content.CType.label',
        'description' => $languageFile . 'tt_content.CType.description',
        'value' => $key,
        'icon' => 'ot-sitekit-ce-texticon',
        'group' => 'extras',
    ],
);

$tempColumns = [
    'icon_style' => [
        'exclude' => true,
        'label' => $languageFile . 'tt_content.icon_style',
        'displayCond' => 'USER:OliverThiele\OtIcons\UserFunc\IconStyleDisplayCondition->isAvailable',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $languageFile . 'tt_content.icon_style.default', 'value' => ''],
            ],
            'itemsProcFunc' => IconStyleItemsProcFunc::class . '->getItems',
            'default' => '',
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

$GLOBALS['TCA']['tt_content']['palettes']['texticon_headers'] = [
    'showitem' => '
        header,
        --linebreak--, header_layout, header_position, date,
        --linebreak--, header_link,
    ',
];

$GLOBALS['TCA']['tt_content']['types'][$key] = [
    'showitem' => '
            --palette--;;texticon_headers,
            bodytext,--div--;core.form.tabs:media,icon_identifier,icon_style,assets,
        ',
    'columnsOverrides' => [
        'icon_identifier' => [
            'displayCond' => 'FIELD:CType:REQ:true',
            'description' => $languageFile . 'tt_content.icon_identifier.description',
            'config' => [
                'renderType' => ExtensionManagementUtility::isLoaded('ot_iconselector')
                    ? 'otIconSelector'
                    : null,
            ],
        ],
        'assets' => [
            'description' => $languageFile . 'tt_content.assets.description',
        ],
    ],
];

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--palette--;;irreButtons,tx_otirrebuttons_domain_model_buttons,',
    $key,
    'after:bodytext',
);
