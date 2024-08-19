<?php

namespace App\Domain\Entities;

use Carbon\Carbon;
use DateTime;

class SendaEntity {

    private int $id;
    private string $name;
    private ?DateTime $created_at;
    private ?DateTime $updated_at;

    public function __construct(int $id,string $name,?DateTime $created_at,?DateTime $updated_at)
    {
        $this->id=$id;
        $this->name = $name;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}