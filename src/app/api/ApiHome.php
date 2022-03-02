<?php
namespace App\api;
class ApiHome extends ApiBase
{
   public function init($request, $response)
   {
        $items = [];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '1,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '2,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '3,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '4,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '5,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '6,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '7,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '8,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '9,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '10,000',
        ];
        $items[] = [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTscg46la830QdJOvD8HvUM_VzN99l6_ms61A&usqp=CAU',
            'size'  => 'M,L',
            'price' => '10,000',
        ];
        return json_encode($items, JSON_UNESCAPED_UNICODE);
   }
}
