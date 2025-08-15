<?php

namespace Modules\Shaya\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class shayinvtra extends Model
{
    use HasFactory;

    protected $table = 'invtra_shay';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;