<?php

namespace App\Http\Controllers;

use App\Models\MaquinaExpendedora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaquinaExpendedoraController extends Controller
{
    public function store(Request $request)
    {
// Validar los datos del formulario
        $request->validate([
            'nombre_empresa' => 'required',
            'latitud' => 'required',
            'longitud' => 'required',
            'calle' => 'required',
            'codigo_postal' => 'required',
            'foto_maquina' => 'required|image',
        ]);

        // Obtener el archivo de imagen
        $fotoMaquina = $request->file('foto_maquina');

        // Crear un nombre único para el archivo de imagen
        $nombreArchivo = uniqid('maquina_', true) . '.' . $fotoMaquina->getClientOriginalExtension();

        // Guardar la imagen en el bucket de S3
        Storage::disk('s3')->putFileAs('maquinas-expendedoras', $fotoMaquina, $nombreArchivo);

        // Obtener la URL de la imagen en el bucket de S3
        $urlImagen = Storage::disk('s3')->url('maquinas-expendedoras/' . $nombreArchivo);

        // Crear una nueva instancia del modelo MaquinaExpendedora
        $maquinaExpendedora = new MaquinaExpendedora();
        $maquinaExpendedora->nombre_empresa = $request->input('nombre_empresa');
        $maquinaExpendedora->latitud = $request->input('latitud');
        $maquinaExpendedora->longitud = $request->input('longitud');
        $maquinaExpendedora->calle = $request->input('calle');
        $maquinaExpendedora->codigo_postal = $request->input('codigo_postal');
        $maquinaExpendedora->url_imagen = $urlImagen;
        $maquinaExpendedora->save();

        // Redireccionar a la página de listado de máquinas expendedoras
        return redirect()->route('maquina-expendedora.index');
    }
}