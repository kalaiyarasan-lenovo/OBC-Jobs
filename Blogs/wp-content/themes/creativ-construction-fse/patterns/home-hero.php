<?php
/**
 * Title: Hero
 * Slug: creativ-construction-fse/home-hero
 * Categories: theme, banner
 *
 * @package creativ-construction-fse
 * @since 1.0.0
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-banner.jpg' ) ); ?>","dimRatio":60,"overlayColor":"pure-black","isUserOverlayColor":true,"minHeight":625,"sizeSlug":"large","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small);min-height:625px"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-banner.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-pure-black-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"left","level":6,"style":{"border":{"radius":"30px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontSize":"small","fontFamily":"body"} -->
<h6 class="wp-block-heading has-text-align-left has-base-color has-text-color has-body-font-family has-small-font-size" style="border-radius:30px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'Building The Better Future', 'creativ-construction-fse' ); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"xxx-large","fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-body-font-family has-xxx-large-font-size" style="font-style:normal;font-weight:700;line-height:1.4"><?php esc_html_e( 'Build Your Dream Project With Us Today!', 'creativ-construction-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-left has-base-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'We specialize in end-to-end construction solutions tailored for residential, commercial, and industrial projects.', 'creativ-construction-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:button {"textColor":"base","style":{"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"color":{"background":"#f84e1d"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"5px"}},"fontSize":"x-small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-text-color has-background has-link-color has-x-small-font-size has-custom-font-size wp-element-button" style="border-radius:5px;background-color:#f84e1d;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'More About Us', 'creativ-construction-fse' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base","className":"is-style-ct-button-secondary","style":{"border":{"width":"0px","style":"none","radius":"5px"},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"#f84e1d"}}},"color":{"text":"#f84e1d"}},"fontSize":"x-small"} -->
<div class="wp-block-button is-style-ct-button-secondary"><a class="wp-block-button__link has-base-background-color has-text-color has-background has-link-color has-x-small-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-radius:5px;color:#f84e1d;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Our Services', 'creativ-construction-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->