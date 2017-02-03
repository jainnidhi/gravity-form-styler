	<?php

add_action( 'after_setup_theme', 'gfs_register_customizer' );
function gfs_register_customizer() {
	IBCustomizer::add_panel(
		array(
			'gfs_style'	=> array(
				'title'	=> __( 'Gravity Forms Styler', 'gfs' ),
				'sections'	=> array(
					'gfs_form_style'	=> array(
						'title'			=> __( 'Colors', 'gfs' ),
						'description'	=> __( 'Customize forms text color, background color, add a background image or change the font-size.', 'gfs' ),
						'fields'            => array(
							'gfs_form_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Text Color', 'gfs'),
		                            'default' 		=> '#000000',
		                            'preview'       => array(
		                                'type'          => 'color',
		                                'selector'      => '.gform_wrapper'
		                            )
		                        )
		                    ),
							'gfs_form_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '#ffffff'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Background Color', 'gfs'),
									'default' 		=> '#ffffff',
		                            'preview'       => array(
		                                'type'          => 'background-color',
		                                'selector'      => '.gform_wrapper'
		                            )
		                        )
		                    ),
							'gfs_form_bg_image' => array(
		                        'setting'    => array(
		                            'default' => ''
		                        ),
		                        'control'    => array(
		                            'class'          => 'WP_Customize_Image_Control',
		                            'label'         => __('Background Image', 'gfs'),
		                            'default' 		=> '',
		                        )
		                    ),
						)
					),
					'gfs_form_padding_margin'	=> array(
						'title'	=> __( 'Structure', 'gfs' ),
						'fields'	=> array(
							'gfs_form_font_size' => array(
								'setting'    => array(
									'default' => 16,
									'sanitize_callback' => 'gfs_sanitize_integer',
								),
								'control'    => array(
									'type'          => 'ib-slider',
									'label'         => __('Font Size (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds font size to the form', 'gfs' ),
									'choices'            => array(
										'min'                => 0,
										'max'                => 100,
										'step'                 => 1
									),
									'preview'       => array(
										'type'          => 'css',
										'selector'      => '.gform_wrapper',
										'property'		=> 'font-size',
										'unit'			=> 'px'
									)
								)
							),
							'gfs_form_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'       => 0,
		                                'bottom'    => 0,
		                                'left'      => 0,
		                                'right'     => 0
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __('Padding (px)', 'gfs'),
		                            'class' 		=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds padding to the form', 'gfs' ),
									'choices'            => array(
		                                'top'            => __('Top'),
		                                'bottom'         => __('Bottom'),
		                                'left'           => __('Left'),
		                                'right'          => __('Right')
		                            ),
		                            'preview'       => array(
		                                'type'          => 'padding',
		                                'selector'      => '.gform_wrapper'
		                            )
		                        )
		                    ),
							'gfs_form_margin' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        	=> 0,
			                            'bottom'    	=> 0,
		                                'left'        	=> 0,
			                            'right'        	=> 0
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __('Margin (px)', 'gfs'),
		                            'class' 		=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds margin to the form', 'gfs' ),
									'choices'            => array(
		                                'top'            => __('Top'),
		                                'bottom'         => __('Bottom'),
		                                'left'           => __('Left'),
		                                'right'          => __('Right')
		                            ),
		                            'preview'       => array(
		                                'type'          => 'margin',
		                                'selector'      => '.gform_wrapper'
		                            )
		                        )
		                    ),
							'gfs_form_border_width' => array(
		                        'setting'    => array(
		                            'default' => 0,
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Border Width (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds border width to the form', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => '.gform_wrapper',
										'property'		=> 'border-width',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
							'gfs_form_border_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Border Color', 'gfs'),
		                            'default' 		=> '#000000',
		                            'preview'       => array(
										'type'			=> 'css',
		                                'selector'      => '.gform_wrapper',
			                            'property'      => 'border-color',
		                            )
		                        )
		                    ),
							'gfs_form_border_radius' => array(
		                        'setting'    => array(
		                            'default' => 0,
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Border Radius (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds border radius to the form', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => '.gform_wrapper',
										'property'		=> 'border-radius',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
						)
					),
					'gfs_form_title_style'	=> array(
						'title'	=> __( 'Title', 'gfs' ),
						'description'	=> __( 'Style the title of a form by adding color, font size and alignment.', 'gfs' ),
						'fields'	=> array(
							'gfs_title_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Text Color', 'gfs'),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper h3.gform_title',
										'property'		=> 'color'
		                            )
		                        )
		                    ),
							'gfs_title_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Font Size (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds font size to the title', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper h3.gform_title',
										'property'		=> 'font-size',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
							'gfs_title_alignment' => array(
		                        'setting'    => array(
		                            'default' => 'left'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __('Alignment', 'gfs'),
									'choices'		=> array(
										'left'		=> __('Left'),
										'center'		=> __('Center'),
										'right'		=> __('Right')
									),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper h3.gform_title',
										'property'		=> 'text-align'
		                            )
		                        )
							),
						)
					),
					'gfs_form_description_style'	=> array(
						'title'	=> __( 'Description', 'gfs' ),
						'description'	=> __( 'Style the description of a form by adding color, font size and alignment.', 'gfs' ),
						'fields'	=> array(
							'gfs_description_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Text Color', 'gfs'),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper span.gform_description',
										'property'		=> 'color'
		                            )
		                        )
		                    ),
							'gfs_description_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Font Size (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds font size to the title', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper span.gform_description',
										'property'		=> 'font-size',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
							'gfs_description_alignment' => array(
		                        'setting'    => array(
		                            'default' => 'left'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __('Alignment', 'gfs'),
									'choices'		=> array(
										'left'		=> __('Left'),
										'center'		=> __('Center'),
										'right'		=> __('Right')
									),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper span.gform_description',
		                            )
		                        )
							),
						)
					),
					'gfs_form_label_style'	=> array(
						'title'	=> __( 'Labels', 'gfs' ),
						'description'	=> __( 'Style the labels of a form by adding width, colors, border, padding and margins.', 'gfs' ),
						'fields'	=> array(
							'gfs_labels' => array(
		                        'setting'    => array(
		                            'default' => 'no'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __('Hide Labels?', 'gfs'),
									'choices'		=> array(
										'yes'		=> __('Yes'),
										'no'		=> __('No')
									),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .top_label .gfield_label',
		                            )
		                        )
							),
							'gfs_label_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Text Color', 'gfs'),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .top_label .gfield_label',
										'property'		=> 'color'
		                            )
		                        )
		                    ),
							'gfs_label_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Font Size (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds font size to the  labels', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .top_label .gfield_label',
										'property'		=> 'font-size',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
						)
					),
					'gfs_form_section_style'	=> array(
						'title'	=> __( 'Sections', 'gfs' ),
						'description'	=> __( 'Style the sections of a form by adding font size, color and border.', 'gfs' ),
						'fields'	=> array(
							'gfs_section_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Text Color', 'gfs'),
		                            'default' 		=> '#000000',
		                            'preview'       => array(
		                                'type'          => 'color',
		                                'selector'      => 'div.gform_wrapper h2.gsection_title'
		                            )
		                        )
		                    ),
							'gfs_section_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Font Size (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds font size to the  section title', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper h2.gsection_title',
										'property'		=> 'font-size',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
							'gfs_section_border_width' => array(
		                        'setting'    => array(
		                            'default' => 1,
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Border Width (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds border width to the section title', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .gsection',
										'property'		=> 'border-bottom-width',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
							'gfs_section_border_color' => array(
		                        'setting'    => array(
		                            'default' => '#cccccc'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Border Color', 'gfs'),
		                            'default' 		=> '#cccccc',
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .gsection',
										'property'		=> 'border-bottom-color'
		                            )
		                        )
		                    ),
						)
					),
					'gfs_form_input_style'	=> array(
						'title'	=> __( 'Inputs', 'gfs' ),
						'description'	=> __( 'Style the input fields of a form by adding width, colors, border, padding and margins.', 'gfs' ),
						'fields'	=> array(
							'gfs_input_width'      => array(
                                'setting'    => array(
                                    'default' => 'no'
                                ),
                                'control'    => array(
                                    'type'              => 'radio',
                                        'label'             => __('Full Width?', 'gfs'),
                                    'choices'           => array(
                                        'yes'          => __('Yes', 'gfs'),
                                        'no'        => __('No', 'gfs')
                                    ),
                                ),
                            ),
							'gfs_input_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Text Color', 'gfs'),
		                            'default' 		=> '#000000',
		                            'preview'       => array(
		                                'type'          => 'color',
										'rules'			=> array(
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'color',
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'color',
											)
										)
		                            )
		                        )
		                    ),
							'gfs_input_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '#ffffff'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Background Color', 'gfs'),
		                            'default' 		=> '#ffffff',
		                            'preview'       => array(
		                                'type'          => 'background-color',
										'rules'			=> array(
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'background-color',
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'background-color',
											)
										)
		                            )
		                        )
		                    ),
							'gfs_inputs_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => 10,
		                                'bottom'    => 10,
		                                'left'        => 10,
		                                'right'        => 10
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __('Padding (px)', 'gfs'),
		                            'class' 		=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds padding to the input fields', 'gfs' ),
									'choices'            => array(
		                                'top'            => __('Top'),
		                                'bottom'         => __('Bottom'),
		                                'left'           => __('Left'),
		                                'right'          => __('Right')
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
										'rules'			=> array(
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'padding-top',
												'unit'			=> 'px'
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'padding-top',
												'unit'			=> 'px'
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'padding-bottom',
												'unit'			=> 'px'
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'padding-bottom',
												'unit'			=> 'px'
											)
										)
		                            )
		                        )
		                    ),
							'gfs_input_margin' => array(
		                        'setting'    => array(
		                            'default' => '',
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Margin (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds margin to the input fields', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'               => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => '.gform_wrapper',
										'property'		=> 'margin-bottom',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
							'gfs_input_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Font Size (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds font size to the input fields', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
										'rules'			=> array(
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'font-size',
												'unit'			=> 'px'
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'font-size',
												'unit'			=> 'px'
											)
										)
		                            )
		                        )
		                    ),
							'gfs_input_border_width' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => 1,
		                                'bottom'    	=> 1,
		                                'left'        => 1,
		                                'right'        => 1
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
									'type'          => 'ib-multitext',
		                            'label'         => __('Border Width (px)', 'gfs'),
		                            'class' 		=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds border width to the input fields', 'gfs' ),
									'choices'            => array(
		                                'top'            => __('Top'),
		                                'bottom'         => __('Bottom'),
		                                'left'           => __('Left'),
		                                'right'          => __('Right')
		                            ),
		                            'preview'       => array(
		                                'type'          => 'padding',
		                                'selector'      => '.gform_wrapper'
		                            )
		                        )
		                    ),
							'gfs_input_border_color' => array(
		                        'setting'    => array(
		                            'default' => '#eeeeee'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Border Color', 'gfs'),
		                            'default' 		=> '#000000',
		                            'preview'       => array(
		                                'type'          => 'css',
										'rules'			=> array(
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'border-color',
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'border-color',
											)
										)
		                            )
		                        )
		                    ),
							'gfs_input_border_radius' => array(
		                        'setting'    => array(
		                            'default' => 0,
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Border Radius (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds border radius to the input fields', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
										'rules'			=> array(
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'border-radius',
												'unit'			=> 'px'
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'border-radius',
												'unit'			=> 'px'
											)
										)
		                            )
		                        )
		                    ),
						)
					),
					'gfs_form_button_style'	=> array(
						'title'	=> __( 'Button', 'gfs' ),
						'description'	=> __( 'Customize the form button with colors, border, even change the hover state colors.', 'gfs' ),
						'fields'	=> array(
							'gfs_button_width'      => array(
                                'setting'    => array(
                                    'default' => 'no'
                                ),
                                'control'    => array(
                                    'type'              => 'radio',
                                        'label'             => __('Full Width?', 'gfs'),
                                    'choices'           => array(
                                        'yes'          	=> __('Yes', 'gfs'),
                                        'no'        	=> __('No', 'gfs')
                                    ),
                                ),
                            ),
							'gfs_button_color' => array(
		                        'setting'    => array(
		                            'default' => '#ffffff'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Text Color', 'gfs'),
		                            'default' 		=> '#ffffff',
		                            'preview'       => array(
		                                'type'          => 'css',
										'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]',
										'property'		=> 'color',
		                            )
		                        )
		                    ),
							'gfs_button_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Background Color', 'gfs'),
		                            'default' 		=> '#000000',
		                            'preview'       => array(
										'type'          => 'css',
										'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]',
										'property'		=> 'background-color',
		                            )
		                        )
		                    ),
							'gfs_button_hover_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Text Hover Color', 'gfs'),
		                            'default' 		=> '#000000',
		                            'preview'       => array(
										'type'          => 'css',
										'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]:hover',
										'property'		=> 'color',
		                            )
		                        )
		                    ),
							'gfs_button_bg_hover_color' => array(
		                        'setting'    => array(
		                            'default' => '#ffffff'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __('Background Hover Color', 'gfs'),
		                            'default' 		=> '#ffffff',
		                            'preview'       => array(
										'type'          => 'css',
										'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]:hover',
										'property'		=> 'background-color',
		                            )
		                        )
		                    ),
							'gfs_button_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => 10,
		                                'bottom'    => 10,
		                                'left'        => 10,
		                                'right'        => 10
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __('Padding (px)', 'gfs'),
		                            'class' 		=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds padding to the button', 'gfs' ),
									'choices'            => array(
		                                'top'            => __('Top'),
		                                'bottom'         => __('Bottom'),
		                                'left'           => __('Left'),
		                                'right'          => __('Right')
		                            ),
		                            'preview'       => array(
		                                'type'          => 'padding',
		                                'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]'
		                            )
		                        )
		                    ),
							'gfs_button_border_width' => array(
		                        'setting'    => array(
		                            'default' => 0,
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Border Width (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds border width to the button', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
										'type'          => 'css',
										'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]',
										'property'		=> 'border-width',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
							'gfs_button_border_color' => array(
		                        'setting'    => array(
		                            'default' => '#000000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Border Color', 'gfs' ),
		                            'default' 		=> '#000000',
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]',
										'property'		=> 'border-color'
		                            )
		                        )
		                    ),
							'gfs_button_border_radius' => array(
		                        'setting'    => array(
		                            'default' => 0,
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Border Radius (px)', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds border radius to the button', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]',
										'property'		=> 'border-radius',
										'unit'			=> 'px'
		                            )
		                        )
		                    ),
						)
					),
					'gfs_form_errors_style'	=> array(
						'title'			=> __( 'Errros', 'gfs' ),
						'description'	=> __( 'Customize the form errors with colors, border, even change the style of error fields.', 'gfs' ),
						'fields'		=> array(
							'gfs_error_validation' => array(
		                        'setting'    => array(
		                            'default' => 'no'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __('Hide Error Validation?', 'gfs'),
									'choices'		=> array(
										'yes'		=> __('Yes'),
										'no'		=> __('No')
									),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .top_label .gfield_label',
		                            ),
		                        ),
								'toggle'		=> array(
									'no'	=> array( 'gfs_error_description_color' )
								)
							),
							'gfs_error_description_color' => array(
		                        'setting'    => array(
		                            'default' => '#790000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Error Description Color', 'gfs'),
									'default' 		=> '#790000',
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]',
										'property'		=> 'color'
		                            )
		                        )
		                    ),
							'gfs_error_border_color' => array(
		                        'setting'    => array(
		                            'default' => '#790000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Error Border Color', 'gfs' ),
									'default' 		=> '#790000',
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]',
										'property'		=> 'border-color'
		                            )
		                        )
		                    ),
							'gfs_error_field_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '#ffdfe0'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Error Field Background Color', 'gfs' ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .gform_footer input[type=submit]',
										'property'		=> 'background-color'
		                            )
		                        )
		                    ),
							'gfs_error_field_label_color' => array(
		                        'setting'    => array(
		                            'default' => '#790000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Error Field Label Color', 'gfs' ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper li.gfield.gfield_error',
										'property'		=> 'color'
		                            )
		                        )
		                    ),
							'gfs_error_field_input_border_color' => array(
		                        'setting'    => array(
		                            'default' => '#790000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Error Field Input Border Color', 'gfs' ),
		                            'preview'       => array(
		                                'type'          => 'css',
										'rules'			=> array(
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'border-color',
												'unit'			=> 'px'
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'border-color',
												'unit'			=> 'px'
											)
										)
		                            )
		                        )
		                    ),
							'gfs_error_field_input_border_width' => array(
		                        'setting'    => array(
		                            'default' => 0,
									'sanitize_callback' => 'gfs_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __('Error Field Input Border Width', 'gfs'),
									'class'			=> 'IBCustomizer_Control',
									'description'	=> __( 'Adds border width to the error field input.', 'gfs' ),
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                            'preview'       => array(
		                                'type'          => 'css',
										'rules'			=> array(
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])',
												'property'		=> 'border-width',
												'unit'			=> 'px'
											),
											array(
												'selector'      => 'div.gform_wrapper li.gfield_error textarea',
												'property'		=> 'border-width',
												'unit'			=> 'px'
											)
										)
		                            )
		                        )
		                    ),
							'gfs_error_field_message' => array(
		                        'setting'    => array(
		                            'default' => 'no'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __('Hide Error Field Message?', 'gfs'),
									'choices'		=> array(
										'yes'		=> __('Yes'),
										'no'		=> __('No')
									),
		                        ),
								'toggle'		=> array(
									'no'	=> array( 'gfs_error_field_message_color' )
								)
							),
							'gfs_error_field_message_color' => array(
		                        'setting'    => array(
		                            'default' => '#790000'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Error Field Message Color', 'gfs' ),
		                            'preview'       => array(
		                                'type'          => 'css',
		                                'selector'      => 'div.gform_wrapper .validation_message',
										'property'		=> 'color'
		                            )
		                        )
		                    ),
						)
					),
				)
			)
		)
	);

}

add_action( 'wp_head', 'gfs_output_styles', 1000 );
function gfs_output_styles() {
	$form_padding 		= IBCustomizer::get_mod('gfs_form_padding', true);
	$form_margin 		= IBCustomizer::get_mod('gfs_form_margin', true);
	$input_padding 		= IBCustomizer::get_mod('gfs_inputs_padding', true);
	$input_border		= IBCustomizer::get_mod('gfs_input_border_width', true);
	$button_padding 	= IBCustomizer::get_mod('gfs_button_padding', true);
	 ?>
	<style type="text/css">
		div.gform_wrapper {
			background-color: <?php echo (IBCustomizer::get_mod( 'gfs_form_bg_color' )) ? IBCustomizer::get_mod( 'gfs_form_bg_color' ) : 'transparent' ; ?>;
			<?php if( IBCustomizer::get_mod('gfs_form_bg_image') ) { ?>
			background-image: url(<?php echo IBCustomizer::get_mod('gfs_form_bg_image'); ?>);
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_form_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod( 'gfs_form_color' ); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_form_font_size') ) { ?>
			font-size: <?php echo IBCustomizer::get_mod('gfs_form_font_size'); ?>px;
			<?php } ?>
			<?php if( $form_padding['top'] ) { ?>
			padding-top: <?php echo $form_padding['top']; ?>px;
			<?php } ?>
			<?php if( $form_padding['bottom'] ) { ?>
			padding-bottom: <?php echo $form_padding['bottom']; ?>px;
			<?php } ?>
			<?php if( $form_padding['left'] ) { ?>
			padding-left: <?php echo $form_padding['left']; ?>px;
			<?php } ?>
			<?php if( $form_padding['right'] ) { ?>
			padding-right: <?php echo $form_padding['right']; ?>px;
			<?php } ?>
			<?php if( $form_margin['top'] ) { ?>
			margin-top: <?php echo $form_margin['top']; ?>px;
			<?php } ?>
			<?php if( $form_margin['bottom'] ) { ?>
			margin-bottom: <?php echo $form_margin['bottom']; ?>px;
			<?php } ?>
			<?php if( $form_margin['left'] ) { ?>
			margin-left: <?php echo $form_margin['left']; ?>px;
			<?php } ?>
			<?php if( $form_margin['right'] ) { ?>
			margin-right: <?php echo $form_margin['right']; ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_form_border_width') >= 0 ) { ?>
			border-width: <?php echo IBCustomizer::get_mod('gfs_form_border_width'); ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_form_border_color') ) { ?>
			border-color: <?php echo IBCustomizer::get_mod('gfs_form_border_color'); ?>;
			<?php } ?>
			border-style: solid;
			<?php if( IBCustomizer::get_mod('gfs_form_border_radius') ) { ?>
			border-radius: <?php echo IBCustomizer::get_mod('gfs_form_border_radius'); ?>px;
			<?php } ?>
		}

		div.gform_wrapper h3.gform_title {
			<?php if( IBCustomizer::get_mod('gfs_title_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod( 'gfs_title_color' ); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_title_font_size') ) { ?>
			font-size: <?php echo IBCustomizer::get_mod('gfs_title_font_size'); ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_title_alignment') ) { ?>
			text-align: <?php echo IBCustomizer::get_mod('gfs_title_alignment'); ?>;
			<?php } ?>
		}

		div.gform_wrapper span.gform_description {
			<?php if( IBCustomizer::get_mod('gfs_description_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod( 'gfs_description_color' ); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_description_font_size') ) { ?>
			font-size: <?php echo IBCustomizer::get_mod('gfs_description_font_size'); ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_description_alignment') ) { ?>
			text-align: <?php echo IBCustomizer::get_mod('gfs_description_alignment'); ?>;
			<?php } ?>
		}

		div.gform_wrapper .top_label .gfield_label {
			<?php if( IBCustomizer::get_mod('gfs_labels') == 'yes' ) { ?>
				display: none;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_label_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod('gfs_label_color'); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_label_font_size') ) { ?>
			font-size: <?php echo IBCustomizer::get_mod('gfs_label_font_size'); ?>px;
			<?php } ?>
		}

		div.gform_wrapper .gsection {
			<?php if( IBCustomizer::get_mod('gfs_section_border_width') ) { ?>
			border-bottom-width: <?php echo IBCustomizer::get_mod('gfs_section_border_width'); ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_section_border_color') ) { ?>
			border-bottom-color: <?php echo IBCustomizer::get_mod('gfs_section_border_color'); ?>;
			<?php } ?>
		}

		div.gform_wrapper h2.gsection_title {
			<?php if( IBCustomizer::get_mod('gfs_section_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod('gfs_section_color'); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_section_font_size') ) { ?>
			font-size: <?php echo IBCustomizer::get_mod('gfs_section_font_size'); ?>px;
			<?php } ?>
		}

		div.gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]),
		div.gform_wrapper textarea {
			<?php if( IBCustomizer::get_mod('gfs_input_width') == 'yes' ) { ?>
				width: 100%;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_input_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod('gfs_input_color'); ?>;
			<?php } ?>
			background-color: <?php echo (IBCustomizer::get_mod('gfs_input_bg_color')) ? IBCustomizer::get_mod('gfs_input_bg_color') : 'transparent'; ?>;
			<?php if( $input_padding['top'] ) { ?>
			padding-top: <?php echo $input_padding['top']; ?>px;
			<?php } ?>
			<?php if( $input_padding['bottom'] ) { ?>
			padding-bottom: <?php echo $input_padding['bottom']; ?>px;
			<?php } ?>
			<?php if( $input_padding['left'] ) { ?>
			padding-left: <?php echo $input_padding['left']; ?>px;
			<?php } ?>
			<?php if( $input_padding['right'] ) { ?>
			padding-right: <?php echo $input_padding['right']; ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_input_font_size') ) { ?>
			font-size: <?php echo IBCustomizer::get_mod('gfs_input_font_size'); ?>px;
			<?php } ?>
			<?php if( $input_border['top'] ) { ?>
			border-top-width: <?php echo $input_border['top']; ?>px;
			<?php } ?>
			<?php if( $input_border['bottom'] ) { ?>
			border-bottom-width: <?php echo $input_border['bottom']; ?>px;
			<?php } ?>
			<?php if( $input_border['left'] ) { ?>
			border-left-width: <?php echo $input_border['left']; ?>px;
			<?php } ?>
			<?php if( $input_border['right'] ) { ?>
			border-right-width: <?php echo $input_border['right']; ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_input_border_color') ) { ?>
			border-color: <?php echo IBCustomizer::get_mod('gfs_input_border_color'); ?>;
			<?php } ?>
			border-style: solid;
			<?php if( IBCustomizer::get_mod('gfs_input_border_radius') ) { ?>
			border-radius: <?php echo IBCustomizer::get_mod('gfs_input_border_radius'); ?>px;
			<?php } ?>
		}
		div.gform_wrapper ul.gform_fields li.gfield {
			<?php if( IBCustomizer::get_mod('gfs_input_margin') ) { ?>
			margin-bottom: <?php echo IBCustomizer::get_mod('gfs_input_margin'); ?>px;
			<?php } ?>
		}
		div.gform_wrapper .gform_footer input[type=submit] {
			<?php if( IBCustomizer::get_mod('gfs_button_width') == 'yes' ) { ?>
				width: 100%;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_button_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod('gfs_button_color'); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_button_bg_color') ) { ?>
			background-color: <?php echo IBCustomizer::get_mod('gfs_button_bg_color'); ?>;
			<?php } ?>
			<?php if( $button_padding['top'] ) { ?>
			padding-top: <?php echo $button_padding['top']; ?>px;
			<?php } ?>
			<?php if( $button_padding['bottom'] ) { ?>
			padding-bottom: <?php echo $button_padding['bottom']; ?>px;
			<?php } ?>
			<?php if( $button_padding['left'] ) { ?>
			padding-left: <?php echo $button_padding['left']; ?>px;
			<?php } ?>
			<?php if( $button_padding['right'] ) { ?>
			padding-right: <?php echo $button_padding['right']; ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_button_border_width') ) { ?>
			border-width: <?php echo IBCustomizer::get_mod('gfs_button_border_width'); ?>px;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_button_border_color') ) { ?>
			border-color: <?php echo IBCustomizer::get_mod('gfs_button_border_color'); ?>;
			<?php } ?>
			border-style: solid;
			<?php if( IBCustomizer::get_mod('gfs_button_border_radius') ) { ?>
			border-radius: <?php echo IBCustomizer::get_mod('gfs_button_border_radius'); ?>px;
			<?php } ?>
		}

		div.gform_wrapper .gform_footer input[type=submit]:hover {
			<?php if( IBCustomizer::get_mod('gfs_button_hover') ) { ?>
			color: <?php echo IBCustomizer::get_mod('gfs_button_hover'); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_button_bg_hover') ) { ?>
			background-color: <?php echo IBCustomizer::get_mod('gfs_button_bg_hover'); ?>;
			<?php } ?>
		}

		div.gform_wrapper div.validation_error {
			<?php if( IBCustomizer::get_mod('gfs_error_validation') == 'yes' ) { ?>
				display: none;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_error_description_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod('gfs_error_description_color'); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_error_border_color') ) { ?>
			border-top-color: <?php echo IBCustomizer::get_mod('gfs_error_border_color'); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_error_border_color') ) { ?>
			border-bottom-color: <?php echo IBCustomizer::get_mod('gfs_error_border_color'); ?>;
			<?php } ?>
		}

		div.gform_wrapper li.gfield.gfield_error {
			background-color: <?php echo ( IBCustomizer::get_mod( 'gfs_error_field_bg_color' ) ) ? IBCustomizer::get_mod( 'gfs_error_field_bg_color' ) : 'transparent'; ?>;
		}

		div.gform_wrapper .gfield_error .gfield_label {
			<?php if( IBCustomizer::get_mod('gfs_error_field_label_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod('gfs_error_field_label_color'); ?>;
			<?php } ?>
		}

		div.gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]),
		div.gform_wrapper li.gfield_error textarea {
			<?php if( IBCustomizer::get_mod('gfs_error_field_input_border_color') ) { ?>
			border-color: <?php echo IBCustomizer::get_mod('gfs_error_field_input_border_color'); ?>;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_error_field_input_border_width') >= 0 ) { ?>
			border-width: <?php echo IBCustomizer::get_mod('gfs_error_field_input_border_width'); ?>px;
			<?php } ?>
		}

		div.gform_wrapper .validation_message {
			<?php if( IBCustomizer::get_mod('gfs_error_field_message') == 'yes' ) { ?>
				display: none;
			<?php } ?>
			<?php if( IBCustomizer::get_mod('gfs_error_field_message_color') ) { ?>
			color: <?php echo IBCustomizer::get_mod('gfs_error_field_message_color'); ?>;
			<?php } ?>
		}

	</style>
	<?php
}

function gfs_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
