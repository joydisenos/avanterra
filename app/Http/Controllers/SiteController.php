<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comercial;
use App\Financiero;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('index');
    }

    // Comercial 
    public function comercial()
    {
        $comerciales = Comercial::orderBy('id' , 'DESC')->get();

        return view('comercial.lista' , compact('comerciales'));
    }

    public function comercialCrear()
    {
        return view('comercial.editar');
    }

    public function comercialEditar($id)
    {
        $comercial = Comercial::findOrFail($id);

        return view('comercial.editar' , compact('comercial'));
    }

    public function comercialCargar(Request $request)
    {
        $data = $request->except('_token');

        $comercial = Comercial::create($data);

        return redirect()->route('comercial')->with('status','Comercial Creado');
    }

    public function comercialActualizar(Request $request , $id)
    {
        $data = $request->except('_token');

        $comercial = Comercial::findOrFail($id)->update($data);

        return redirect()->route('comercial')->with('status','Comercial Actualizado');
    }

    //financiero
    public function financiero()
    {
        $financieros = Financiero::orderBy('id' , 'DESC')->get();

        return view('financiero.lista' , compact('financieros'));
    }

    public function financieroCrear()
    {
        return view('financiero.editar');
    }

    public function financieroEditar($id)
    {
        $financiero = Financiero::findOrFail($id);

        return view('financiero.editar' , compact('financiero'));
    }

    public function financieroCargar(Request $request)
    {
        $data = $request->except('_token');

        $financiero = Financiero::create($data);

        return redirect()->route('financiero')->with('status','financiero Creado');
    }

    public function financieroActualizar(Request $request , $id)
    {
        $data = $request->except('_token');

        $financiero = Financiero::findOrFail($id)->update($data);

        return redirect()->route('financiero')->with('status','financiero Actualizado');
    }
}
