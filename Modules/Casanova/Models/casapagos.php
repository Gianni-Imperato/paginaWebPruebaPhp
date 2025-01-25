<?php

namespace Modules\Casanova\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class casapagos extends Model
{
    use HasFactory;

    protected $table = 'pagos_casa';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;