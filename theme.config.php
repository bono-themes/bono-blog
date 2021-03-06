<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

return array(
    'meta' => array(
        'name' => 'Blog',
        'description' => 'Default blogging theme for Bono CMS',
        'version' => '1.2',
        'author' => 'NGS Labs'
    ),
    
	'plugins' => array(
		'jquery',
		'to-top',
		'bootstrap.core'
	),
	
	// Stylesheets and scripts
	'theme' => array(
		'stylesheets' => array(
			'/css/cosmo.min.css',
			'/css/blog.css',
		),
		'scripts' => array(
			// No additional scripts required for this theme
		)
	)
);
