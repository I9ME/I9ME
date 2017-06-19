<?php

$prefix = 'wpcf_';
add_filter( 'rwmb_meta_boxes', 'wpcf_meta_boxes' );
function wpcf_meta_boxes($meta_boxes) {

//==============================================
// SLIDES
//==============================================

$meta_boxes[] = array(

	'id' => 'slides',
	'title' => 'Detalhes do Slide',
	'pages' => array( 'slides' ),
	'context' => 'normal',
	'priority' => 'high',

	'fields' => array(
		array(
			'name'   	 => 'Descrição',
			'id'	 	 => "slide_desc",
			'desc'		 => 'Descrição',
			'type'	 	 => 'wysiwyg',
		),
		array(
			'name'   	 => 'Link',
			'id'	 	 => "slide_link",
			'desc'		 => 'Defina o Link do Slide',
			'type'	 	 => 'text',
		),

		array(
			'name'   	 => 'Target do Link',
			'id'	 	 => "slide_target",
			'type'	 	 => 'radio',
			'options' 	 => array('_self' => 'Interno', '_blank' => 'Externo'),
			'std' 		 => '_self'
		),

		array(
			'name'   	 => 'Texto Botão',
			'id'	 	 => "slide_btn",
			'desc'		 => 'Defina o texto do botão',
			'type'	 	 => 'text',
		),
	)
);

//==============================================
// NOTICIAS
//==============================================

$meta_boxes[] = array(

	'id' => 'noticias',
	'title' => 'Detalhes de noticias',
	'pages' => array( 'noticias' ),
	'context' => 'normal',
	'priority' => 'high',

	'fields' => array(
		array(
			'name'   	 => 'Descrição',
			'id'	 	 => "noticias_desc",
			'desc'		 => 'Descrição',
			'type'	 	 => 'wysiwyg',
		),
		array(
			'name'   	 => 'Link',
			'id'	 	 => "noticias_link",
			'desc'		 => 'Defina o Link do noticias',
			'type'	 	 => 'text',
		),

		array(
			'name'   	 => 'Target do Link',
			'id'	 	 => "noticias_target",
			'type'	 	 => 'radio',
			'options' 	 => array('_self' => 'Interno', '_blank' => 'Externo'),
			'std' 		 => '_self'
		),

		array(
			'name'   	 => 'Texto Botão',
			'id'	 	 => "noticias_btn",
			'desc'		 => 'Defina o texto do botão',
			'type'	 	 => 'text',
		),
	)
);




//=========================================================================================
// END DEFINITION OF META BOXES
//=========================================================================================
	return $meta_boxes;
}

