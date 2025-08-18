<?php

namespace Modules\Shai\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class shaisiped extends Model
{
    use HasFactory;

    protected $table = 'siped_shai';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;