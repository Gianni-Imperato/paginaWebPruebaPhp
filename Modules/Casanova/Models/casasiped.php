<?php

namespace Modules\Casanova\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class casasiped extends Model
{
    use HasFactory;

    protected $table = 'siped_casa';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;