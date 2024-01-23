<?php

namespace App\domain\shared;

interface Repository
{
    public function findByIdAsync($id);

    public function createAsync($obj);
}
