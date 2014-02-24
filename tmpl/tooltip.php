<?php
/**
 * Created by PhpStorm.
 * User: TuanMap
 * Date: 2/14/14
 * Time: 2:45 PM
 */
defined('_JEXEC') or die;
$document->addStyleSheet('modules/mod_tz_news_pro/css/stickytooltip.css');
$document->addScript('modules/mod_tz_services/js/stickytooltip.js');?>

<div id="tz_tooltip">
    <?php if (isset($list) && !empty($list)) :
        foreach ($list as $i => $item) : ?>
            <h6 class="tz_tooltip_title">
                <a class="tz_tooltip_title_like" data-tooltip="sticky<?php echo $i ?>"
                   href="<?php echo $item->link; ?>">
                    <?php echo $item->services_title; ?>
                </a>
            </h6>
        <?php endforeach; ?>
    <?php endif; ?>
    <div style="clear: both"></div>
</div>
<div id="mystickytooltip" class="stickytooltip">
    <?php if ($list): ?>
        <div class="TzServices<?php echo $moduleclass_sfx; ?>">
            <?php foreach ($list as $i => $item) : ?>
                <div id="sticky<?php echo $i; ?>" class="atip tz_stichky">
                    <div class="tz_service_tooltip_title ">
                        <h3 class="media-heading title">
                            <?php echo $item->services_title; ?>
                        </h3>
                    </div>
                    <div class="tz_tooltip_info">
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
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (isset($tooltipStatus) && $tooltipStatus == 1) : ?>
            <div class="stickystatus"></div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<script type="text/javascript">
    stickytooltip.tooltipoffsets = [20, -30];
    stickytooltip.fadeinspeed = "<?php echo $fadeinspeed ; ?>";
    stickytooltip.rightclickstick = true;
    stickytooltip.stickybordercolors = ["<?php echo $border_s; ?>", "<?php echo $border_out; ?>"];
    stickytooltip.stickybackgroundcolors = ["<?php echo $background_s; ?>", "<?php echo $background_out; ?>"];
    stickytooltip.stickynotice1 = ["<?php echo JText::_('MOD_TZ_SERVICE_PRESS_S_CLICK'); ?>"];
    stickytooltip.stickynotice2 = "<?php echo JText::_('MOD_TZ_SERVICE_PRESS_OUT_CLICK'); ?>";
    stickytooltip.init("*[data-tooltip]", "mystickytooltip");
</script>