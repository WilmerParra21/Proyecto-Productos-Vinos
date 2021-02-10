<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use Illuminate\Http\Request;

class homeController extends Controller
{
   public function index(){

      $producto = Productos::orderBy('nombre_Prod')->paginate(2);

      return view('admin.inicio', compact('producto'));
   }

   public function verProducto($id){

   	 $producto = Productos::find($id);

   	return view('admin.verproducto', compact('producto'));
   }
}
