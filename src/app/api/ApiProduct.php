<?php
namespace App\api;
class ApiProduct extends ApiBase
{
   public function init($request, $response)
   {
        $return = [];
        $return['images'] = ['111_1', '111_2', '111_3'];
        $return['info']   = [
            'description' => 'Dragonair is a long, serpentine Pokémon with sky blue scales and a white underside. It has a rounded snout, oval purple eyes, and a small, white horn on its forehead. On each side of its head is a small, stylized wing, which is white and curves into a swirl at the base. Three blue, crystal orbs adorn its body: one on its neck and two on its tail.',
            'name'  => 'Silk Top',
            'price' => '20,000Ks',
            'size'  => 'S,M,L',
        ];
        return json_encode($return, JSON_UNESCAPED_UNICODE);
   }
}
