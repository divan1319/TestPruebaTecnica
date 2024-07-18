<?php

namespace App\Domain\Entities;

use Carbon\Carbon;

class HouseEntity
{
    private int $id;
    private int $number;
    private int $user_id;
    private int $senda_id;
    private int $poligono_id;
    private float $quota;
    private ?Carbon $created_at;
    private ?Carbon $updated_at;


    public function __construct(
        int $id,
        int $number,
        int $user_id,
        int $senda_id,
        int $poligono_id,
        float $quota,
        ?Carbon $created_at,
        ?Carbon $updated_at
    ) {
        $this->id = $id;
        $this->number = $number;
        $this->user_id = $user_id;
        $this->senda_id = $senda_id;
        $this->poligono_id = $poligono_id;
        $this->quota = $quota;
        $this->created_at = $created_at ?? Carbon::now();
        $this->updated_at = $updated_at ?? Carbon::now();
    }

    
}
