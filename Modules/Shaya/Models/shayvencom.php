<?php

namespace Modules\Shaya\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class shayvencom extends Model
{
    use HasFactory;

    protected $table = 'vencom_shay';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;