<?php

namespace App\Domain\Interfaces;

use App\Domain\Entities\HouseEntity;

interface IHouse
{
    public function CreateTenant(HouseEntity $tenant) : bool;
    public function UpdateTenant(HouseEntity $tenant) : HouseEntity;
}
