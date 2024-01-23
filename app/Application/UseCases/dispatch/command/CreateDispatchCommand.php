<?php

namespace App\application\UseCases\dispatch\command;

use App\domain\models\Dispatch;
use App\Domain\repositories\DispatchRepository;
use App\Http\Requests\CreateDispatchRequest;

class CreateDispatchCommand
{
    protected $dispatchRepository;
    private const NOT_FOUND = "NOT FOUND";

    public function __construct(DispatchRepository $dispatchRepository)
    {
        $this->dispatchRepository = $dispatchRepository;
    }

    public function handle(CreateDispatchRequest $createDispatchRequest)
    {
        $document = $createDispatchRequest->get("document") ?? self::NOT_FOUND;
        $type = $createDispatchRequest->get("type") ?? self::NOT_FOUND;
        $productCode = $createDispatchRequest->get("productCode") ?? self::NOT_FOUND;

        $dispatch = new Dispatch($document, $type, $productCode);

        $this->dispatchRepository->createAsync($dispatch);

        return response()->json([
            "data" => $dispatch->getId(),
        ]);
    }
}
