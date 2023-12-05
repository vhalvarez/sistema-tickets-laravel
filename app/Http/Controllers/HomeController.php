<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Verificar si el usuario tiene el rol de Admin
        if (Auth::user()->hasRole('Admin')) {
            // Obtener todos los tickets para el admin
            // $tickets = Ticket::with(['usuario', 'status', 'parroquia' => function ($query) {
            //     $query->with(['pais', 'estado', 'municipio']);
            // }])->get();
            $tickets = DB::table('tickets')
                ->join('users', 'tickets.user_id', '=', 'users.id')
                ->join('statuses', 'tickets.status_id', '=', 'statuses.id')
                ->join('parroquias', 'tickets.parroquia_id', '=', 'parroquias.id')
                ->join('pais', 'parroquias.pais_id', '=', 'pais.id')
                ->join('estados', function ($join) {
                    $join->on('parroquias.estado_id', '=', 'estados.id')
                        ->on('parroquias.pais_id', '=', 'estados.pais_id');
                })
                ->join('municipios', function ($join) {
                    $join->on('parroquias.municipio_id', '=', 'municipios.id')
                        ->on('parroquias.estado_id', '=', 'municipios.estado_id')
                        ->on('parroquias.pais_id', '=', 'municipios.pais_id');
                })
                ->select(
                    'tickets.id',
                    'tickets.asunto',
                    'tickets.descripcion',
                    'users.name',
                    'users.email',
                    'statuses.nombre as status_nombre',
                    'parroquias.nombre as parroquia_nombre',
                    'pais.nombre as pais_nombre',
                    'estados.nombre as estado_nombre',
                    'municipios.nombre as municipio_nombre'
                )
                ->get();
        } else {
            // Obtener los tickets del usuario logeado
            $tickets = $request->user()->tickets;
        }



        // Resto del código...

        return view('dashboard', compact('tickets'));
    }
}
