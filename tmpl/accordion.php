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

$document->addScript('modules/mod_tz_services/js/jquery-ui-1.10.3.custom.js');
$document->addScript('modules/mod_tz_services/js/jquery.accordion.js');
if ($list): ?>
    <div class="TzServices<?php echo $moduleclass_sfx; ?>">
        <?php foreach ($list as $j => $item) : ?>
            <div class="tz_accordion " id="section<?php echo $j; ?>">
                <h3 class="media-heading title">
                    <?php echo $item->services_title; ?>
                </h3>
            </div>
            <div class="info_accordion">
                <?php if ($item->services_icon_font AND !empty($item->services_icon_font)): ?>
                    <span class="media-object <?php echo $item->services_icon_font; ?>"></span>
                <?php else: ?>
                    <?php if ($item->services_image AND !empty($item->services_image)): ?>
                        <img src="<?php echo JUri::root() . $item->services_image; ?>"
                             class="media-object"
                             alt="<?php echo $item->services_title; ?>"/>
                    <?php endif; ?>
                <?php endif; ?>
                <?php echo $item->services_description; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<script type="text/javascript">

    jQuery(document).ready(function () {

        jQuery('.tz_accordion ').accordion({
            defaultOpen: 'section0'

        });

    });
</script>