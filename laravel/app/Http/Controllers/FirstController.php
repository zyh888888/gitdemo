<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FirstService;
class FirstController extends Controller
{
    protected $firstModel;

    public function __construct(FirstService $firstService)
    {
        $this->firstModel = $firstService;
    }

    public function firstFn()
    {
        $fdata = $this->firstModel->firstFn();
        return $fdata;
    }

    public function secondFn()
    {
        $sdata = $this->firstModel->secondFn();
        return $sdata;
    }
}
