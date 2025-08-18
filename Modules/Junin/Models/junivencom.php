<?php

namespace Modules\Junin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class junivencom extends Model
{
    use HasFactory;

    protected $table = 'vencom_juni';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;