<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Reporte;
use DB;

class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('agregar');
        $this->middleware('activo')->except('agregar');
    }

    public function index()
    {
        $sql_m = DB::table('municipios')
                ->select('municipios.id','municipios.nombre as municipio', 'provincias.nombre as provincia')
                ->join('provincias', 'municipios.prov_id', '=', 'provincias.id')
                ->get();

        $municipios = array();
        foreach($sql_m as $d){
            $municipios[] = array("id"=>$d->id, "text"=>htmlspecialchars_decode($d->provincia." - ".$d->municipio));
        }

        $data=[
            'municipios'=>$municipios,
        ];

        return view('reportes/home',$data);
    }

    public function listar()
    {
        $datos = DB::table('reportes')
                    ->select('reportes.id','reportes.nombre','reportes.direccion', 'municipios.nombre as municipio')
                    ->join('municipios', 'reportes.municipio', '=', 'municipios.id')
                    ->get();
        //$datos = Reporte::All();
        echo json_encode($datos);
    }

    public function agregar(REQUEST $request)
    {
        $d = new Reporte;
        $d->nombre = e($request->input('nombre'));
        $d->direccion = e($request->input('direccion'));
        $d->tipo = e($request->input('tipo'));
        $d->telefono = e($request->input('telefono'));
        $d->municipio = e($request->input('municipio'));
        $d->detalle = e($request->input('detalle'));
        $d->estado = 0;

        if ($d->save()):
            echo $d->id;
        else:
            echo 0;
        endif;
    }

    public function cargarDatos(REQUEST $request)
    {
        $d = Reporte::findOrFail($request->input('id'));
        echo json_encode($d);
    }

    public function actualizar(REQUEST $request)
    {
        $d = Reporte::find($request->input('id'));
        $d->nombre = e($request->input('nombre'));
        $d->apellidos = e($request->input('apellidos'));
        $d->ci = e($request->input('ci'));
        $d->sexo = e($request->input('sexo'));
        $d->direccion = e($request->input('direccion'));
        $d->municipio = e($request->input('municipio'));
        $d->centro = e($request->input('centro'));
        $d->especialidad = e($request->input('especialidad'));

        if ($d->save()):
            echo 1;
        else:
            echo 0;
        endif;
    }

    public function eliminar(REQUEST $request)
    {
        $d = Reporte::find($request->input('id'));
        if ($d->delete()):
            echo 1;
        else:
            echo 0;
        endif;
    }
}
