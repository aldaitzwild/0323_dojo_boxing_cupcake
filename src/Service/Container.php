<?php

namespace App\Service;

class Container
{
    public function inbox(int $cupcakes): array
    {
        $largeBox = 0;

        while($cupcakes > 8) {
            $largeBox++;
            $cupcakes -= 8;
        }
        
        if($cupcakes === 1) return [$largeBox + 0, 0, 1];
        if($cupcakes === 2) return [$largeBox + 0, 0, 1];
        if($cupcakes === 3) return [$largeBox + 0, 1, 0];
        if($cupcakes === 4) return [$largeBox + 0, 1, 0];
        if($cupcakes === 5) return [$largeBox + 0, 1, 0];
        if($cupcakes === 6) return [$largeBox + 1, 0, 0];
        if($cupcakes === 7) return [$largeBox + 1, 0, 0];
        if($cupcakes === 8) return [$largeBox + 1, 0, 0];
    }
}
