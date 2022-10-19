<?php
class MY_Router extends CI_Router{
 
	// CHANGE UNDERSCORE TO DASH
	function _set_request($segments = array()) {
		parent::_set_request(str_replace('-', '_', $segments)); 
	}
}