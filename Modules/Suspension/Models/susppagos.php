<?php

namespace Modules\Suspension\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class susppagos extends Model
{
    use HasFactory;

    protected $table = 'pagos_susp';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }
}


namespace App\Models;