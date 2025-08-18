<?php

namespace Modules\Victoria\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class victvencom extends Model
{
    use HasFactory;

    protected $table = 'vencom_vict';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;