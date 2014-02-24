<?php
/**
 * Created by PhpStorm.
 * User: TuanMap
 * Date: 2/13/14
 * Time: 2:17 PM
 */
$doc = JFactory::getDocument();
$doc->addStyleSheet(JUri::root() . 'modules/mod_tz_services/css/style.css');
$doc->addStyleSheet(JUri::root() . 'modules/mod_tz_services/css/owl.carousel.css');
$doc->addStyleSheet(JUri::root() . 'modules/mod_tz_services/css/owl.theme.css');

$doc->addScript(JUri::root() . 'modules/mod_tz_services/js/owl.carousel.js');

defined('_JEXEC') or die();

$options = new stdClass();

//Default Option
$options->autoPlay = 'false';
$options->stopOnHover = 'false';
$options->singleItem = 'false';
$options->rewindNav = 'false';
$options->pagination = 'false';
$options->paginationNumbers = 'false';
$options->itemsScaleUp = 'false';

$options->items = 0;
$options->slideSpeed = 0;
$options->paginationSpeed = 0;
$options->rewindSpeed = 0;


if ($params->get('autoPlay', 1)):
    $options->autoPlay = 'true';
endif;

if ($params->get('stopOnHover', 1)):
    $options->stopOnHover = 'true';
endif;

if ($params->get('singleItem', 1)):
    $options->singleItem = 'true';
endif;

if ($params->get('rewindNav', 1)):
    $options->rewindNav = 'true';
endif;

if ($params->get('pagination', 1)):
    $options->pagination = 'true';
endif;

if ($params->get('paginationNumbers', 1)):
    $options->paginationNumbers = 'true';
endif;

if ($params->get('itemsScaleUp', 1)):
    $options->itemsScaleUp = 'true';
endif;

if ($params->get('items', 5)):
    $options->items = $params->get('items', 5);
endif;

if ($params->get('slideSpeed', 200)):
    $options->slideSpeed = $params->get('slideSpeed', 200);
endif;

if ($params->get('paginationSpeed', 800)):
    $options->paginationSpeed = $params->get('paginationSpeed', 800);
endif;

if ($params->get('rewindSpeed', 1000)):
    $options->rewindSpeed = $params->get('rewindSpeed', 1000);
endif;

if ($list): ?>
    <div class="TzServices">
        <?php if ($params->get('navigation') == 1): ?>
            <div class="navigation">
                <a id="showbiz_left_<?php echo $module->id;?>" class="sb-navigation-left tz_service_left"></a>
                <a id="showbiz_right_<?php echo $module->id;?>" class="sb-navigation-right tz_service_right"></a>
            </div>
        <?php endif; ?>
        <div id="TzServices<?php echo $module->id; ?>"
             class="TzServices<?php echo $moduleclass_sfx; ?> owl-carousel owl-theme">
            <?php foreach ($list as $j => $item) : ?>
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
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<script type="text/javascript">
    jQuery(document).ready(function () {
        var owl = jQuery("#TzServices<?php echo $module -> id;?>");
        owl.owlCarousel({
            items: <?php echo $options->items;?>,
            itemsDesktop: [1199, <?php echo ( round($options->items /1.224));?>],
            itemsDesktopSmall: [979, <?php echo ( round($options->items /1.563));?>],
            itemsTablet: [768, <?php echo ( round($options->items /2.503));?>],
            itemsMobile: [479, 1],
            slideSpeed:<?php echo $options -> slideSpeed;?>,
            paginationSpeed:<?php echo $options -> paginationSpeed; ?>,
            rewindSpeed:<?php echo  $options -> rewindSpeed;?>,
            autoPlay:<?php echo   $options -> autoPlay; ?>,
            stopOnHover: <?php echo  $options-> stopOnHover;?>,
            singleItem:<?php echo   $options -> singleItem;?>,
            rewindNav:<?php echo $options->rewindNav;?>,
            pagination:<?php echo   $options -> pagination;?>,
            paginationNumbers:<?php echo $options -> paginationNumbers; ?>,
            itemsScaleUp:<?php echo  $options -> itemsScaleUp;?>

        });

        // Custom Navigation Events
        jQuery("#showbiz_right_<?php echo $module->id;?>").click(function () {
            owl.trigger('owl.next');
        })
        jQuery("#showbiz_left_<?php echo $module->id;?>").click(function () {
            owl.trigger('owl.prev');
        })
    });
</script>
