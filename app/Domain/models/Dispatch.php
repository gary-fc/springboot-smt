<?php

namespace App\domain\models;

use App\domain\shared\AggregateRoot;

class Dispatch extends AggregateRoot
{
    private string $document;

    private string $type;

    private string $productCode;

    /**
     * @param string $document
     * @param string $type
     */
    public function __construct(string $document, string $type, string $productCode)
    {
        $this->id = \Illuminate\Support\Str::uuid()->toString();
        $this->productCode = $productCode;
        $this->document = $document;
        $this->type = $type;
    }

    public function getDocument(): string
    {
        return $this->document;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getProductCode(): string
    {
        return $this->productCode;
    }
}
