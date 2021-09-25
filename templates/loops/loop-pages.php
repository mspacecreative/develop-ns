<?php
$args = array(
	'post__in' => array( 172, 174, 176 ),
	'post_type' => 'page',
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>

<div class="homePagePagesFeedContainer">

<?php while ( $loop->have_posts() ) : $loop->the_post();

$pagetitle = get_the_title($loop->ID);
//$featuredimg = get_the_post_thumbnail($post->ID, 'large' );
$featuredimg = get_field('home_page_featured_image', $loop->ID);
$featuredimgsize = 'anamorphic';
$themecolour = get_field('theme_colour', $loop->ID);
$excerpt = get_the_excerpt($loop->ID);
$icon = get_field('icon', $loop->ID);
$mainheading = get_field('main_heading', $loop->ID);
$subheading = get_field('sub_heading', $loop->ID);
$featvideo = get_field('featured_video', $loop->ID);
$size = 'icon';

switch ($themecolour) {
	case 'blue':
		$themecolour = ' blue_bg';
		break;
	case 'orange':
		$themecolour = ' orange_bg';
		break;
	case 'navy':
		$themecolour = ' navy_bg';
		break;
	default:
		$themecolour = ' orange_bg';
} ?>

	<div class="row half_half_section homePagePagesFeed verticalStitch">
		
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 who_we_are checker-board-content">
			<div class="col-inner">
			<?php 
			if ( $pagetitle ) {
			echo 
			'<h2>' . $pagetitle . '</h2>';
			}
			if ( $mainheading ) {
			echo 
			'<h3><strong>' . $mainheading . '</strong></h3>';
			}
			if (have_rows('article_links')) {
			echo
			'<ul class="article-links">';
			while (have_rows('article_links')) {
				the_row();
				$label = get_sub_field('article_title');
				$link = get_sub_field('article_link');
				echo 
				'<li><a href="' . $link . '">' . $label . '</a></li>';
			}
			echo
			'</ul>';
			}
			if ( $excerpt ) {
				echo 
				'<p>' . $excerpt . '</p>';
			} ?>
			
			<a class="button<?php if ($themecolour): echo $themecolour; endif; ?>" href="<?php get_the_permalink(); ?>"><?php echo __('READ ALL THE STORIES'); ?></a>
			</div>
		</div>
		
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 no-right-padding checker-board-img<?php if ($themecolour): echo $themecolour; endif; ?>">
			
			<div class="col-inner">
			<?php
			if ( $icon ) {
				echo 
				'<div class="imgContainer">' .  wp_get_attachment_image( $icon, $size ) . '</div>';
			} ?>
			</div>
			
		</div>
		
		<?php if ($featuredimg): ?>
		<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 home-featured-img photoZoom videoOverlay">
			
			<?php 
			if ($featvideo):
			setup_postdata($featvideo);
			$title = get_the_title($featvideo->ID); ?>
			<a href="<?php echo the_permalink($featvideo->ID); ?>" data-id="<?php echo $featvideo->ID ?>" class="open-modal" title="<?php echo $title ?>">
				<?php echo wp_get_attachment_image( $featuredimg, $featuredimgsize ); ?>
			</a>
			<?php endif; ?>
			
		</div>
		<?php endif; ?>
		
	</div>

<?php 
endwhile; ?>

</div>

<?php endif; wp_reset_query(); ?>