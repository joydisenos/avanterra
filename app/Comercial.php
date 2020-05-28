<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercial extends Model
{
    protected $fillable = [
        'contactos_u', 
        'contactos_total', 
        'contactos_objetivo',
        'prospectos_u', 
        'prospectos_total', 
        'prospectos_objetivo',
        'boletos_u', 
        'boletos_total', 
        'boletos_objetivo',
        'declaraciones_u', 
        'declaraciones_total', 
        'declaraciones_objetivo',
        'etios_u', 
        'etios_total', 
        'etios_objetivo',
        'yaris_u', 
        'yaris_total', 
        'yaris_objetivo',
        'corolla_u', 
        'corolla_total', 
        'corolla_objetivo',
        'hillux_u', 
        'hillux_total', 
        'hillux_objetivo',
        'alta_gama_u', 
        'alta_gama_total', 
        'alta_gama_objetivo',
        'boletos_usados_u', 
        'boletos_usados_total', 
        'boletos_usados_objetivo',
        'entregas_u', 
        'entregas_total', 
        'entregas_objetivo',
        'suscripciones_u', 
        'suscripciones_total', 
        'suscripciones_objetivo',
        'ventas_u', 
        'ventas_total', 
        'ventas_objetivo',
        'cpu_u', 
        'cpu_total', 
        'cpu_objetivo',
        'tu_u', 
        'tu_total', 
        'tu_objetivo',
        'created_at',
    ];

    public function promedio($promediar)
    {
        $campo1 = $promediar . '_u';
        $campo2 = $promediar . '_objetivo';

        $unidad = $this->$campo1 * 30;
        $total = $this->$campo2;

        if($total == 0)
        {
            return 0;
        }

        $promedio = ($unidad * 100) / $total;

        return $promedio;
    }

    public function promedioMensual($promediar)
    {
        $promediarCampo = $promediar . '_u';
        /*$promedio = Comercial::whereMonth('created_at' , date('m'))
                    ->whereYear('created_at' , date('Y'))
                    ->avg($promediarCampo);*/
        $promedio = $this->$promediarCampo * 30;
        
        return $promedio;
    }

    public function upDown($comparar)
    {
        $anteriorId = $this->id - 1;
        $anterior = Comercial::find($anteriorId);
        $compararCampo = $comparar . '_u';

        if($anterior == null)
        {
            return '=';
        }else{
            if($this->$compararCampo > $anterior->$compararCampo)
            {
                $diff = $this->$compararCampo - $anterior->$compararCampo;
                $return = "<span class='text-success'>+".$diff."</span>";
            }else if($this->$compararCampo == $anterior->$compararCampo){
                $return = "<span class='text-warning'>=</span>";
            }else{
                $diff = $anterior->$compararCampo - $this->$compararCampo;
                $return = "<span class='text-danger'>-".$diff."</span>";
            }

            return $return;
        }
    }
}
