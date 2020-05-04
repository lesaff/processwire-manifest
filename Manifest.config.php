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

class ManifestConfig extends ModuleConfig {

    /**
     * Get module settings
     *
     * @return     <type>  The inputfields.
     */
    public function __construct()
    {

        $this->add(array(
            array(
                'name' => 'manifest_file',
                'label' => $this->_('Manifest File'),
                'description' => $this->_('Path should be relative to your templates folder. (`/site/templates`)'),
                'type' => 'text',
                'required' => true,
                'value' => $this->_('/build/mix-manifest.json'),
                'columnWidth' => 100,
            ),
            array(
                'name' => 'build_path',
                'label' => $this->_('Build Folder'),
                'description' => $this->_('Path should be relative to your templates folder. (`/site/templates`)'),
                'type' => 'text',
                'required' => true,
                'value' => $this->_('build'),
                'columnWidth' => 100,
            ),
        ));
    }
}
