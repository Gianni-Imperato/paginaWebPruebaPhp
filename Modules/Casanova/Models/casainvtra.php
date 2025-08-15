<?php

namespace Modules\Casanova\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class casainvtra extends Model
{
    use HasFactory;

    protected $table = 'invtra_casa';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;