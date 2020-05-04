<?php
/**
 * Manifest module for ProcessWire CMS
 * by Rudy Affandi (2020)
 * https://github.com/lesaff
 * MIT License
 * 
 * ProcessWire 2.x 
 * Copyright (C) 2014 by Ryan Cramer 
 * Licensed under GNU/GPL v2, see LICENSE.TXT
 * 
 * http://processwire.com
 * 
 */

$info = [

	// Module meta data
	'title'    => 'Manifest',
	'version'  => '1.0.0',
	'summary'  => 'Provide Manifest interface on ProcessWire',
	'author'   => 'Rudy Affandi',
	'href'     => 'https://github.com/lesaff/ProcessWire-Manifest',
	'icon'     => 'data',
	'requires' => 'ProcessWire>=2.5',

	// use autoload if module is to be called each load, if it is only needed to setup something set to false
	'autoload' => false,
	'singular' => true,
];
