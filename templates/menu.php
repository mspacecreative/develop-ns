<div class="menuContainer">
	<div class="innerContainer">
		
		<!-- TITLE AND CONTACT INFO -->
		<div class="row between-lg between-md horizontalStitchBottom bottom-padding">
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h1>Develop Nova Scotia<br /> Annual Report<br /> 2019/2020</h1>
			</div>
			<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="margin-bottom: 5px;">Share the Report</h3>
				
				<?php echo do_shortcode('[addthis tool="addthis_inline_share_toolbox_s03r"]');
				
				$address = get_field('address', 'options');
				if ( $address ) {
					echo '<p>' . $address . '</p>';
				} ?>
			</div>
			<p>
				
			</p>
		</div>
		<!-- / TITLE AND CONTACT INFO -->
		
		<!-- CONTENTS -->
		<div class="menuContents topBottomPadding">
			<h3>CONTENTS</h3>
			<div class="row between-lg between-md">
				<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php dns_overlay_nav(); ?>
					</nav>
					<!-- /nav -->
				</div>
			</div>
		</div>
		<!-- / CONTENTS -->
		
	</div>
</div>