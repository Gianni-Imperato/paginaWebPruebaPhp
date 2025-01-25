<?php

namespace Modules\Suspension\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class suspvencom extends Model
{
    use HasFactory;

    protected $table = 'vencom_susp';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;