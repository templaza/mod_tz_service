<?php
/**
 * Created by PhpStorm.
 * User: TuanMap
 * Date: 2/14/14
 * Time: 10:19 AM
 */
defined('_JEXEC') or die;
if ($list):?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('ul.tabs').each(function () {
                var $active, $content, $links = jQuery(this).find('a');
                $active = jQuery($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
                $active.addClass('active');
                $content = jQuery($active.attr('href'));
                $links.not($active).each(function () {
                    jQuery(jQuery(this).attr('href')).hide();
                });
                jQuery(this).on('click', 'a', function (e) {
                    $active.removeClass('active');
                    $content.slideUp(450, function () {
                        $content.hide();
                    });
                    $active = jQuery(this);
                    $content = jQuery(jQuery(this).attr('href'));
                    $active.addClass('active');
                    $content.slideDown(450, function () {
                        $content.show();
                    });
                    e.preventDefault();
                });
            });
        })
    </script>
    <div class="Tz_Service">
        <ul class="tabs">
            <?php for ($i = 0; $i < count($list); $i++): ?>
                <li><a href="#tz_service_tab<?php echo $i; ?><?php echo $module->id; ?>">
                        <span><?php echo $list[$i]->services_title; ?></span>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
        <?php for ($i = 0; $i < count($list); $i++): ?>
            <div class="tz_tabs_introtext" id="tz_service_tab<?php echo $i; ?><?php echo $module->id; ?>">
                <?php if ($list[$i]->services_icon_font AND !empty($list[$i]->services_icon_font)): ?>
                    <span class="media-object <?php echo $list[$i]->services_icon_font; ?>"></span>
                <?php else: ?>
                    <?php if ($list[$i]->services_image AND !empty($list[$i]->services_image)): ?>
                        <img src="<?php echo JUri::root() . $list[$i]->services_image; ?>"
                             class="media-object"
                             alt="<?php echo $list[$i]->services_title; ?>"/>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="media-body">
                    <h3 class="media-heading title"><?php echo $list[$i]->services_title; ?></h3>
                    <?php echo $list[$i]->services_description; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
<?php endif; ?>

