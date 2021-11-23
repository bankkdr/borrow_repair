<?php
/* config.php */
return array(
    'version' => '4.0.4',
    'web_title' => 'E-Borrow & Repair System',
    'web_description' => 'ระบบ ยืม-คืน พัสดุ ออนไลน์',
    'timezone' => 'Asia/Bangkok',
    'member_status' => array(
        0 => 'สมาชิก',
        1 => 'ผู้ดูแลระบบ',
    ),
    'color_status' => array(
        0 => '#259B24',
        1 => '#FF0000',
        2 => '#0E0EDA',
        3 => '#827717',
    ),
    'default_icon' => 'icon-tools',
    'inventory_w' => 600,
    'borrow_no' => 'B%Y%M%D-%04d',
    'repair_first_status' => 1,
    'repair_job_no' => 'job%04d',
);
