<?php

namespace App\Models\repositories\dispatch;

use App\Domain\repositories\DispatchRepository;
use App\Models\models\Dispatch;

class DispatchRepositoryImpl implements DispatchRepository
{
    public function __construct()
    {
    }


    public function findByIdAsync($id)
    {
        // TODO: Implement findByIdAsync() method.
    }

    public function createAsync($obj)
    {
        Dispatch::create([
            "document" => $obj->getDocument(),
            "type" => $obj->getType(),
            "productCode" => $obj->getProductCode(),
            "id" => $obj->getId()
        ]);

        error_log("guardado");
    }
}
