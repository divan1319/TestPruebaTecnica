<?php

namespace App\Infraestructure\Repository;

use App\Application\Services\HouseServices;
use App\Domain\Entities\HouseEntity;
use App\Domain\Repository\IHouseRepository;

class HouseRepository implements IHouseRepository
{
    public function __construct(private readonly HouseServices $houseServices)
    {
        
    }

    public function CreateTenant(HouseEntity $tenant): bool
    {
        $newTenant = $this->houseServices->createTenant();
        return $newTenant;
    }
    public function UpdateTenant(HouseEntity $tenant): HouseEntity
    {
        return new HouseEntity(1,1,1,1,1,6.6,null,null);
    }
}
