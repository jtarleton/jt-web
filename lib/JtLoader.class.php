<?php

class JtLoader {

	private function __construct(){
	
	}
	public static function load(){
		require_once('./httpful.phar');
	}
}

JtLoader::load();
