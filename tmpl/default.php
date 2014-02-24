<?php
/*------------------------------------------------------------------------

# TZ Portfolio Extension

# ------------------------------------------------------------------------

# author    DuongTVTemPlaza

# copyright Copyright (C) 2012 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/

//no direct access
defined('_JEXEC') or die();
if($list):
//$doc    = JFactory::getDocument();
//$doc -> addStyleSheet(JUri::root().'modules/mod_tz_services/css/style.css');
$columnCount = 12/$params -> get('column_width',4);
?>
<div class="TzServices<?php echo $moduleclass_sfx;?>">
    <div class="row-fluid">
        <?php for($i = 0; $i < $columnCount; $i++):?>
        <div class="span<?php echo $params -> get('column_width',4);?>">
            <?php foreach ($list as $j => $item) :	?>
                <?php if(($j % $columnCount) == $i):?>
                <div class="media">
                    <?php if($item -> services_icon_font AND !empty($item -> services_icon_font)):?>
                        <span class="media-object <?php echo $item -> services_icon_font; ?>"></span>
                    <?php else: ?>
                        <?php if($item -> services_image AND !empty($item -> services_image)):?>
                        <img src="<?php echo JUri::root().$item -> services_image;?>"
                             class="media-object"
                             alt="<?php echo $item -> services_title;?>"/>
                        <?php endif;?>
                    <?php endif;?>
                    <div class="media-body">
                        <h3 class="media-heading title"><?php echo $item -> services_title;?></h3>
                        <?php echo $item -> services_description;?>
                    </div>
                </div>
                <?php endif;?>
            <?php endforeach; ?>
        </div>
        <?php endfor;?>
    </div>
</div>
<?php endif;?>