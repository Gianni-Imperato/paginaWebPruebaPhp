<?php

namespace Modules\Casanova\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class casavencom extends Model
{
    use HasFactory;

    protected $table = 'vencom_casa';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    

}


namespace App\Models;