<?php

namespace Modules\Suspension\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class suspsiped extends Model
{
    use HasFactory;

    protected $table = 'siped_susp';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;