<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Pais;
use App\Models\Parroquia;
use App\Models\Status;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TicketsController extends Controller
{


    public function index()
    {
        $parroquias = Parroquia::all();
        $paises = Pais::all();
        $estados = Estado::all();
        $municipios = Municipio::all();

        return view('tickets.create', compact('parroquias', 'paises', 'estados', 'municipios'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'asunto' => 'required|string',
                'descripcion' => 'required|string',
                'parroquia_id' => 'required|exists:parroquias,id',
                // Añade más validaciones según tus necesidades
            ]);

            $user_id = auth()->user()->id;

            // Crear un nuevo ticket con los datos del formulario
            $ticket = Ticket::create([
                'asunto' => $request->input('asunto'),
                'descripcion' => $request->input('descripcion'),
                'parroquia_id' => $request->input('parroquia_id'),
                'user_id' => $user_id,
                'status_id' => 1,
            ]);

            // Puedes hacer redirección, mostrar un mensaje de éxito, etc.
            return redirect()->route('dashboard')->with('success', 'Ticket creado exitosamente');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'No se encontró el modelo especificado.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado.');
        }
    }

    public function editStatus($id)
    {
        // Obtén todos los estados disponibles
        // Buscar el ticket por su ID
        $ticket = Ticket::find($id);

        if (!$ticket) {
            // Manejar el caso en el que el ticket no se encuentra
            abort(404, 'Ticket no encontrado');
        }

        // Obtener todos los estados disponibles
        $statuses = Status::all();

        return view('tickets.edit', compact('ticket', 'statuses'));
    }

    public function updateStatus(Request $request, Ticket $ticket)
    {
        $request->validate([
            'status_id' => 'required|in:1,2,3',
        ]);

        $ticket->update([
            'status_id' => $request->status_id,
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Estado del ticket actualizado correctamente.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Ticket eliminado correctamente.');
    }
}
