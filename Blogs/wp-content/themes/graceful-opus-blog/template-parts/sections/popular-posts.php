<?php
/**
 * Template part for Post Ticker
 *
 * @package Graceful Opus Blog
 */
if (graceful_options('basic_slider_width') === 'wrapped') {
    $graceful_slider_width = 'wrapped-content';
} else {
    $graceful_slider_width = '';
}
?>

<div class="graceful-popular <?php echo esc_attr( $graceful_slider_width ); ?>">
	<div class="trending-container">
		<style type="text/css">
			.blinking-dot {
			    background-color: <?php echo esc_attr( graceful_opus_blog_options( 'popular_post_dot_color' ) ) ?> !important;
			}
		</style>
		<div class="blinking-dot"></div>
		<h4><?php echo esc_html( graceful_opus_blog_options( 'popular_post_heading_text' ) ); ?></h4>
	</div>

	<div id="graceful-popular-posts-ticker" class="graceful-popular-posts-ticker owl-carousel owl-theme">

	    <?php
	    // WP_Query to retrieve popular posts based on comment count.
	    $popular_posts = new WP_Query( array(
	        'posts_per_page' => 5,
	        'orderby'        => 'comment_count', // Order by number of comments
        	'order'          => 'DESC',
	        'post_status'    => 'publish',
	    ) );

	    if ( $popular_posts->have_posts() ) :
	        while ( $popular_posts->have_posts() ) : $popular_posts->the_post(); ?>
	            <div class="item">
	                <a href="<?php the_permalink(); ?>" class="post-item">
	                    <div class="post-thumbnail">
						    <?php if ( has_post_thumbnail() ) : ?>
						        <?php the_post_thumbnail( 'thumbnail' ); ?>
						    <?php else : ?>
						        <div class="no-thumbnail"></div>
						    <?php endif; ?>
						</div>
	                    <div class="post-details">
	                    	<div class="post-date"><?php echo esc_html( get_the_date() ); ?></div>
	                        <h3 class="post-title"><?php the_title(); ?></h3>
	                    </div>
	                </a>
	            </div>
	        <?php endwhile;
	        wp_reset_postdata();
	    endif;
	    ?>

	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($) {
	    $('.graceful-popular-posts-ticker').owlCarousel({
	        items: 3,
	        loop: true,
	        margin: 24,
	        autoplay: true,
	        autoplayTimeout: 3000,
	        autoplayHoverPause: true,
	        nav: true,
        	dots: false,
	        responsive: {
	            0: {
	                items: 1
	            },
	            600: {
	                items: 2
	            },
	            1000: {
	                items: 3
	            }
	        }
	    });
	});
</script>
