<?php

namespace Modules\Estrella\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class estrpagos extends Model
{
    use HasFactory;

    protected $table = 'pagos_estr';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;