<div class="menuContainer">
	<div class="innerContainer">
		
		<!-- TITLE AND CONTACT INFO -->
		<div class="row between-lg between-md horizontalStitchBottom bottom-padding">
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h1>Develop Nova Scotia<br /> Annual Report<br /> 2019/2020</h1>
			</div>
			<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="margin-bottom: 5px;">Share the Report</h3>
				<?php if ( have_rows('channels', 'options') ) {
					echo '<div class="socialMedia inline">
							<ul>';
					while ( have_rows('channels', 'options') ) {
						the_row();
						$link = get_sub_field('link', 'options');
						$icon = get_sub_field('icon', 'options');
						
						echo '<li><a href="' . $link . '" target="_blank"><i class="fa ' . $icon . '"></i></a></li>';
					}
					echo 	'</ul>
						 </div>';
				}
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
				<!--<div class="col col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<a href="<?php echo home_url(); ?>"><h2>Home</h2></a>
					<a href="<?php echo esc_url( get_permalink( get_page(170) ) ); ?>"><h2><?php esc_html_e( 'Message from the Board Chair and CEO'); ?></h2></a>
					
					THRIVING COMMUNITIES
					<a href="<?php echo esc_url( get_permalink( get_page(172) ) ); ?>">
						<h2><?php esc_html_e('Thriving Communities'); ?></h2>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page(172) ) ); ?>#connecting-to-more-opportunity">
						<h3>Connecting to more opportunity.<br />
						Internet for Nova Scotia Initiative.</h3>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page(172) ) ); ?>#confidence-comes-with-experience">
						<h3>Confidence comes with experience.<br />
						Inverness Growth Strategy.</h3>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page(172) ) ); ?>#working-with-diverse-community">
						<h3>Working with and reflecting our diverse community.</h3>
					</a>
					 / THRIVING COMMUNITIES 
					
					 AUTHENTIC DESTINATIONS 
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Authentic Destinations' ) ) ); ?>">
						<h2 style="margin-top: 50px;"><?php esc_html_e('Authentic Destinations'); ?></h2>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Authentic Destinations' ) ) ); ?>#shaping-the-future-of-peggys-cove">
						<h3>Shaping the future of Peggy's Cove — together</h3>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Authentic Destinations' ) ) ); ?>#georges-island">
						<h3>Georges Island</h3>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Authentic Destinations' ) ) ); ?>#queens-marque">
						<h3>Queen&#8217;s Marque</h3>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Authentic Destinations' ) ) ); ?>#progress-at-a-glance">
						<h3>Progress at a glance</h3>
					</a>
					 / AUTHENTIC DESTINATIONS 
					
				</div>
				<div class="col col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Working Waterfronts' ) ) ); ?>"><h2><?php esc_html_e('Working Waterfronts'); ?></h2></a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Working Waterfronts' ) ) ); ?>#waterfronts-make-ns-work"><h3><?php esc_html_e( 'Working waterfronts make Nova Scotia Work'); ?></h3></a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Working Waterfronts' ) ) ); ?>#the-benefits-of-collaboration"><h3><?php esc_html_e( 'The benefits of collaboration run deep. The Centre for Ocean Ventures &amp; Entrepreneurship (COVE)'); ?></h3></a>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Working Waterfronts' ) ) ); ?>#marine-visitation-and-working-strategy"><h3><?php esc_html_e( 'Marine visitation and working waterfront strategy'); ?></h3></a>
					</a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Working Waterfronts' ) ) ); ?>#georges-island-announcement"><h3><?php esc_html_e( 'Georges Island Announcement'); ?></h3></a>
					</a>
					
					 DETAILED FINANCIALS 
					<div class="downloadFinancials" style="margin-top: 50px;">
						<a style="display: inline-block;" href="<?php the_field('financials', 'options'); ?>" target="_blank"><h2 style="margin: 0;"><?php esc_html_e('Detailed Financials'); ?></h2></a>
					</div>
				</div>
				<p>
				-->
					
				</p>
			</div>
		</div>
		<!-- / CONTENTS -->
		
	</div>
</div>