<?php
//TODO: Change namespace
namespace ddStartSnippet;

class Snippet extends \DDTools\Snippet {
	protected
		//TODO: Change version
		$version = '1.0.0',
		
		//TODO: Set parameters defaults or remove the property
		$params = [
			//Defaults
			//TODO: Delete it if the parameter is not used
			'outputterParams' => [
				'tpl' => '',
				'placeholders' => [],
			],
		],
		
		//TODO: Set parameters types or remove the property
		$paramsTypes = [
			//TODO: Delete it if the parameter is not used
			'outputterParams' => 'objectStdClass',
		]
	;
	
	/**
	 * run
	 * @version 1.0 (2024-01-01)
	 * 
	 * @return {string|object|array}
	 */
	public function run(){
		$result = '';
		
		//TODO: Main snippet code must be placed here
		
		return $result;
	}
}