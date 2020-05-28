<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financiero extends Model
{
    protected $fillable = [
        'consolidado_u', 
        'consolidado_total', 
        'consolidado_objetivo',
        'plan_unidades_u', 
        'plan_unidades_total', 
        'plan_unidades_objetivo',
        'plan_repuestos_u', 
        'plan_repuestos_total', 
        'plan_repuestos_objetivo',
        'proveedores_u', 
        'proveedores_total', 
        'proveedores_objetivo',
        'venta_unidades_u', 
        'venta_unidades_total', 
        'venta_unidades_objetivo',
        'venta_post_u', 
        'venta_post_total', 
        'venta_post_objetivo',
        'stock_sin_deuda_u', 
        'stock_sin_deuda_total', 
        'stock_sin_deuda_objetivo',
        'stock_financiado_u', 
        'stock_financiado_total', 
        'stock_financiado_objetivo', 
        'stock_financiado_u', 
        'stock_financiado_total', 
        'stock_financiado_objetivo', 
        'stock_usados_u',
        'stock_usados_total',
        'stock_usados_objetivo',
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
