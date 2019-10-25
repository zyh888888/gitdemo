<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class First extends Model
{
    public function firstFn()
    {
        return 'from firstService - firstFn';
    }

    public function secondFn()
    {
        return 'from firstService - secondFn';
    }
}
