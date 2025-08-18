<?php

namespace Modules\Super1212\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class s121siped extends Model
{
    use HasFactory;

    protected $table = 'siped_s121';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;