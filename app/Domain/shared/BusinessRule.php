<?php

namespace App\domain\shared;

interface BusinessRule
{
    public function isValid();

    public function getMessage();
}
