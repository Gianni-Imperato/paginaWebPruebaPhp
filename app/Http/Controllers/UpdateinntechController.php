<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Modules\Pan1\Models\{pan1siped};
use Modules\Pan1\Models\{pan1producto};
use Modules\Pan1\Models\{pan1pagos};
use Modules\Pan1\Models\{pan1vencom};

use Modules\Panteon2\Models\{pan2siped};
use Modules\Panteon2\Models\{pan2producto};
use Modules\Panteon2\Models\{pan2pagos};
use Modules\Panteon2\Models\{pan2vencom};

use Modules\Estrella\Models\{estrsiped};
use Modules\Estrella\Models\{estrproducto};
use Modules\Estrella\Models\{estrpagos};
use Modules\Estrella\Models\{estrvencom};

use Modules\Casanova\Models\{casasiped};
use Modules\Casanova\Models\{casaproducto};
use Modules\Casanova\Models\{casapagos};
use Modules\Casanova\Models\{casavencom};

use Modules\Victoria\Models\{victsiped};
use Modules\Victoria\Models\{victproducto};
use Modules\Victoria\Models\{victpagos};
use Modules\Victoria\Models\{victvencom};

use Modules\Shai\Models\{shaisiped};
use Modules\Shai\Models\{shaiproducto};
use Modules\Shai\Models\{shaipagos};
use Modules\Shai\Models\{shaivencom};

use Modules\Junin\Models\{junisiped};
use Modules\Junin\Models\{juniproducto};
use Modules\Junin\Models\{junipagos};
use Modules\Junin\Models\{junivencom};

use Modules\Shaya\Models\{shaysiped};
use Modules\Shaya\Models\{shayproducto};
use Modules\Shaya\Models\{shaypagos};
use Modules\Shaya\Models\{shayvencom};

use Modules\Suspension\Models\{suspsiped};
use Modules\Suspension\Models\{suspproducto};
use Modules\Suspension\Models\{susppagos};
use Modules\Suspension\Models\{suspvencom};

class UpdateinntechController extends Controller
{
    public function siped($record)
    {
        $recArr =  explode(";", $record);

        if($recArr[0] == "RSC"){
            $siped = new casasiped;
        }
        if($recArr[0] == "PA1"){
            $siped = new pan1siped;
        }
        if($recArr[0] == "RP1"){
            $siped = new pan2siped;
        }
        if($recArr[0] == "SRE"){
            $siped = new estrsiped;
        }
        if($recArr[0] == "VIC"){
            $siped = new victsiped;
        }
        if($recArr[0] == "CHA"){
            $siped = new shaisiped;
        }
        if($recArr[0] == "JUN"){
            $siped = new junisiped;
        }
        if($recArr[0] == "RSS"){
            $siped = new shaysiped;
        }
        if($recArr[0] == "SUS"){
            $siped = new suspsiped;
        }

        $siped->cod_suc = $recArr[0]; 
        $siped->nro_pedi = $recArr[1]; 
        $siped->cod_arti = $recArr[2];
        $siped->des_arti = $recArr[3];
        $siped->can_arti = $recArr[4];
        $siped->pvp_arti = $recArr[5];
        $siped->cost_uni = $recArr[6];
        $siped->cost_tot = $recArr[7];
        $siped->p_impuesto = $recArr[8];
        $siped->b_impuesto = $recArr[9];
        $siped->can_ante = $recArr[10];
        $siped->cod_prov = $recArr[11];
        $siped->nro_fact = $recArr[12];
        $siped->nro_orden = $recArr[13];
        $siped->fecha = $recArr[14];
        $siped->tipo_suc = "";
        $siped->tipo_divi = $recArr[16];
        $siped->tasa_camb = $recArr[17];   
        $siped->cost_mon = 0;
        $siped->cost_pro = $recArr[19];
        $siped->control = $recArr[20];
        $siped->nom_prov = $recArr[21];
        $siped->p_desc = $recArr[22];
        $siped->b_desc = $recArr[23];
        $siped->cd_pago = $recArr[24];
        $siped->status = "";
        $siped->usuario = $recArr[26];
        $siped->sta_pedi = "";   
        $siped->cons_reg = 0;
        $siped->sta_entrada = $recArr[27];
        $siped->nota_entrega = $recArr[28];
        $siped->fecha_fact = $recArr[29];
        $siped->cod_transporte = $recArr[30];
        if($siped){
           $siped->save();
        }
    }

    public function producto($record)
    {
        $recArr =  explode(";", $record);
        if($recArr[7] == "RSC"){
            $proucto = new casaproducto;
            $proucto = casaproducto::where('cod_arti', $recArr[0])->first();
        }else if($recArr[7] == "PA1"){
            $proucto = new pan1producto;
            $proucto = pan1producto::where('cod_arti', $recArr[0])->first();
        }else if($recArr[7] == "RP1"){
            $proucto = new pan2producto;
            $proucto = pan2producto::where('cod_arti', $recArr[0])->first();
        }else if($recArr[7] == "SRE"){
            $proucto = new estrproducto;
            $proucto = estrproducto::where('cod_arti', $recArr[0])->first();
        }else if($recArr[7] == "VIC"){
            $proucto = new victproducto;
            $proucto = victproducto::where('cod_arti', $recArr[0])->first();
        }else if($recArr[7] == "CHA"){
            $proucto = new shaiproducto;
            $proucto = shaiproducto::where('cod_arti', $recArr[0])->first();
        }else if($recArr[7] == "JUN"){
            $proucto = new juniproducto;
            $proucto = juniproducto::where('cod_arti', $recArr[0])->first();
        }else if($recArr[7] == "RSS"){
            $proucto = new shayproducto;
            $proucto = shayproducto::where('cod_arti', $recArr[0])->first();
        }else if($recArr[7] == "SUS"){
            $proucto = new suspproducto;
            $proucto = suspproducto::where('cod_arti', $recArr[0])->first();
        }    
        if($proucto){
            $proucto->can_exis = $recArr[4];
            $proucto->pvp_arti = $recArr[3];
            $proucto->costo = $recArr[5];
            $proucto->cost_prom = $recArr[20];
            $proucto->fec_vig = $recArr[18];
            $proucto->pvp_ant = $recArr[23];
            $proucto->pvp_nue = $recArr[24];
            $proucto->save();
        }else{
            if($recArr[7] == "RSC"){
                $proucto = new casaproducto;
            }else if($recArr[7] == "PA1"){
                $proucto = new pan1producto;
            }else if($recArr[7] == "RP1"){
                $proucto = new pan2producto;
            }else if($recArr[7] == "SRE"){
                $proucto = new estrproducto;
            }else if($recArr[7] == "VIC"){
                $proucto = new victproducto;
            }else if($recArr[7] == "CHA"){
                $proucto = new shaiproducto;
            }else if($recArr[7] == "JUN"){
                $proucto = new juniproducto;
            }else if($recArr[7] == "RSS"){
                $proucto = new shayproducto;
            }else if($recArr[7] == "RSS"){
                $proucto = new suspproducto;
            }
            $proucto->cod_arti = $recArr[0];
            $proucto->tipo_pro = $recArr[1];
            $proucto->des_arti = $recArr[2];
            $proucto->pvp_arti = $recArr[3];
            $proucto->can_exis = $recArr[4];
            $proucto->can_rese = 0;
            $proucto->costo = $recArr[5];
            $proucto->status = "A";
            $proucto->impuesto = $recArr[6];
            $proucto->cod_suc = $recArr[7];
            $proucto->linea = $recArr[8];
            $proucto->sub_linea = $recArr[9];
            $proucto->clase = $recArr[10];
            $proucto->grupo_pre = $recArr[11];
            $proucto->fabri_casa = $recArr[14];
            $proucto->tipo_visi = $recArr[15];
            $proucto->color = $recArr[16];
            $proucto->fec_ing = $recArr[17];
            $proucto->fec_vig = $recArr[18];
            $proucto->cost_prom = $recArr[20];
            $proucto->cod_prov = $recArr[21];
            $proucto->modelo = $recArr[22];
            $proucto->pvp_ant = $recArr[23];
            $proucto->pvp_nue = $recArr[24];
            $proucto->vtas_grav = $recArr[25];
            $proucto->comp_grav = $recArr[26];
            $proucto->cod_alter = $recArr[27];
            $proucto->promocion = $recArr[28];
            $proucto->inventario = $recArr[29];
            $proucto->can_vtas = $recArr[30];
            $proucto->tipo_divi = $recArr[31];
            $proucto->costo_divi = $recArr[32];
            $proucto->save();
        } 
    }

    public function pagos($record)
    {
        $recArr =  explode(";", $record);
        if($recArr[0] == "RSC"){
            $pago = new casapagos;
            $pago = casapagos::where('nro_docu', $recArr[2])
                             ->where('nro_pago', $recArr[3])
                             ->where('fec_pago', $recArr[8])
                             ->first();
        }else if($recArr[0] == "PA1"){    
            $pago = new pan1pagos;
            $pago = pan1pagos::where('nro_docu', $recArr[2])
                             ->where('nro_pago', $recArr[3])
                             ->where('fec_pago', $recArr[8])
                             ->first();
        }else if($recArr[0] == "RP1"){    
            $pago = new pan2pagos;
            $pago = pan2pagos::where('nro_docu', $recArr[2])
                                ->where('nro_pago', $recArr[3])
                                ->where('fec_pago', $recArr[8])
                                ->first();
        }else if($recArr[0] == "SRE"){    
            $pago = new estrpagos;
            $pago = estrpagos::where('nro_docu', $recArr[2])
                                ->where('nro_pago', $recArr[3])
                                ->where('fec_pago', $recArr[8])
                                ->first();
        }else if($recArr[0] == "VIC"){    
            $pago = new victpagos;
            $pago = victpagos::where('nro_docu', $recArr[2])
                                ->where('nro_pago', $recArr[3])
                                ->where('fec_pago', $recArr[8])
                                ->first();
        }else if($recArr[0] == "CHA"){    
            $pago = new shaipagos;
            $pago = shaipagos::where('nro_docu', $recArr[2])
                                ->where('nro_pago', $recArr[3])
                                ->where('fec_pago', $recArr[8])
                                ->first();
        }else if($recArr[0] == "JUN"){    
            $pago = new junipagos;
            $pago = junipagos::where('nro_docu', $recArr[2])
                                ->where('nro_pago', $recArr[3])
                                ->where('fec_pago', $recArr[8])
                                ->first();
        }else if($recArr[0] == "RSS"){    
            $pago = new shaypagos;
            $pago = shaypagos::where('nro_docu', $recArr[2])
                                ->where('nro_pago', $recArr[3])
                                ->where('fec_pago', $recArr[8])
                                ->first();
        }else if($recArr[0] == "SUS"){    
            $pago = new susppagos;
            $pago = susppagos::where('nro_docu', $recArr[2])
                                ->where('nro_pago', $recArr[3])
                                ->where('fec_pago', $recArr[8])
                                ->first();
        }            
        if($pago){
            $pago->mont_venta = $recArr[4];
            $pago->mon_pago = $recArr[5];
            $pago->saldo = $recArr[6];
            $pago->save();
        }else{
            if($recArr[0] == "RSC"){
                $pago = new casapagos;
            }else if($recArr[0] == "PA1"){
                $pago = new pan1pagos;
            }else if($recArr[0] == "RP1"){
                $pago = new pan2pagos;
            }else if($recArr[0] == "SRE"){
                $pago = new estrpagos;
            }else if($recArr[0] == "VIC"){
                $pago = new victpagos;
            }else if($recArr[0] == "CHA"){
                $pago = new shaipagos;
            }else if($recArr[0] == "JUN"){
                $pago = new junipagos;
            }else if($recArr[0] == "RSS"){
                $pago = new shaypagos;
            }else if($recArr[0] == "SUS"){
                $pago = new susppagos;
            }
            $pago->cod_suc = $recArr[0];
            $pago->tipo_venta = $recArr[1];
            $pago->nro_docu = $recArr[2];
            $pago->nro_pago = $recArr[3];
            $pago->mont_venta = $recArr[4];
            $pago->mon_pago = $recArr[5];
            $pago->saldo = $recArr[6];
            $pago->tipo_pago = $recArr[7];
            $pago->fec_pago = $recArr[8];
            $pago->cod_pago = $recArr[9];
            $pago->literal = $recArr[10];
            if($recArr[11] != ""){
                $pago->nro_cheq = $recArr[11];
            }else{    
                $pago->nro_cheq = 0;
            }
            $pago->nro_tarj = $recArr[12];
            $pago->cod_banco = $recArr[13];
            if($recArr[14] != ""){
                $pago->nota_cons = $recArr[14];
            }else{    
                $pago->nota_cons = 0;
            }
            $pago->monto_iva = $recArr[15];
            $pago->ced_clie = $recArr[16];
            $pago->nomb_clie = $recArr[17];
            $pago->cod_emp = $recArr[18];
            $pago->status = $recArr[19];
            $pago->fechreg = null;
            $pago->tipo_suc = $recArr[21];
            $pago->cod_usu = $recArr[22];
            $pago->save();
        } 
    }

    public function vencom($record)
    {
        $recArr =  explode(";", $record);
        if($recArr[0] == "RSC"){
            $vecom = new casavencom;
            $proucto = new casaproducto;
            $proucto = casaproducto::where('cod_arti', $recArr[8])->first();
        }
        if($recArr[0] == "PA1"){
            $vecom = new pan1vencom;
            $proucto = new pan1producto;
            $proucto = pan1producto::where('cod_arti', $recArr[8])->first();
        }
        if($recArr[0] == "RP1"){
            $vecom = new pan2vencom;
            $proucto = new pan2producto;
            $proucto = pan2producto::where('cod_arti', $recArr[8])->first();
        }
        if($recArr[0] == "SRE"){
            $vecom = new estrvencom;
            $proucto = new estrproducto;
            $proucto = estrproducto::where('cod_arti', $recArr[8])->first();
        }
        if($recArr[0] == "VIC"){
            $vecom = new victvencom;
            $proucto = new victproducto;
            $proucto = victproducto::where('cod_arti', $recArr[8])->first();
        }
        if($recArr[0] == "CHA"){
            $vecom = new shaivencom;
            $proucto = new shaiproducto;
            $proucto = shaiproducto::where('cod_arti', $recArr[8])->first();
        }
        if($recArr[0] == "JUN"){
            $vecom = new junivencom;
            $proucto = new juniproducto;
            $proucto = juniproducto::where('cod_arti', $recArr[8])->first();
        }
        if($recArr[0] == "RSS"){
            $vecom = new shayvencom;
            $proucto = new shayproducto;
            $proucto = shayproducto::where('cod_arti', $recArr[8])->first();
        }
        if($recArr[0] == "SUS"){
            $vecom = new suspvencom;
            $proucto = new suspproducto;
            $proucto = suspproducto::where('cod_arti', $recArr[8])->first();
        }
        $vecom->cod_suc = $recArr[0];
        $vecom->nro_doc = $recArr[1];
        $vecom->nro_fac = $recArr[2];
        $vecom->motivo = $recArr[3];
        $vecom->cond_vent = $recArr[4];
        $vecom->transac = $recArr[5];
        $vecom->fec_fac = $recArr[6];
        $vecom->tipo_pro = $recArr[7];
        $vecom->cod_arti = $recArr[8];
        $vecom->des_arti = $recArr[9];
        $vecom->cos_arti = $recArr[10];
        $vecom->can_arti = $recArr[11];
        $vecom->pvp_arti = $recArr[12];
        $vecom->pvp_bruto = $recArr[13];
        $vecom->p_desc = $recArr[14];
        $vecom->b_desc = $recArr[15];
        $vecom->tipo_desc = $recArr[16];
        $vecom->p_impuesto = $recArr[17];
        $vecom->b_impuesto = $recArr[18];
        $vecom->pvp_neto = $recArr[19];
        $vecom->p_desc_adi = $recArr[20];
        $vecom->b_desc_adi = $recArr[21];
        $vecom->total_neto = $recArr[22];
        $vecom->cod_emp = $recArr[23];
        $vecom->cod_emp2 = $recArr[24];
        $vecom->cod_opt = $recArr[25];
        $vecom->cod_cli = $recArr[26];
        $vecom->cedula = $recArr[27];
        $vecom->nom_clie = $recArr[28];
        $vecom->tipo_suc = $recArr[29];
        $vecom->casa = $recArr[30];
        $vecom->modelo = $recArr[31];
        $vecom->color = $recArr[32];
        $vecom->linea = $recArr[33];
        $vecom->sub_linea = $recArr[34];
        $vecom->clase = $recArr[35];
        $vecom->tipo_visi = $recArr[36];
        $vecom->usuario = $recArr[37];
        if($recArr[38] != ""){
            $vecom->pvp_ante = $recArr[38];
        }else{    
            $vecom->pvp_ante = 0;
        }
        $vecom->control = $recArr[39];
        $vecom->cod_prov = $recArr[40];
        $vecom->p_rete = $recArr[41];
        $vecom->n_rete = null;
        $vecom->fecha_reten = null;
        $vecom->tipo_divi = null;
        $vecom->tasa_camb = null;
        $vecom->save();
        //Actualizo Producto restanto existencia
        $existencia = 0;
        if($proucto){
            $existencia = $proucto->can_exis - $recArr[11];
            $proucto->can_exis = $existencia;
            $proucto->save();
        }

    }

}
