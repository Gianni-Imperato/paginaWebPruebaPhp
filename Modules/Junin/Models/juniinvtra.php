<?php

namespace Modules\Junin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class juniinvtra extends Model
{
    use HasFactory;

    protected $table = 'invtra_juni';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;