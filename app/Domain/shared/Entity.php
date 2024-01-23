<?php

namespace App\domain\shared;

abstract class Entity
{
    public $id;
    public $domainEvents;

    public function __construct()
    {
        $this->domainEvents = array();
    }

    public function addDomainEvent($event)
    {
        $this->domainEvents[] = $event;
    }

    public function clearDomainEvents()
    {
        $this->domainEvents = array();
    }

    protected function checkRule($rule)
    {
        if ($rule === null) {
            throw new InvalidArgumentException("Rule cannot be null");
        }

        if (!$rule->isValid()) {
            throw new BusinessRuleValidationException($rule);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDomainEvents()
    {
        return $this->domainEvents;
    }
}
