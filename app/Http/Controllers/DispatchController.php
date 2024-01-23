<?php

namespace App\Http\Controllers;


use App\application\UseCases\dispatch\command\CreateDispatchCommand;
use App\Http\Requests\CreateDispatchRequest;

class DispatchController extends Controller
{
    protected $createDispatchCommand;

    public function __construct(CreateDispatchCommand $createDispatchCommand)
    {
        $this->createDispatchCommand = $createDispatchCommand;
    }


    public function store(CreateDispatchRequest $request)
    {
        return $this->createDispatchCommand->handle($request);
    }
}
