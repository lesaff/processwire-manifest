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

class Manifest extends Process {

    private static $manifestFile; 
    private static $buildPath; 
 
    // Initialize the module
    public function init() 
    {

        // always remember to call the parent init
        parent::init();

        self::$manifestFile = $this->config->paths->templates . $this->manifest_file;
        self::$buildPath = $this->config->urls->templates . $this->build_path;
    }


    /**
     * Get CSS path from manifest
     *
     * @param [string] $path
     * @return string
     */
    public function css($path)
    {
      $in = json_decode(file_get_contents(self::$manifestFile), true);
      return '<link rel="stylesheet" type="text/css" href="' . self::$buildPath . $in[$path] . '" media="screen">';
    }


    /**
     * Get JS path from manifest
     *
     * @param [string] $path
     * @return string
     */
    public function js($path)
    {
      $in = json_decode(file_get_contents(self::$manifestFile), true);
      return '<script src="' . self::$buildPath . $in[$path] . '" async defer></script>';
    }


    /**
     * Install any module dependencies
     * 
     */
    public function ___install() 
    {
    }


    /**
     * Cleanup prior to uninstall
     * 
     */
    public function ___uninstall() 
    {
    }    
}