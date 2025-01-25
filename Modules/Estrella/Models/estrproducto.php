<?php

namespace Modules\Estrella\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class estrproducto extends Model
{
    use HasFactory;

    protected $table = 'producto_estr';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'cod_arti';
    }

    
    public function scopeBuscar($query, $buscarpor){
        if($buscarpor){
            return $query ->select(
                                    'id', 
                                    'clase', 
                                    'cod_alter', 
                                    'cod_arti', 
                                    'des_arti', 
                                    'pvp_arti', 
                                    'can_exis', 
                                    'costo', 
                                    'cod_suc', 
                                    'fec_ing') 
                            ->where(
                                    'des_arti', 
                                    'like', "%$buscarpor%")
                            ->orWhere(
                                    'cod_alter', 
                                    'like', "%$buscarpor%");
        }
    }    


}


namespace App\Models;