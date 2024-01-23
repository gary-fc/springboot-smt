<?php

namespace App\domain\shared;

class BusinessRuleValidationException extends \Exception
{
    private $brokenRule;
    private $details;

    public function __construct($brokenRule, $message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        if ($brokenRule instanceof BusinessRule) {
            $this->brokenRule = $brokenRule;
            $this->details = $brokenRule->getMessage();
        } else {
            $this->brokenRule = null;
            $this->details = $brokenRule; // Aquí, $brokenRule es un mensaje en string.
        }
    }

    public function __toString()
    {
        $name = $this->brokenRule ? get_class($this->brokenRule) : "BusinessRule";
        return $name . ": " . $this->details;
    }
}
