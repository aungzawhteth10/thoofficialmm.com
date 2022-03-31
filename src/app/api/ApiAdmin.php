<?php
namespace App\api;
class ApiAdmin extends ApiBase
{
    public function init($request, $response)
    {
        $dbProductMapper = new \App\db\DbProductMapper;
        $dmProduct = new \App\model\DmProduct;
        $product =  $dbProductMapper->find();
        $items = [];
        foreach ($product as $key => $value) {
            $images = explode(',', $value['images']);
            $image = ($images[0] == '') ? 'logo.png' : $images[0];
            $items[] = [
                'product_code' => $value['product_code'],
                'image'        => $image . '?' . time(),
                'name'         => $value['name'],
                'price'        => $value['price'],
                'avablility'   => $value['avablility'],
            ];
        }
        return parent::tojson($items);
    }
    public function createJson($request, $response)
    {
        $dbProductMapper = new \App\db\DbProductMapper;
        $dmProduct = new \App\model\DmProduct;
        $product =  $dbProductMapper->find();
        $json_data = json_encode($product, JSON_UNESCAPED_UNICODE);
        $jsonFilePath = getcwd() . '/src/app/files/product.json';
        file_put_contents($jsonFilePath, $json_data);
        return parent::tojson($json_data);
    }
    public function addNewProduct($request, $response)
    {
        $dbProductMapper = new \App\db\DbProductMapper;
        $dmProduct = new \App\model\DmProduct;
        $newId =  $dbProductMapper->idSaiban('product_id', 'product');
        $code  = str_pad($newId, 3, '0', STR_PAD_LEFT);
        $dmProduct->product_id   = $newId;
        $dmProduct->product_code = $code;
        $count = $dbProductMapper->insert($dmProduct);
        return parent::tojson($code);
    }
    public function makeNoPublish($request, $response)
    {
        $jsonFilePath = getcwd() . '/src/app/files/publish.json';
        $json_data = json_encode(['publish' => 0], JSON_UNESCAPED_UNICODE);
        file_put_contents($jsonFilePath, $json_data);
        return parent::tojson(0);
    }
    public function makePublish($request, $response)
    {
        $jsonFilePath = getcwd() . '/src/app/files/publish.json';
        $json_data = json_encode(['publish' => 1], JSON_UNESCAPED_UNICODE);
        file_put_contents($jsonFilePath, $json_data);
        return parent::tojson(1);
    }
}
