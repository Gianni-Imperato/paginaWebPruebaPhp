<?php

namespace Modules\Panteon2\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pan2vencom extends Model
{
    use HasFactory;

    protected $table = 'vencom_pan2';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;