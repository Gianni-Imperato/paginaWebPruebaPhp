<?php

namespace Modules\Panteon2\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pan2siped extends Model
{
    use HasFactory;

    protected $table = 'siped_pan2';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;