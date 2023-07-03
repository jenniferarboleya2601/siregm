<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('activo');
    }

    public function index()
    {
        return view('admin/usuarios/home');
    }

    public function listar()
    {
        $datos = User::All();
        echo json_encode($datos);
    }

    public function agregar(REQUEST $request)
    {
        $d = new User;
        $d->name = e($request->input('name'));
        $d->email = e($request->input('email'));
        $d->cargo = e($request->input('cargo'));
        $d->password = Hash::make($request->input('password'));
        $d->estado = e($request->input('estado'));

        if ($d->save()):
            echo 1;
        else:
            echo 0;
        endif;
    }

    public function cargarDatos(REQUEST $request)
    {
        $d = User::findOrFail($request->input('id'));
        echo json_encode($d);
    }

    public function deshabilitar(REQUEST $request)
    {
        $d = User::find($request->input('id'));
        $d->estado = 0;

        if ($d->save()):
            echo 1;
        else:
            echo 0;
        endif;
    }

    public function habilitar(REQUEST $request)
    {
        $d = User::find($request->input('id'));
        $d->estado = 1;

        if ($d->save()):
            echo 1;
        else:
            echo 0;
        endif;
    }

    public function actualizar(REQUEST $request)
    {
        $d = User::find($request->input('id'));
        $d->name = e($request->input('name'));
        $d->email = e($request->input('email'));
        $d->cargo = e($request->input('cargo'));
        $d->estado = e($request->input('estado'));
        if ($request->input('password')!="") {
            $d->password = Hash::make($request->input('password'));
        }

        if ($d->save()):
            echo 1;
        else:
            echo 0;
        endif;
    }

    public function eliminar(REQUEST $request)
    {
        $d = User::find($request->input('id'));
        if ($d->delete()):
            echo 1;
        else:
            echo 0;
        endif;
    }
}
