<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
   protected $guarded = [];
   
   //protected $fillable = ['nombre_Prod', 'descripcion', 'precio', 'stock', 'categoria', 'imagen'];

   public function categorias(){
       return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
   }
}
