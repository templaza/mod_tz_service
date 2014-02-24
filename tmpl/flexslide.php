<?php
/**
 * Created by PhpStorm.
 * User: TuanMap
 * Date: 2/14/14
 * Time: 4:13 PM
 */

defined('_JEXEC') or die();
$document->addStyleSheet(JUri::root() . 'modules/mod_tz_services/css/flexslider.css');
$document->addScript(JUri::root() . 'modules/mod_tz_services/js/jquery.flexslider.js');
if ($list): ?>
    <div id="tz_service_flex<?php echo $module->id; ?>" class="TzServices<?php echo $moduleclass_sfx; ?>">
        <ul class="slides">
            <?php foreach ($list as $j => $item) : ?>
                <li>
                    <div class="media">
                        <?php if ($item->services_icon_font AND !empty($item->services_icon_font)): ?>
                            <span class="media-object <?php echo $item->services_icon_font; ?>"></span>
                        <?php else: ?>
                            <?php if ($item->services_image AND !empty($item->services_image)): ?>
                                <img src="<?php echo JUri::root() . $item->services_image; ?>"
                                     class="media-object"
                                     alt="<?php echo $item->services_title; ?>"/>
                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="media-body">
                            <h3 class="media-heading title"><?php echo $item->services_title; ?></h3>
                            <?php echo $item->services_description; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<script type="text/javascript">
    jQuery(window).load(function () {
        jQuery('#tz_service_flex<?php echo $module->id; ?>').flexslider({
            animation: "<?php echo $effect?>",
            animationLoop: <?php echo $animationLoop;?>,
            directionNav: <?php echo $directionNav;?>,
            pausePlay: <?php echo $pausePlay;?>,
            slideshowSpeed: <?php echo $slideSpeed; ?>,
            animationSpeed: <?php echo $animationSpeed?>,
            itemWidth: <?php echo $itemWidth?>,
            minItems: <?php echo $minItems?>,
            maxItems: <?php echo $maxItems?>,
            move: <?php echo $move?>,
            smoothHeight: true
        });
    });
</script>