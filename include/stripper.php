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

//foreach($hooks as $hook){
//	global $ps_functions;
//	$ps_functions[$hook]=  create_function('','echo "Hook: '.$hook.'<br/>"; var_dump(func_get_args());');
//	add_action($hook, $ps_functions[$hook],10);
//}

function ps_stripper(){
	global $ps_functions,$ps_action_prefix,$ps_hooks,$ps_var_dump,$ps_on_site;
	$hooks=explode(';',$ps_hooks);
	if($ps_on_site=='true'&&$hooks){
		foreach($hooks as $hook){
			$hook=explode(',',$hook);
//			$fn='echo "Hook: '.$hook[0].'<br/>";';
//			if($ps_var_dump=='true'){
//				$fn.='var_dump'
//			}
			$ps_functions[$hook[0]]=  create_function('','echo "Hook: '.$hook[0].'<br/>";'.($ps_var_dump=='true'?'var_dump(func_get_args());':''));//
			//$ps_functions[$hook[0]]();
			add_action($hook[0], $ps_functions[$hook[0]],  intval($hook[1]));
		}
	}
	return true;
}
if($ps_on_site=='true')
	add_action($ps_default_hook,'ps_stripper',$ps_default_priority);

function ps_dump_hooks(){
	global $wp_filter;
	echo '<pre>';
	var_dump($wp_filter);
	echo '</pre>';
}
if($ps_var_dump_global)
	add_action('shutdown','ps_dump_hooks');

?>