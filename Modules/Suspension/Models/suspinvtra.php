<?php

namespace Modules\Suspension\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class suspinvtra extends Model
{
    use HasFactory;

    protected $table = 'invtra_susp';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;