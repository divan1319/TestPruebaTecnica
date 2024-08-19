<?php

namespace App\Domain\Repository;

use App\Domain\Entities\HouseEntity;

interface HouseRepository
{
    public function CreateTenant(HouseEntity $tenant) : bool;
    public function UpdateTenant(HouseEntity $tenant) : HouseEntity;
}
