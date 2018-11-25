<?php
/**
 * ddStartSnippet
 * @version 1.0 (2018-11-25)
 * 
 * @desc Здесь должно быть описание сниппета, в идеале — на английском. Всё, что ниже — лишь примеры, надо заполнить реальной информацией.
 * 
 * @uses PHP >= 5.4.
 * @uses (MODX)EvolutionCMS >= 1.1.
 * @uses (MODX)EvolutionCMS.libraries.ddTools >= 0.18.
 * 
 * @param $someParameter {string} — Описание конкретного параметра, в идеале — на английском. @required
 * 
 * @link http://code.divandesign.biz/modx/ddstartsnippet
 * 
 * @copyright 2018 DivanDesign {@link http://www.DivanDesign.biz }
 */

//TODO: Если ddTools не используется — удалить этот код
//Include (MODX)EvolutionCMS.libraries.ddTools
require_once $modx->getConfig('base_path').'assets/libs/ddTools/modx.ddtools.class.php';

//The snippet must return an empty string even if result is absent
$result = '';

//TODO: Здесь пишем непосредственно код сниппета.

return $result;
?>