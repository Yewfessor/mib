<?php
require_once '../vendor/autoload.php';

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\MySQL;

$config = [
    'host'     => 'localhost',
    'port'     => '3306',
    'username' => 'root',
    'password' => '',
    'database' => 'ph17385860351_mib'
];

$dt = new Datatables(new MySQL($config));

$dt->query("Select product_id, product_name_en, product_type_name, product_line_up_name, product_price
            from tb_product p 
            join tb_product_type pt on p.product_type_id=pt.product_type_id
            join tb_product_line_up plu on p.product_line_up_id=plu.product_line_up_id");

echo $dt->generate();

