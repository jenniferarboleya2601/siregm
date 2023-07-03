<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Municipio;
use DB;

class MunicipioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('activo');
    }

    public function index()
    {
        return view('nomencladores/municipios/home');
    }

    public function listar()
    {
        $datos = DB::table('municipios')
                    ->join('provincias', 'municipios.prov_id', '=', 'provincias.id')
                    ->select('municipios.id','municipios.nombre as municipio','provincias.nombre as provincia')
                    ->get();
        //$datos = Municipio::All();
        echo json_encode($datos);
    }

    public function agregar(REQUEST $request)
    {
        $d = new Municipio;
        $d->nombre = e($request->input('nombre'));
        $d->prov_id = e($request->input('prov_id'));
        $d->codigo = e($request->input('codigo'));

        if ($d->save()):
            echo 1;
        else:
            echo 0;
        endif;
    }

    public function cargarDatos(REQUEST $request)
    {
        $d = Municipio::findOrFail($request->input('id'));
        echo json_encode($d);
    }

    public function actualizar(REQUEST $request)
    {
        $d = Municipio::find($request->input('id'));
        $d->nombre = $request->input('nombre');
        $d->prov_id = e($request->input('prov_id'));
        $d->codigo = e($request->input('codigo'));

        if ($d->save()):
            echo 1;
        else:
            echo 0;
        endif;
    }

    public function eliminar(REQUEST $request)
    {
        $d = Municipio::find($request->input('id'));
        if ($d->delete()):
            echo 1;
        else:
            echo 0;
        endif;
    }
}
