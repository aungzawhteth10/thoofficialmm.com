<?php
namespace App\api;
class ApiHome extends ApiBase
{
   public function init($request, $response)
   {
        $items = [];
        $items[] = [
            'product_id' => '111',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '0',
            'name'  => 'Silk Top',
            'price' => '1,000',
        ];
        $items[] = [
            'product_id' => '112',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '1',
            'name'  => 'Sweater Top',
            'price' => '2,000',
        ];
        $items[] = [
            'product_id' => '113',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '0',
            'name'  => 'Long Top',
            'price' => '3,000',
        ];
        $items[] = [
            'product_id' => '114',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '0',
            'name'  => 'Silk Top',
            'price' => '4,000',
        ];
        $items[] = [
            'product_id' => '115',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '1',
            'name'  => 'Silk Top',
            'price' => '5,000',
        ];
        $items[] = [
            'product_id' => '116',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '1',
            'name'  => 'Silk Top',
            'price' => '6,000',
        ];
        $items[] = [
            'product_id' => '117',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '0',
            'name'  => 'Silk Top',
            'price' => '7,000',
        ];
        $items[] = [
            'product_id' => '118',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '1',
            'name'  => 'Silk Top',
            'price' => '8,000',
        ];
        $items[] = [
            'product_id' => '119',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '1',
            'name'  => 'Silk Top',
            'price' => '9,000',
        ];
        $items[] = [
            'product_id' => '120',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '0',
            'name'  => 'Silk Top',
            'price' => '10,000',
        ];
        $items[] = [
            'product_id' => '121',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'out_of_stock' => '0',
            'name'  => 'Silk Top',
            'price' => '10,000',
        ];
        return json_encode($items, JSON_UNESCAPED_UNICODE);
   }
}
