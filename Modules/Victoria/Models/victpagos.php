<?php

namespace Modules\Victoria\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class victpagos extends Model
{
    use HasFactory;

    protected $table = 'pagos_vict';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }
}


namespace App\Models;