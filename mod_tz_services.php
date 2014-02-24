<?php
/*------------------------------------------------------------------------

# TZ Extension

# ------------------------------------------------------------------------

# author    DuongTVTemPlaza

# copyright Copyright (C) 2012 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/

defined('_JEXEC') or die();

require_once dirname(__FILE__) . '/helper.php';
$document = JFactory::getDocument();
$document->addStyleSheet('modules/mod_tz_services/css/mod_tz_news.css');
if ($params->get('enable_jquery') == 1) {
    $document->addScript('modules/mod_tz_services/js/jquery-1.9.1.min.js');
}
//params marquee----------------------
$orientation = $params->get('tz_orientation');
$CustomClass = $params->get('tz_customclass');
$frameRate = $params->get('tz_frameRate');
$direction = $params->get('tz_direction');
//-------------------------------------
//params tooltip----------------------
$fadeinspeed = $params->get('tz_fadeinspeed');
$border_s = $params->get('tz_border_s');
$border_out = $params->get('tz_border_out');
$background_s = $params->get('tz_background_s');
$background_out = $params->get('tz_background_out');
$tooltipStatus = $params->get('tz_tooltip_status');
//--------------------------------------
//params flexslide------------------------
$auto = 'false';
$pausePlay = 'false';
$animationLoop = 'false';
$effect = $params->get('tz_effect', 'slide');
$directionNav = 'false';
$animationSpeed = $params->get('tz_animationSpeed', 600);
$slideSpeed = $params->get('tz_slideSpeed', 3000);
$itemWidth = $params->get('tz_itemWidth', 5);
$minItems = $params->get('tz_slideMinItem', 1);
$maxItems = $params->get('tz_slideMaxItem', 5);
$move = $params->get('tz_slideMoveItem', 5);
if ($params->get('tz_auto', 1)): $auto = 'true';endif;
if ($params->get('tz_pausePlay', 1)):$pausePlay = 'true';endif;
if ($params->get('tz_animationLoop', 1)):$animationLoop = 'true';endif;
if ($params->get('tz_directionNav', 1)):$directionNav = 'true';endif;
if ($params->get('tz_effect', 'slide')):$effect = $params->get('tz_effect', 'slide');endif;
if ($params->get('tz_animationSpeed')):$animationSpeed = $params->get('tz_animationSpeed', 600);endif;
if ($params->get('tz_slideSpeed')):$slideSpeed = $params->get('tz_slideSpeed', 3000);endif;
if ($params->get('tz_slideItemWidth')):$itemWidth = $params->get('tz_itemWidth', 5);endif;
if ($params->get('tz_slideMinItem')):$minItems = $params->get('tz_slideMinItem', 1);endif;
if ($params->get('tz_slideMaxItem')):$maxItems = $params->get('tz_slideMaxItem', 5);endif;
if ($params->get('tz_slideMoveItem')):$move = $params->get('tz_slideMoveItem', 5);endif;
//----------------------------------------
$list = modTZServicesHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_tz_services', $params->get('layout', 'default'));
