<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoPost;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function __construct(){

        $this->middleware(['auth', 'rol:Administrador'])->except('listarProd', 'buscarProd');
    }
    
    public function listarProd()
    {
        $producto = Productos::orderBy('created_at', 'DESC')->paginate(3);

        return view('admin.lista', compact('producto'));
    }


    public function create()
    {
        return view('admin.agregar');
    }

//  request  / validar 
    public function guardarProd(ProductoPost $validar){

$producto = (new Productos)->fill($validar->validated());

if($validar->hasFile('imagen')){
    $producto['imagen']=$validar->file('imagen')->store('public');
}
$producto->save();

  return redirect()->route('admin.lista')->with('guardar', 'Se ha Agregado Correctamente');
    }


    public function buscarProd($id)
    {
        $producto = Productos::find($id);

        return view('admin.detalle', compact('producto'));
    }


    public function editarProd($id)
    {
        $producto = Productos::find($id);

        return view('admin.editar', compact('producto'));
    }


    public function actualizarProd(ProductoPost $request, $id)
    {
        $producto = Productos::find($id);
       
      if($request->hasFile('imagen')){
        
        $producto['imagen']=$request->file('imagen')->store('public');
        }
        $producto->update($request->validated());

        return redirect()->route('admin.lista')->with('modificar', 'Se ha Actualizado Correctamente');
    }

    
    public function deleteProd($id)
    {
        $producto = Productos::find($id);
        $producto->delete();
        
        return redirect()->route('admin.lista')->with('eliminar', 'Se ha Eliminado Correctamente');
    
    }
}
