<?php
namespace App\api;
class ApiProduct extends ApiBase
{
   public function init($request, $response)
   {
        $return = [];
        $return['images'] = ['111_1', '111_2', '111_3'];
        $return['info']   = [
            'description' => 'Dragonair is a long, serpentine Pokémon with sky blue scales and a white underside. It has a rounded snout, oval purple eyes, and a small, white horn on its forehead. On each side of its head is a small, stylized wing, which is white and curves into a swirl at the base. Three blue, crystal orbs adorn its body: one on its neck and two on its tail.Dragonair emits a gentle aura that gives it a mystical appearance. As seen in the anime, it can make its wings grow larger in order to fly, but otherwise moves through the air unaided. Dragonair hosts a large amount of energy within its body, which it can discharge through the crystals on its neck and tail. This causes its body to brighten and give off a different aura that changes the weather in its vicinity. As a result, Dragonair has been referred as a divine Pokémon since ancient times by agricultural people. Dragonair is a rare Pokémon that inhabits pristine seas and lakes. The lakes Dragonair lives in are usually filled with offerings from people in gratitude. There is a saying that a person sees a Dragonair at the start of a year, the person will be healthy all year long. In the past, Outrage was its signature move.',
            'name'  => 'Silk Top',
            'price' => '20,000Ks',
            'size'  => 'S,M,L',
        ];
        return json_encode($return, JSON_UNESCAPED_UNICODE);
   }
}
