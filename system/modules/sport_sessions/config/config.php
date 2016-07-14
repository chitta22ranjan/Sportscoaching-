<?php
 
/**
 * Custom module to manage sports sessions
 * @author : Richard Rabillon - richard.rabillon@live.fr - 2016 
*/

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 0, array
(
    'sport_sessions_collection' => array
    (
        'tables' => array('tl_sport_sessions'),
        'icon'   => 'system/modules/sport_sessions/assets/icon.png'
    ),
    'reservations_collection' => array
    (
        'tables' => array('tl_sport_reservations'),
        'icon'   => 'system/modules/sport_sessions/assets/reserved.png'
    )
));
 
 
/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'sports_sessions' => array
	(
		'SportSessionsList'    => 'ModuleSportSessionsList'
	),
));

