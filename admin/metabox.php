<?php

return array(
    array(
		'type' => 'notebox',
		'name' => 'notebox',
		'label' => __('Author Comment', 'vp_textdomain'),
		'description' => __('To see all styles and effects use the <a target="_blank" href="https://www.oxilab.org/demo/sb-image-hover-effects/">demo site</a>', 'vp_textdomain'),
		'status' => 'normal',
	),
    array(
        'type' => 'group',
        'repeating' => true,
        'sortable' => true,
        'name' => 'style',
        'priority' => 'high',
        'title' => __('SB Hover Item', 'vp_textdomain'),
        'fields' => array(
            array(
                'type' => 'upload',
                'name' => 'sihe_upload',
                'label' => __('Hover Image', 'vp_textdomain'),
            ),
            array(
                'type' => 'textbox',
                'name' => 'sihe_title',
                'label' => __('Title', 'vp_textdomain'),
                'default' => 'Heading Here',
            ),
            array(
                'type' => 'textbox',
                'name' => 'sihe_descr',
                'label' => __('Description', 'vp_textdomain'),
                'default' => 'Description goes here',
            ),
            array(
                'type' => 'textbox',
                'name' => 'sihe_url',
                'label' => __('Image Link', 'vp_textdomain'),
                'default' => '',
            ),
        ),
    ),
    array(
        'type' => 'group',
        'repeating' => false,
        'sortable' => false,
        'name' => 'effectscustom',
        'priority' => 'high',
        'title' => __('Effects Settings', 'vp_textdomain'),
        'fields' => array(
            array(
                'type' => 'radiobutton',
                'name' => 'style',
                'label' => __('Select Hover Type', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'circle',
                        'label' => 'Circle',
                    ),
                    array(
                        'value' => 'square',
                        'label' => 'Square',
                    ),
                ),
            ),
            array(
                'type' => 'select',
                'name' => 'style_effect',
                'label' => __('Hover Animation', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'effect1',
                        'label' => 'Effect 1',
                    ),
                    array(
                        'value' => 'effect2',
                        'label' => 'Effect 2',
                    ),
                    array(
                        'value' => 'effect3',
                        'label' => 'Effect 3',
                    ),
                    array(
                        'value' => 'effect4',
                        'label' => 'Effect 4',
                    ),
                    array(
                        'value' => 'effect5',
                        'label' => 'Effect 5',
                    ),
                    array(
                        'value' => 'effect5',
                        'label' => 'Effect 5',
                    ),
                    array(
                        'value' => 'effect6',
                        'label' => 'Effect 6',
                    ),
                    array(
                        'value' => 'effect7',
                        'label' => 'Effect 7',
                    ),
                    array(
                        'value' => 'effect8',
                        'label' => 'Effect 8',
                    ),
                    array(
                        'value' => 'effect9',
                        'label' => 'Effect 9',
                    ),
                    array(
                        'value' => 'effect10',
                        'label' => 'Effect 10',
                    ),
                    array(
                        'value' => 'effect11',
                        'label' => 'Effect 11 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect12',
                        'label' => 'Effect 12 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect13',
                        'label' => 'Effect 13 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect14',
                        'label' => 'Effect 14 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect15',
                        'label' => 'Effect 15 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect16',
                        'label' => 'Effect 16 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect17',
                        'label' => 'Effect 17 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect18',
                        'label' => 'Effect 18 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect19',
                        'label' => 'Effect 19 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect20',
                        'label' => 'Effect 20 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect21',
                        'label' => 'Effect 21 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect22',
                        'label' => 'Effect 22 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect23',
                        'label' => 'Effect 23 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect24',
                        'label' => 'Effect 24 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect25',
                        'label' => 'Effect 25 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect26',
                        'label' => 'Effect 26 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect27',
                        'label' => 'Effect 27 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect28',
                        'label' => 'Effect 28 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect29',
                        'label' => 'Effect 29 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect30',
                        'label' => 'Effect 30 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect31',
                        'label' => 'Effect 31 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect32',
                        'label' => 'Effect 32 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect33',
                        'label' => 'Effect 33 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect34',
                        'label' => 'Effect 34 [Pro Only]',
                    ),
                    array(
                        'value' => 'effect35',
                        'label' => 'Effect 35 [Pro Only]',
                    ),
                ),
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'animation',
                'label' => __('Animation Direction', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'sihe-left-to-right',
                        'label' => 'Left to Right',
                    ),
                    array(
                        'value' => 'sihe-right-to-left',
                        'label' => 'Right to Left',
                    ),
                    array(
                        'value' => 'sihe-top-to-bottom',
                        'label' => 'Top to Bottom',
                    ),
                    array(
                        'value' => 'sihe-bottom-to-top',
                        'label' => 'Bottom to Top',
                    ),
                ),
            ),
            array(
                'type' => 'select',
                'name' => 'table',
                'label' => __('How many item\'s show in Display?', 'vp_textdomain'),
                'default' => 'sihe-responsive-3',
                'items' => array(
                    array(
                        'value' => 'sihe-responsive-1',
                        'label' => '1',
                    ),
                    array(
                        'value' => 'sihe-responsive-2',
                        'label' => '2',
                    ),
                    array(
                        'value' => 'sihe-responsive-3',
                        'label' => '3',
                    ),
                    array(
                        'value' => 'sihe-responsive-4',
                        'label' => '4',
                    ),
                ),
            ),
            array(
                'type' => 'slider',
                'name' => 'pic_size',
                'label' => __('Image Size ', 'vp_textdomain'),
                'description' => __('default value is 230px', 'vp_textdomain'),
                'min' => '180',
                'max' => '350',
                'step' => '5',
                'default' => '230',
            ),
            array(
                'type' => 'slider',
                'name' => 'padding',
                'label' => __('Padding - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span> ', 'vp_textdomain'),
                'description' => __('default value is 20px', 'vp_textdomain'),
                'min' => '5',
                'max' => '50',
                'step' => '2',
                'default' => '20',
            ),
            array(
                'type' => 'codeeditor',
                'name' => 'custom_css',
                'label' => __('Custom CSS - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span> ', 'vp_textdomain'),
                'description' => __('Write your custom css here.', 'vp_textdomain'),
                'mode' => 'css',
            ),
        ),
    ),
    array(
        'type' => 'group',
        'repeating' => false,
        'sortable' => true,
        'name' => 'customization',
        'priority' => 'high',
        'title' => __('Custom Settings', 'vp_textdomain'),
        'fields' => array(
            array(
				'type' => 'notebox',
				'name' => 'nb_2',
				'label' => __('Pro Version Available with full fixture :', 'vp_textdomain'),
				'description' => __('<p style="color: #000;">To get Pro Version of SB Image hover effects pro, please buy the pro version only $10 <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
				'status' => 'normal',
			),
            array(
                'type' => 'color',
                'name' => 'img_backg_color',
                'label' => __('Image Background Color - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
                'description' => __('default Value is depend with effects', 'vp_textdomain'),
                'default' => '',
            ),
            array(
                'type' => 'slider',
                'name' => 'title_font_size',
                'label' => __('Heading Font Size - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span> ', 'vp_textdomain'),
                'description' => __('default value is 18px', 'vp_textdomain'),
                'min' => '12',
                'max' => '30',
                'step' => '1',
                'default' => '18',
            ),
            array(
                'type' => 'color',
                'name' => 'title_color',
                'label' => __('Heading Font Color - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
                'description' => __('ddefault Value is depend with effects', 'vp_textdomain'),
                'default' => '',
            ),
            array(
                'type' => 'slider',
                'name' => 'descr_size',
                'label' => __('Description Font Size - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
                'description' => __('default value is 14px', 'vp_textdomain'),
                'min' => '12',
                'max' => '30',
                'step' => '1',
                'default' => '14',
            ),
            array(
                'type' => 'color',
                'name' => 'descript_color',
                'label' => __('Description Font Color - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
                'description' => __('default Value is depend with effects', 'vp_textdomain'),
                'default' => '',
            ),
            array(
                'type' => 'checkbox',
                'name' => 'headingunderline',
                'label' => __('Want to Remove Heading Underline - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span> ', 'vp_textdomain'),
                'description' => __('Check This Box if you don\'t want Underline', 'vp_textdomain'),
                'items' => array(
                    array(
                        'value' => 'no',
                    ),
                ),
            ),
           
            array(
                'type' => 'slider',
                'name' => 'bordershadow',
                'label' => __('Border Shadow - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
                'description' => __('default is 15px & Don\'t want Value is 0', 'vp_textdomain'),
                'min' => '0',
                'max' => '30',
                'step' => '1',
                'default' => '15',
            ),
            array(
                'type' => 'checkbox',
                'name' => 'newtab',
                'label' => __('Open In New Tab? - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
                'description' => __('Check This Box if you want to open link in new TAB', 'vp_textdomain'),
                'items' => array(
                    array(
                        'value' => 'TARGET="_blank"',
                    ),
                ),
            ),
            array(
                'type' => 'select',
                'name' => 'google_font',
                'label' => __('Custom Heading Font - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
                'description' => __('This font will shown at Heading', 'vp_textdomain'),
                'default' => 'Roboto',
                'items' => array(
                    'data' => array(
                        array(
                            'source' => 'function',
                            'value' => 'vp_get_gwf_family',
                        ),
                    ),
                ),
            ),
            array(
                'type' => 'select',
                'name' => 'google_fontdesc',
                'label' => __('Custom Description Font - <span><a target="_blank" style="color: #005990;" href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Pro Only</a></span>', 'vp_textdomain'),
                'description' => __('This font will shown at Description', 'vp_textdomain'),
                'default' => 'Roboto',
                'items' => array(
                    'data' => array(
                        array(
                            'source' => 'function',
                            'value' => 'vp_get_gwf_family',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
