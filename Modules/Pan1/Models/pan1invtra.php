<?php

namespace Modules\Pan1\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pan1invtra extends Model
{
    use HasFactory;

    protected $table = 'invtra_pan1';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;