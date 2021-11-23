<?php
/* settings/database.php */

return array(
    'mysql' => array(
        'dbdriver' => 'mysql',
        'username' => 'root',
        'password' => '',
        'dbname' => 'borrow_repair',
        'prefix' => 'brw_rp',
    ),
    'tables' => array(
        'user' => 'user',
        'category' => 'category',
        'language' => 'language',
        'number' => 'number',
        'borrow' => 'borrow',
        'repair' => 'repair',
        'repair_status' => 'repair_status',
        'borrow_items' => 'borrow_items',
        'inventory' => 'inventory',
        'inventory_meta' => 'inventory_meta',
        'inventory_items' => 'inventory_items',
    ),
);
