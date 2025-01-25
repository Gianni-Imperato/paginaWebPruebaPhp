<?php

namespace Modules\Shai\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class shaivencom extends Model
{
    use HasFactory;

    protected $table = 'vencom_shai';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;