<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\DB;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Validator; // Import for validation


class PublicacionController extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $publicaciones = Publicacion::where('titulo', 'LIKE', '%'.$texto.'%')
            ->orderBy('titulo', 'asc')
            ->paginate(10);

        return view('admin.admin', compact('publicaciones', 'texto'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria' => 'required|max:50',
            'titulo' => 'required|max:255',
            // Asegúrate de agregar validaciones para los demás campos si es necesario
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
    
        $image = $request->file('image');
        $uploadResult = Cloudinary::upload($image->getRealPath(), [
            'folder' => 'publicaciones', // Ajusta esta carpeta según tu configuración
        ])->getSecurePath();
    
    
        $publicacion = new Publicacion;
        $publicacion->categoria = $request->input('categoria');
        $publicacion->ruta_imagen = $uploadResult; // Aquí guardamos la ruta de la imagen
        $publicacion->titulo = $request->input('titulo');
        $publicacion->mini_descripcion = $request->input('mini_descripcion');
        $publicacion->descripcion = $request->input('descripcion');
        $publicacion->descripcion2 = $request->input('descripcion2');
        $publicacion->visitas = $request->input('visitas');
        $publicacion->redactor = $request->input('redactor');
        $publicacion->save();
    
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        return view('admin.edit', compact('publicacion'));
    }

    public function update(Request $request, $id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->categoria = $request->input('categoria');
        $publicacion->ruta_imagen = $request->input('ruta_imagen');
        $publicacion->titulo = $request->input('titulo');
        $publicacion->mini_descripcion = $request->input('mini_descripcion');
        $publicacion->descripcion = $request->input('descripcion');
        $publicacion->descripcion2 = $request->input('descripcion2');
        $publicacion->visitas = $request->input('visitas');
        $publicacion->redactor = $request->input('redactor');
        $publicacion->save();

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        Publicacion::destroy($id);
        return redirect()->route('admin.index');
    }
}
