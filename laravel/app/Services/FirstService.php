<?php

namespace App\Services;

use App\Models\First;

class FirstService
{
    protected $first;

    public function __construct(First $first)
    {
        $this->first = $first;
    }

    public function firstFn()
    {
        return $this->first->firstFn();
    }

    public function secondFn()
    {
        return $this->first->secondFn();
    }


}