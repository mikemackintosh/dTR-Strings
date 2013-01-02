<?php

/*
 * dTR-Strings is a string modifier class
 * 
 * @author Mike Mackintosh
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public Licence
 * @copyright (c) 2012 - Mike Mackintosh
 * @version 0.1.0
 * @package dTR
 */

namespace dTR\LanguageTypes;

/**
 * @author Mike Mackintosh
 *
 */
class Strings{
	
	private $string;

	public function __construct( $string ){
		
		$this->string = $string;
		
	}
	
	public function __toString(){
		
		return $this->string;
		
	}
	
	public function toUpperCase(){
		
		return strtoupper($this->string);
		
	}
	
	public function toLowerCase(){
	
		return strtolower($this->string);
	
	}	
	
	public function toUpperWords(){
		
		return ucwords($this->string);
		
	}

	public function toUpperFirst(){
	
		return ucfirst($this->string);
	
	}
		
	public function to(){
	
		return ucfirst($this->string);
	
	}
	
}
