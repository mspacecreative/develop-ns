<?php 
if ( have_rows('flexible_content') ): 
while ( have_rows('flexible_content') ): the_row();
				
	if ( get_row_layout() == 'image_list' ):
	$flexgallery = get_sub_field('flex_gallery');
	$animate = get_sub_field('animate');
					
		if ( $flexgallery ): ?>
		<ul class="flex-gallery">
							
			<?php foreach ( $flexgallery as $fleximage ): ?>
			<li<?php if ($animate): echo ' data-aos="fade-right"'; endif; ?>>
				<img src="<?php echo $fleximage['sizes']['large']; ?>" alt="<?php echo $fleximage['alt']; ?>" />
			</li>
			<?php endforeach; ?>
							
		</ul>
		<?php endif;
						
	elseif ( get_row_layout() == 'flex_text' ):
	$flextext = get_sub_field('text_editor');
						
		if ( $flextext ):
			include 'module-margins.php';
			echo $flextext;
			if ( have_rows('module_margins') ): while ( have_rows('module_margins') ): the_row();
			echo
			'</div>';
			endwhile; endif;
		endif;
						
	elseif ( get_row_layout() == 'spacer' ):
	$spacerheight = get_sub_field('spacer_height');
	switch ($spacerheight) {
		case 'default':
			$spacerheight = '';
			break;
		case 'tall':
		$spacerheight = ' flex-spacer-tall';
		break;
	default:
		$spacerheight = '';
	} ?>
						
		<div class="flex-spacer<?php if ($spacerheight): echo $spacerheight; endif; ?>">&nbsp;</div>
						
	<?php elseif ( get_row_layout() == 'post_content' ):
	$video = get_sub_field('video');
	//$issuu = get_sub_field('issuu');
					
		if ($video):
			setup_postdata($video);
			// VARIABLES
			$thumb = get_the_post_thumbnail_url( $video->ID, 'large');
			$title = get_the_title($video->ID); ?>
						 	
			<div class="photoZoom videoOverlay">
				<a data-id="<?php echo $video->ID ?>" class="open-modal" title="<?php echo $title ?>" href="<?php echo the_permalink($video->ID); ?>">
					<img src="<?php echo $thumb ?>">
				</a>
			</div>
		<?php 
		endif;
					
	endif;
				
endwhile;
endif;