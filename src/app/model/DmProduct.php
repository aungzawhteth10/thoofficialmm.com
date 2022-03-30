<?php
namespace App\model;
class DmProduct extends DataModel
{
    public static $schema = [
        'product_id'   => 'integer',
        'product_code' => 'string',
        'name'         => 'string',
        'size'         => 'string',
        'price'        => 'string',
        'description'  => 'string',
        'images'       => 'string',
        'avablility'   => 'string',
        'collection'   => 'string',
        'type'         => 'string',
    ];
    public static $primary_key = [
        'product_id',
    ];
}