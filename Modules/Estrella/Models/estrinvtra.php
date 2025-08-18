<?php

namespace Modules\Estrella\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class estrinvtra extends Model
{
    use HasFactory;

    protected $table = 'invtra_estr';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;