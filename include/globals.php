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

$ps_hooks			=		get_option('ps_options_hooks');
$ps_on_admin		=		get_option('ps_options_on_admin');
$ps_on_site			=		get_option('ps_options_on_site');
$ps_default_hook	=		get_option('ps_options_default_hook');
$ps_default_priority=		get_option('ps_options_default_priority');
$ps_var_dump		=		get_option('ps_options_var_dump');
$ps_var_dump_global	=		get_option('ps_options_var_dump_global');
$ps_functions		=		array();
$ps_action_prefix	=		'rtp_';

//if($ps_hooks){
//	$hooks=explode(';',$ps_hooks);
//	if(is_array($hooks)){
//		$ps_hooks_array=array();
//		foreach($hooks as $hook){
//			$hook=explode(',',$hook);
//			$ps_hooks[]=array('hook'=>$hook[0],'priority'=>$hook[1]);
//		}
//	}
//}

?>