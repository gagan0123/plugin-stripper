<?php

/*
 * Plugin Name: Plugin Stripper
 * Plugin URI: http://www.rtCamp.com
 * Description: This plugin strips all the hooks of a plugin and all the parameters that are passed to those hooks
 * Version: 0.0.0
 * Requires at least: WP 3.3.1
 * Tested up to: Wordpress 3.3.1
 * Author: Gagan Deep Singh
 * Author URI: http://www.IaMmE.in
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

//Include all global variables
require_once 'include/globals.php';

//Include all general purpose functions
require_once 'include/functions.php';

//Only load stripper functionality if its not an admin page
if(!is_admin())
	require_once 'include/stripper.php';

//Only load admin functions and options when its a dashboard page
if(is_admin())
	require_once 'include/admin.php';

//Plugin Activation function register
register_activation_hook( 'include/setup.php', 'ps_activate' );

//Plugin Deactivatoin function register
register_deactivation_hook('include/setup.php', 'ps_deactivate');

//Plugin unistallation function register
register_uninstall_hook('include/setup.php', 'ps_uninstall');

?>