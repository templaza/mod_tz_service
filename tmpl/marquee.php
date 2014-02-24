<?php
/**
 * Created by PhpStorm.
 * User: TuanMap
 * Date: 2/14/14
 * Time: 2:02 PM
 */

$document->addScript(JUri::root() . 'modules/mod_tz_services/js/jquery.simplyscroll.min.js');
defined('_JEXEC') or die;
?>

    <script type="text/javascript">

        (function (jQuery) {
            jQuery(function () {
                jQuery("#TzServiceMarquee<?php echo $module->id; ?>").simplyScroll({
                    orientation: '<?php echo $orientation; ?>',
                    customClass: '<?php echo $CustomClass; ?>',
                    frameRate: '<?php echo $frameRate; ?>',
                    direction: '<?php echo $direction; ?>'
                });
            });
        })(jQuery);
    </script>

<?php if ($list): ?>
    <ul class="TzServicesMarquee" id="TzServiceMarquee<?php echo $module->id; ?>">
        <?php foreach ($list as $j => $item) : ?>
            <li class="tz_service_marquee_item <?php if (isset($orientation) && $orientation == 'horizontal') {
                echo "tz-scroll-list";
            } ?> tz_item_default ">
                <div class="tz_service_title">
                    <h3 class="media-heading title">
                        <?php echo $item->services_title; ?>
                    </h3>
                </div>
                <div class="tz_service_info">
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
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>