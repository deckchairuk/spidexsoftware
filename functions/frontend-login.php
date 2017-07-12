<?php
function frontend_login_form() {
	$args = array(
		'echo'           => true,
		'remember'       => true,
		'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
		'form_id'        => 'loginform',
		'id_username'    => 'user_login',
		'id_password'    => 'user_pass',
		'id_remember'    => 'rememberme',
		'id_submit'      => 'wp-submit',
		'label_username' => __( 'Email' ),
		'label_password' => __( 'Password' ),
		'label_remember' => __( 'Remember Me' ),
		'label_log_in'   => __( 'Sign In' ),
		'value_username' => '',
		'value_remember' => false
	);

	return wp_login_form($args);
}

// Don't redirect to wp-admin on failed login
add_action( 'wp_login_failed', 'front_end_login_fail' );
function front_end_login_fail( $username ) {
	// Where the post submission came from
  	$referrer = preg_replace('/\?.*/', '', $_SERVER['HTTP_REFERER']);

   // if there's a valid referrer, and it's not the default log-in screen
   if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
      wp_redirect( $referrer . '?login=failed&username='.$username.'' );
      exit;
   }
}

function add_custom_query_var( $vars ){
  $vars[] = "login";
  $vars[] = "username";
  return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );