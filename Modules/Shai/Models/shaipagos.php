<?php

namespace Modules\Shai\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class shaipagos extends Model
{
    use HasFactory;

    protected $table = 'pagos_shai';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;