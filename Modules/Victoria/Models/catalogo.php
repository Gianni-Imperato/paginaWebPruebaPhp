<?php

namespace Modules\Victoria\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class catalogo extends Model
{
    use HasFactory;

    protected $table = 'storage';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;