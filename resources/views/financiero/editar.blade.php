@extends('master.master')
@section('content')

<section class="admin-content">
        @component('components.titulo')
            @slot('titulo')
                @isset($financiero)
                <h4>Editar Financiero ID:{{ $financiero->id }}</h4>
                @else
                <h4>Crear Financiero</h4>
                @endisset
            @endslot

            
        @endcomponent

        <div class="container  pull-up">
            <div class="row">
                <div class="col">
                    <form action="{{ isset($financiero) ?  route('financiero.actualizar' , $financiero->id) : route('financiero.cargar') }}" method="post">
                    @csrf
                        <!--widget card begin-->
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="m-b-0">
                                    @isset($financiero)
                                        <input type="date" class="form-control" value="{{$financiero->created_at->format('Y-m-d')}}" name="created_at"> 
                                    @else
                                    <input type="date" class="form-control" value="{{ Carbon\Carbon::now()->format('Y-m-d')}}" name="created_at"> 
                                    @endisset
                                </h5>
                            </div>
                            <div class="card-body ">
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <td>Contactos</td>
                                        <td>Unidades</td>
                                        <td>$ Total</td>
                                        <td>Up Down</td>
                                        <td>Objetivo</td>
                                        <td>% Cumplimiento</td>
                                        <td>Promedio Mensual</td>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td>
                                                <p>Posición consolidada de bancos </p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="consolidado_u" value="{{ isset($financiero) ? $financiero->consolidado_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="consolidado_total" value="{{ isset($financiero) ? $financiero->consolidado_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('consolidado') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="consolidado_objetivo" value="{{ isset($financiero) ? $financiero->consolidado_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('consolidado') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('consolidado') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cuenta Floor Plan Unidades</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="plan_unidades_u" value="{{ isset($financiero) ? $financiero->plan_unidades_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="plan_unidades_total" value="{{ isset($financiero) ? $financiero->plan_unidades_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('plan_unidades') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="plan_unidades_objetivo" value="{{ isset($financiero) ? $financiero->plan_unidades_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('plan_unidades') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('plan_unidades') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cuenta Floor Plan Repuestos $</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="plan_repuestos_u" value="{{ isset($financiero) ? $financiero->plan_repuestos_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="plan_repuestos_total" value="{{ isset($financiero) ? $financiero->plan_repuestos_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('plan_repuestos') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="plan_repuestos_objetivo" value="{{ isset($financiero) ? $financiero->plan_repuestos_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('plan_repuestos') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('plan_repuestos') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Proveedores</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="proveedores_u" value="{{ isset($financiero) ? $financiero->proveedores_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="proveedores_total" value="{{ isset($financiero) ? $financiero->proveedores_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('proveedores') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="proveedores_objetivo" value="{{ isset($financiero) ? $financiero->proveedores_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('proveedores') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('proveedores') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cuenta Corriente venta Unidades $</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="venta_unidades_u" value="{{ isset($financiero) ? $financiero->venta_unidades_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="venta_unidades_total" value="{{ isset($financiero) ? $financiero->venta_unidades_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('venta_unidades') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="venta_unidades_objetivo" value="{{ isset($financiero) ? $financiero->venta_unidades_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('venta_unidades') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('venta_unidades') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cuenta Corriente venta Posventa $</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="venta_post_u" value="{{ isset($financiero) ? $financiero->venta_post_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="venta_post_total" value="{{ isset($financiero) ? $financiero->venta_post_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('venta_post') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="venta_post_objetivo" value="{{ isset($financiero) ? $financiero->venta_post_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('venta_post') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('venta_post') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Stock Fisico sin deuda 0km (U)</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="stock_sin_deuda_u" value="{{ isset($financiero) ? $financiero->stock_sin_deuda_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="stock_sin_deuda_total" value="{{ isset($financiero) ? $financiero->stock_sin_deuda_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('stock_sin_deuda') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="stock_sin_deuda_objetivo" value="{{ isset($financiero) ? $financiero->stock_sin_deuda_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('stock_sin_deuda') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('stock_sin_deuda') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Stock Fisico financiado 0km (U)</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="stock_financiado_u" value="{{ isset($financiero) ? $financiero->stock_financiado_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="stock_financiado_total" value="{{ isset($financiero) ? $financiero->stock_financiado_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('stock_financiado') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="stock_financiado_objetivo" value="{{ isset($financiero) ? $financiero->stock_financiado_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('stock_financiado') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('stock_financiado') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Stock Fisico usados (U)</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="stock_usados_u" value="{{ isset($financiero) ? $financiero->stock_usados_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="stock_usados_total" value="{{ isset($financiero) ? $financiero->stock_usados_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($financiero)
                                                    {!! $financiero->upDown('stock_usados') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="stock_usados_objetivo" value="{{ isset($financiero) ? $financiero->stock_usados_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedio('stock_usados') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($financiero)
                                                    {{ number_format($financiero->promedioMensual('stock_usados') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                               

                              
                                <div class="form-group">
                                    <button class="btn btn-primary">{{ isset($financiero) ? 'Actualizar' : 'Crear' }}</button>
                                </div>
                            </div>
                        </div>
                        <!--widget card ends-->
                    </form>
                </div>
                
            </div>


        </div>
    </section>

@endsection