<?php

namespace Modules\Panteon2\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pan2invtra extends Model
{
    use HasFactory;

    protected $table = 'invtra_pan2';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;