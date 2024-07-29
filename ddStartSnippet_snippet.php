<?php
/**
 * ddStartSnippet
 * @version 1.0 (2024-01-01)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.biz/modx/ddstartsnippet
 * 
 * @copyright 2024 DD Group {@link https://DivanDesign.biz }
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