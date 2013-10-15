<?php

/*
@package TaskFreak
@since 0.1
@version 1.0

*/

if (!defined('WP_ININSTALL_PLUGIN')) {
 exit;
}

// remove options
delete_option('tfk_options');


// delete database
