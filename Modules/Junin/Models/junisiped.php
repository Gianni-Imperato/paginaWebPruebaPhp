<?php

namespace Modules\Junin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class junisiped extends Model
{
    use HasFactory;

    protected $table = 'siped_juni';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;