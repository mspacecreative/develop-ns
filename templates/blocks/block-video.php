<?php 
$featuredimg = get_field('featured_image');
$featvideo = get_field('featured_video');
$featuredimgsize = 'anamorphic';

if ($featuredimg): ?>
<section class="video-section">
	<div class="home-featured-img photoZoom videoOverlay">
				
		<?php 
		if ($featvideo):
		setup_postdata($featvideo);
		$title = get_the_title($featvideo->ID); ?>
		<a href="<?php echo the_permalink($featvideo->ID); ?>" data-id="<?php echo $featvideo->ID ?>" class="open-modal" title="<?php echo $title ?>">
			<?php echo wp_get_attachment_image( $featuredimg, $featuredimgsize ); ?>
		</a>
		<?php endif; ?>
				
	</div>
</section>
<?php endif; ?>