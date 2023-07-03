<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colaborador;
use DB, Auth;

class ColaboradorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('activo');
    }

    public function index()
    {
        $sql_e = DB::table('especialidads')
                ->select('id','nombre')
                ->get();

        $especialidades = array();
        foreach($sql_e as $d){
            $especialidades[] = array("id"=>$d->id, "text"=>htmlspecialchars_decode($d->nombre));
        }

        $sql_m = DB::table('municipios')
                ->select('municipios.id','municipios.nombre as municipio', 'provincias.nombre as provincia')
                ->join('provincias', 'municipios.prov_id', '=', 'provincias.id')
                ->get();

        $municipios = array();
        foreach($sql_m as $d){
            $municipios[] = array("id"=>$d->id, "text"=>htmlspecialchars_decode($d->provincia." - ".$d->municipio));
        }

        $sql_c = DB::table('centro_de_saluds')
                ->select('id','nombre')
                ->get();

        $centros = array();
        foreach($sql_c as $d){
            $centros[] = array("id"=>$d->id, "text"=>htmlspecialchars_decode($d->nombre));
        }

        $data=[
            'centros'=>$centros,
            'municipios'=>$municipios,
            'especialidades'=>$especialidades,
        ];

        return view('colaboradores/home',$data);
    }

    public function listar()
    {
        $datos = DB::table('colaboradores')
                    ->join('centro_de_saluds', 'colaboradores.centro', '=', 'centro_de_saluds.id')
                    ->select('colaboradores.id','colaboradores.nombre as nombre','colaboradores.apellidos','centro_de_saluds.nombre as centro')
                    ->get();
        //$datos = Colaborador::All();
        echo json_encode($datos);
    }

    public function agregar(REQUEST $request)
    {
        $d = new Colaborador;
        $d->nombre = e($request->input('nombre'));
        $d->apellidos = e($request->input('apellidos'));
        $d->ci = e($request->input('ci'));
        $d->sexo = e($request->input('sexo'));
        $d->direccion = e($request->input('direccion'));
        $d->municipio = e($request->input('municipio'));
        $d->centro = e($request->input('centro'));
        $d->especialidad = e($request->input('especialidad'));
        $d->jefe = Auth::user()->jefe_id;

        if ($d->save()):
            echo 1;
        else:
            echo 0;
        endif;
    }

    public function cargarDatos(REQUEST $request)
    {
        $d = Colaborador::findOrFail($request->input('id'));
        echo json_encode($d);
    }

    public function actualizar(REQUEST $request)
    {
        $d = Colaborador::find($request->input('id'));
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
        $d = Colaborador::find($request->input('id'));
        if ($d->delete()):
            echo 1;
        else:
            echo 0;
        endif;
    }
}
