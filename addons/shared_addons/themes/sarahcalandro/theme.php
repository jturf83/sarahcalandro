<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Sarahcalandro extends Theme
{
    public $name			= 'sarahcalandro';
    public $author			= 'Jonathan Turfboer';
    public $description		= 'An HTML5 base template for sarahcalandro.com';
    public $version			= '0.0.1';
	public $options 		= array(
		'background' => array(
			'title'         => 'Background',
			'description'   => 'Choose the default background for the theme.',
			'default'       => 'fabric',
			'type'          => 'select',
			'options'       => 'black=Black|fabric=Fabric|graph=Graph|leather=Leather|noise=Noise|texture=Texture',
			'is_required'   => true
		),
		'slider' => array(
			'title'         => 'Slider',
			'description'   => 'Would you like to display the slider on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'color' => array(
			'title'         => 'Default Theme Color',
			'description'   => 'This changes things like background color, link colors etc…',
			'default'       => 'pink',
			'type'          => 'select',
			'options'       => 'red=Red|orange=Orange|yellow=Yellow|green=Green|blue=Blue|pink=Pink',
			'is_required'   => true
		),
		'show_breadcrumbs' 	=> array(
			'title'         => 'Do you want to show breadcrumbs?',
			'description'   => 'If selected it shows a string of breadcrumbs at the top of the page.',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
	);
}

/* End of file theme.php */