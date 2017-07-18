<?php

return array(
    'SB Hover' => array(
        'elements' => array(
            'acfd1' => array(
                'title' => __('Super Hover Settings', 'qualia_td'),
                'code' => '[sihe_hover]',
                'attributes' => array(
                    
                    array(
                        'type' => 'select',
                        'name' => 'category',
                        'label' => __('Category Name', 'vp_textdomain'),
                        'items' => array(
                            'data' => array(
                                array(
                                    'source' => 'function',
                                    'value' => 'vp_get_categories',
                                ),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'select',
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
                        'label' => __('Select Hover Effect', 'vp_textdomain'),
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
                                'label' => 'Effect 11',
                            ),
                            array(
                                'value' => 'effect12',
                                'label' => 'Effect 12',
                            ),
                            array(
                                'value' => 'effect13',
                                'label' => 'Effect 13',
                            ),
                            array(
                                'value' => 'effect14',
                                'label' => 'Effect 14',
                            ),
                            array(
                                'value' => 'effect15',
                                'label' => 'Effect 15',
                            ),
                            array(
                                'value' => 'effect16',
                                'label' => 'Effect 16',
                            ),
                            array(
                                'value' => 'effect17',
                                'label' => 'Effect 17',
                            ),
                            array(
                                'value' => 'effect18',
                                'label' => 'Effect 18',
                            ),
                            array(
                                'value' => 'effect19',
                                'label' => 'Effect 19',
                            ),
                            array(
                                'value' => 'effect20',
                                'label' => 'Effect 20',
                            ),
                            array(
                                'value' => 'effect21',
                                'label' => 'Effect 21',
                            ),
                            array(
                                'value' => 'effect22',
                                'label' => 'Effect 22',
                            ),
                            array(
                                'value' => 'effect23',
                                'label' => 'Effect 23',
                            ),
                            array(
                                'value' => 'effect24',
                                'label' => 'Effect 24',
                            ),
                            array(
                                'value' => 'effect25',
                                'label' => 'Effect 25',
                            ),
                            array(
                                'value' => 'effect26',
                                'label' => 'Effect 26',
                            ),
                            array(
                                'value' => 'effect27',
                                'label' => 'Effect 27',
                            ),
                            array(
                                'value' => 'effect28',
                                'label' => 'Effect 28',
                            ),
                            array(
                                'value' => 'effect29',
                                'label' => 'Effect 29',
                            ),
                            array(
                                'value' => 'effect30',
                                'label' => 'Effect 30',
                            ),
                            array(
                                'value' => 'effect31',
                                'label' => 'Effect 31',
                            ),
                            array(
                                'value' => 'effect32',
                                'label' => 'Effect 32',
                            ),
                            array(
                                'value' => 'effect33',
                                'label' => 'Effect 33',
                            ),
                            array(
                                'value' => 'effect34',
                                'label' => 'Effect 34',
                            ),
                            array(
                                'value' => 'effect35',
                                'label' => 'Effect 35',
                            ),
                            
                            
                            
                        ),
                    ),
                    array(
                        'type' => 'select',
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
                        'label' => __('How many show in 1 row', 'vp_textdomain'),
                        'default' => array(
                            '{{last}}',
                        ),
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
                        'type' => 'color',
                        'name' => 'img_backg_color',
                        'label' => __('Image Hover Background  ', 'vp_textdomain'),
                        'description' => __('you can set the Background color here.', 'vp_textdomain'),
                         'default' => '#1a4a72;',
                        'format' => 'HEX',
                    ),
                    array(
                        'type' => 'checkbox',
                        'name' => 'border',
                        'label' => __('Remove Border', 'vp_textdomain'),
                        'items' => array(
                            array(
                                'value' => 'none',
                            ),
                        ),
                    ),
                    array(
                        'type' => 'checkbox',
                        'name' => 'link_open',
                        'label' => __('Open In New Tab?', 'vp_textdomain'),
                        'items' => array(
                            array(
                                'value' => '_blank',
                            ),
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'google_font',
                        'label' => __('Custom Font </span>', 'vp_textdomain'),
                        'label' => __('Select Font', 'vp_textdomain'),
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
                    // Padding for Each Item Style 1
                    
                    array(
                        'type' => 'slider',
                        'name' => 'img_shadow',
                        'label' => __('Image shadow', 'vp_textdomain'),
                        'description' => __('You can set shadow for each item. Default is 2.', 'vp_textdomain'),
                        'min' => '0',
                        'max' => '30',
                        'step' => '2',
                        'default' => '15',
                    ),
                    array(
                        'type' => 'slider',
                        'name' => 'pic_size',
                        'label' => __('Image Wight', 'vp_textdomain'),
                        'description' => __('You can set Padding for each item. Default is 5.', 'vp_textdomain'),
                        'min' => '200',
                        'max' => '350',
                        'step' => '5',
                        'default' => '250',
                    ),
                    array(
                        'type' => 'slider',
                        'name' => 'pic_size_height',
                        'label' => __('Image Height ', 'vp_textdomain'),
                        'description' => __('You can set Padding for each item. Default is 5.', 'vp_textdomain'),
                        'min' => '200',
                        'max' => '350',
                        'step' => '5',
                        'default' => '250',
                    ),
                    // Title Font Size
                    array(
                        'type' => 'slider',
                        'name' => 'title_font_size',
                        'label' => __('Tilte Font Size', 'vp_textdomain'),
                        'description' => __('You can set your Title Font Size here.', 'vp_textdomain'),
                        'min' => '5',
                        'max' => '50',
                        'step' => '1',
                        'default' => '18',
                    ),
                    // Title Color
                    array(
                        'type' => 'color',
                        'name' => 'title_color',
                        'label' => __('Title Color ', 'vp_textdomain'),
                        'description' => __('Set Title Color Here.', 'vp_textdomain'),
                        'default' => '#FFFFFF;',
                        'format' => 'HEX',
                    ),
                    // Description Font Size
                    array(
                        'type' => 'slider',
                        'name' => 'descr_size',
                        'label' => __('Description Font Size ', 'vp_textdomain'),
                        'description' => __('You can set your Description Font Size here.', 'vp_textdomain'),
                        'min' => '2',
                        'max' => '50',
                        'step' => '1',
                        'default' => '15',
                    ),
                    // Description Color
                    array(
                        'type' => 'color',
                        'name' => 'descript_color',
                        'label' => __('Description Font Color', 'vp_textdomain'),
                        'description' => __('Set Description Color Here.', 'vp_textdomain'),
                        'default' => '#FFFFFF;',
                        'format' => 'HEX',
                    ),
                ),
            ),
// ... more menus
        ),),
);
?>