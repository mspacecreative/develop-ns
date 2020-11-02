<?php 
if ( have_rows('video_group', 'options') ) :
	while ( have_rows('video_group', 'options') ) : the_row();
		
		// HOME PAGE VIDEO
		if ( have_rows('home_page', 'options') ) :
			while ( have_rows('home_page', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// THRIVING COMMUNITIES
		if ( have_rows('thriving_communities', 'options') ) :
			while ( have_rows('thriving_communities', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// THRIVING COMMUNITIES - SECOND VIDEO
		if ( have_rows('thriving_communities_2', 'options') ) :
			while ( have_rows('thriving_communities_2', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// AUTHENTIC DESTINATIONS
		if ( have_rows('authentic_destinations', 'options') ) :
			while ( have_rows('authentic_destinations', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// WORKING WATERFRONTS
		if ( have_rows('working_waterfronts', 'options') ) :
			while ( have_rows('working_waterfronts', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
	endwhile;
endif; ?>

<div data-id="oceanPlayground" class="modal">
	<div class="innerContainer">
		<button class="closeModalButton">
			<span>&nbsp;</span>
			<span>&nbsp;</span>
		</button>
	<a class="button light externalLink" href="https://issuu.com/developnovascotia/docs/canada_s_ocean_playground_marine_guide_nova_scotia" target="_blank">Open in new tab
		</a>
	</div>
	<div class="modalInner">
		<div class="iframeContainer">
			<iframe src="https://e.issuu.com/embed.html?backgroundColor=%23f6c39b&d=canada_s_ocean_playground_marine_guide_nova_scotia_cc225162dee1c1&u=developnovascotia" frameborder="0" title="Canada&#8217;s Ocean Playground"></iframe>
		</div>
	</div>
</div>