<?php

vc_map( array(
	'name' => __( 'Tour', 'js_composer' ),
	'base' => 'vc_tta_tour',
	'icon' => 'icon-wpb-ui-tab-content-vertical',
	'is_container' => true,
	'show_settings_on_create' => false,
	'as_parent' => array(
		'only' => 'vc_tta_section'
	),
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Vertical tabbed content', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'param_name' => 'title',
			'heading' => __( 'Widget title', 'js_composer' ),
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'style',
			'value' => array(
				__( 'Classic', 'js_composer' ) => 'classic',
				__( 'Modern', 'js_composer' ) => 'modern',
				__( 'Flat', 'js_composer' ) => 'flat',
				__( 'Outline', 'js_composer' ) => 'outline',
			),
			'heading' => __( 'Style', 'js_composer' ),
			'description' => __( 'Select tour display style.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'shape',
			'value' => array(
				__( 'Rounded', 'js_composer' ) => 'rounded',
				__( 'Square', 'js_composer' ) => 'square',
				__( 'Round', 'js_composer' ) => 'round',
			),
			'heading' => __( 'Shape', 'js_composer' ),
			'description' => __( 'Select tour shape.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'color',
			'heading' => __( 'Color', 'js_composer' ),
			'description' => __( 'Select tour color.', 'js_composer' ),
			'value' => getVcShared( 'colors-dashed' ),
			'std' => 'grey',
			'param_holder_class' => 'vc_colored-dropdown',
		),
		array(
			'type' => 'checkbox',
			'param_name' => 'no_fill_content_area',
			'heading' => __( 'Do not fill content area?', 'js_composer' ),
			'description' => __( 'Do not fill content area with color.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'spacing',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( '1px', 'js_composer' ) => '1',
				__( '2px', 'js_composer' ) => '2',
				__( '3px', 'js_composer' ) => '3',
				__( '4px', 'js_composer' ) => '4',
				__( '5px', 'js_composer' ) => '5',
				__( '10px', 'js_composer' ) => '10',
				__( '15px', 'js_composer' ) => '15',
				__( '20px', 'js_composer' ) => '20',
				__( '25px', 'js_composer' ) => '25',
				__( '30px', 'js_composer' ) => '30',
				__( '35px', 'js_composer' ) => '35',
			),
			'heading' => __( 'Spacing', 'js_composer' ),
			'description' => __( 'Select tour spacing.', 'js_composer' ),
			'std' => '1'
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'gap',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( '1px', 'js_composer' ) => '1',
				__( '2px', 'js_composer' ) => '2',
				__( '3px', 'js_composer' ) => '3',
				__( '4px', 'js_composer' ) => '4',
				__( '5px', 'js_composer' ) => '5',
				__( '10px', 'js_composer' ) => '10',
				__( '15px', 'js_composer' ) => '15',
				__( '20px', 'js_composer' ) => '20',
				__( '25px', 'js_composer' ) => '25',
				__( '30px', 'js_composer' ) => '30',
				__( '35px', 'js_composer' ) => '35',
			),
			'heading' => __( 'Gap', 'js_composer' ),
			'description' => __( 'Select tour gap.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'tab_position',
			'value' => array(
				__( 'Left', 'js_composer' ) => 'left',
				__( 'Right', 'js_composer' ) => 'right'
			),
			'heading' => __( 'Position', 'js_composer' ),
			'description' => __( 'Select tour navigation position.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'alignment',
			'value' => array(
				__( 'Left', 'js_composer' ) => 'left',
				__( 'Right', 'js_composer' ) => 'right',
				__( 'Center', 'js_composer' ) => 'center',
			),
			'heading' => __( 'Alignment', 'js_composer' ),
			'description' => __( 'Select tour section title alignment.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'controls_size',
			'value' => array(
				__( 'Auto', 'js_composer' ) => '',
				__( 'Extra large', 'js_composer' ) => 'xl',
				__( 'Large', 'js_composer' ) => 'lg',
				__( 'Medium', 'js_composer' ) => 'md',
				__( 'Small', 'js_composer' ) => 'sm',
				__( 'Extra small', 'js_composer' ) => 'xs',
			),
			'heading' => __( 'Navigation width', 'js_composer' ),
			'description' => __( 'Select tour navigation width.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'autoplay',
			'value' => array(
				__( 'None', 'js_composer' ) => 'none',
				__( '1', 'js_composer' ) => '1',
				__( '2', 'js_composer' ) => '2',
				__( '3', 'js_composer' ) => '3',
				__( '4', 'js_composer' ) => '4',
				__( '5', 'js_composer' ) => '5',
				__( '10', 'js_composer' ) => '10',
				__( '20', 'js_composer' ) => '20',
				__( '30', 'js_composer' ) => '30',
				__( '40', 'js_composer' ) => '40',
				__( '50', 'js_composer' ) => '50',
				__( '60', 'js_composer' ) => '60',
			),
			'std' => 'none',
			'heading' => __( 'Autoplay', 'js_composer' ),
			'description' => __( 'Select auto rotate for tour in seconds (Note: disabled by default).', 'js_composer' ),
		),
		array(
			'type' => 'textfield',
			'param_name' => 'active_section',
			'heading' => __( 'Active section', 'js_composer' ),
			'value' => 1,
			'description' => __( 'Enter active section number (Note: to have all sections closed on initial load enter non-existing number).', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'pagination_style',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( 'Square Dots', 'js_composer' ) => 'outline-square',
				__( 'Radio Dots', 'js_composer' ) => 'outline-round',
				__( 'Point Dots', 'js_composer' ) => 'flat-round',
				__( 'Fill Square Dots', 'js_composer' ) => 'flat-square',
				__( 'Rounded Fill Square Dots', 'js_composer' ) => 'flat-rounded',
			),
			'heading' => __( 'Pagination style', 'js_composer' ),
			'description' => __( 'Select pagination style.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'pagination_color',
			'value' => getVcShared( 'colors-dashed' ),
			'heading' => __( 'Pagination color', 'js_composer' ),
			'description' => __( 'Select pagination color.', 'js_composer' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'std' => 'grey',
			'dependency' => array(
				'element' => 'pagination_style',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
		),
	),
	'js_view' => 'VcBackendTtaTourView',
	'custom_markup' => '
<div class="vc_tta-container" data-vc-action="collapse">
	<div class="vc_general vc_tta vc_tta-tabs vc_tta-color-backend-tabs-white vc_tta-style-flat vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-left vc_tta-controls-align-left">
		<div class="vc_tta-tabs-container">'
		                   . '<ul class="vc_tta-tabs-list">'
		                   . '<li class="vc_tta-tab" data-vc-tab data-vc-target-model-id="{{ model_id }}"><a href="javascript:;" data-vc-container=".vc_tta" data-vc-target="[data-model-id=\'{{ model_id }}\']" data-vc-target-model-id="{{ model_id }}" data-vc-tabs>{{ section_title }}</a></li>'
		                   . '</ul>
		</div>
		<div class="vc_tta-panels {{container-class}}">
		  {{ content }}
		</div>
	</div>
</div>',
	'default_content' => '
[vc_tta_section title="' . sprintf( "%s %d", __( 'Section', 'js_composer' ), 1 ) . '"][/vc_tta_section]
[vc_tta_section title="' . sprintf( "%s %d", __( 'Section', 'js_composer' ), 2 ) . '"][/vc_tta_section]
	',
	'admin_enqueue_js' => array(
		vc_asset_url( 'lib/vc_accordion/vc-accordion.js' ),
		vc_asset_url( 'lib/vc_tabs/vc-tabs.js' ),
	),
) );