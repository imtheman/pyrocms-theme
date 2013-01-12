<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Theme_Personal extends Theme
{
    public $name            = 'Personal Theme';
    public $author          = 'Trea Hauet';
    public $author_website  = 'http://treahauet.com';
    public $website         = 'http://treahauet.com';
    public $description     = '';
    public $version         = '1.0';
    public $options			= array(
    	'initials'	=> array(
    		'title' => 'Initials',
    		'description' => 'Used in the "emblem" in the main header.',
    		'default' => '',
    		'type' => 'text',
    		'options' => '',
    		'is_required' => true
		)
	);
 }
/* End of file theme.php */
