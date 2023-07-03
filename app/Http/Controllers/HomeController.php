<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('activo')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

        return view('welcome',$data);
    }

    public function home()
    {
        return view('home');
    }
}
