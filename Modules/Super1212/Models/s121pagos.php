<?php

namespace Modules\Super1212\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class s121pagos extends Model
{
    use HasFactory;

    protected $table = 'pagos_s121';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;