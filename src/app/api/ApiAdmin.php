<?php
namespace App\api;
class ApiAdmin extends ApiBase
{
   public function init($request, $response)
   {
        $dbProductMapper = new \App\db\DbProductMapper;
        $dmProduct = new \App\model\DmProduct;
        $product =  $dbProductMapper->find();
        $json_data = json_encode($product, JSON_UNESCAPED_UNICODE);
        $jsonFilePath = getcwd() . '/src/app/files/product.json';
        file_put_contents($jsonFilePath, $json_data);
        return parent::tojson($json_data);
   }
}
