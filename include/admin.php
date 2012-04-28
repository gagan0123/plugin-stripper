<?php

/*
 * 	          _    _____                       
 * 	         | |  / ____|                      
 *       _ __| |_| |      __ _ _ __ ___  _ __  
 * 	    | '__| __| |     / _` | '_ ` _ \| '_ \ 
 * 	    | |  | |_| |____| (_| | | | | | | |_) |
 * 	    |_|   \__|\_____|\__,_|_| |_| |_| .__/ 
 *                                      | |    
 *                                      |_|    
 * Programmer:
 * 
 * 	    .|'''''|                                 
 * 	    || .                                     
 * 	    || |''||  '''|.  .|''|,  '''|.  `||''|,  
 * 	    ||    || .|''||  ||  || .|''||   ||  ||  
 * 	    `|....|' `|..||. `|..|| `|..||. .||  ||. 
 *                           ||                  
 *                        `..|'                  
 *
 */
add_action( 'admin_menu', 'ps_admin_menu' );

function ps_admin_menu() {
	add_options_page( 'Plugin Stripper Settings', 'Plugin Stripper', 'manage_options', 'plugin-stripper', 'ps_admin_options' );
}

function ps_admin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	$options=array(
			'ps_options_hooks'=>'Hooks',
			'ps_options_on_admin'=>'On Admin',
			'ps_options_on_site'=>'On Site',
			'ps_options_default_hook'=>'Default Hook for Plugin',
			'ps_options_default_priority'=>'Default Priority',
			'ps_options_var_dump'=>'Variable dump for each hook',
			'ps_options_var_dump_global' => 'Global Variable dump'
	);

	if ( isset( $_POST['submit'] )&&check_admin_referer('ps-admin-options','ps-nonce') ){// && check_admin_referer('imc-settings') ) {
		foreach($options as $fieldname=>$fieldlabel){
			if(!update_site_option( $fieldname, $_POST[$fieldname]))
				add_site_option( $fieldname, $_POST[$fieldname]);
		}
		$updated = true;
	}
	?>
	<form name="ps-options" method="post" action=""> 
		<?php wp_nonce_field('ps-admin-options','ps-nonce') ?>
		<?php
		foreach($options as $option=>$title):
		?>
		<label for="<?php echo $option ?>"><?php echo $title; ?></label>
		<input type="text" name="<?php echo $option ?>" value="<?php echo get_option($option); ?>" /><br/>
		<?php
		endforeach;
		?>
		<input type="submit" value="Save Settings" name="submit" />
	</form>
	<?php
}
?>