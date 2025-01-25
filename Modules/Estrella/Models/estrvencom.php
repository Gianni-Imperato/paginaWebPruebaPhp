<?php

namespace Modules\Estrella\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class estrvencom extends Model
{
    use HasFactory;

    protected $table = 'vencom_estr';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;