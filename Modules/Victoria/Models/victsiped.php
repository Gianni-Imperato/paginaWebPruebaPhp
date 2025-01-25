<?php

namespace Modules\Victoria\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class victsiped extends Model
{
    use HasFactory;

    protected $table = 'siped_vict';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;