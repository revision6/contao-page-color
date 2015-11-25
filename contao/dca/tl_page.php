<?php

// Palettes
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] .= ';{color_legend},base_color';
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] .= ';{color_legend},color';

// Fields
$GLOBALS['TL_DCA']['tl_page']['fields']['base_color'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['base_color'],
    'inputType' => 'text',
    'eval'      => array
    (
        'maxlength'      => 6,
        'colorpicker'    => true,
        'isHexColor'     => true,
        'decodeEntities' => true,
        'tl_class'       => 'w50 wizard'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['color'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['color'],
    'inputType' => 'text',
    'eval'      => array
    (
        'maxlength'      => 6,
        'colorpicker'    => true,
        'isHexColor'     => true,
        'decodeEntities' => true,
        'tl_class'       => 'w50 wizard'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);