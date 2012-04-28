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

//This is the array containing all the options with their default values
$options=array(
		'ps_options_hooks'				=>		'',
		'ps_options_on_admin'			=>		'false',
		'ps_options_on_site'			=>		'false',
		'ps_options_default_hook'		=>		'plugins_loaded',
		'ps_options_default_priority'	=>		'1',
		'ps_options_var_dump'			=>		'true',
		'ps_options_var_dump_global'	=>		'false',
		'ps_options_installed'			=>		'true'
);

//This function runs on the activation of this plugin
function ps_activate(){
	global $options;
	if(!get_option('ps_options_installed')){
		foreach($options as $option_name=>$option_value){
			add_option($option_name, $option_value);
		}
	}
			
}

//This function runs on the deactivation of this plugin
function ps_deactivate(){
	
}

//This function runs on the uninstallation of this plugin
function ps_uninstall(){
	global $options;
	foreach($options as $option_name=>$option_value){
		delete_option($option_name);
	}
}

?>