<?php
/**
 * ddStartSnippet
 * @version 1.0 (2024-01-01)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.ru/modx/ddstartsnippet
 * 
 * @copyright 2024 Ronef {@link https://Ronef.me }
 */

//Include (MODX)EvolutionCMS.libraries.ddTools
require_once(
	$modx->getConfig('base_path')
	. 'assets/libs/ddTools/modx.ddtools.class.php'
);

return \DDTools\Snippet::runSnippet([
	//TODO: Change name
	'name' => 'ddStartSnippet',
	'params' => $params,
]);
?>