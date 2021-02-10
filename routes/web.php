<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\homeController::class, 'index'])->name('admin.index');

Route::get('/{id}/Producto', [App\Http\Controllers\Admin\homeController::class, 'verproducto'])->name('admin.verproducto');

Route::get('productos', [App\Http\Controllers\ProductosController::class, 'listarProd'])->name('admin.lista');

Route::get('agregar', [App\Http\Controllers\ProductosController::class, 'create'])->name('admin.agregar');

Route::post('productos', [App\Http\Controllers\ProductosController::class, 'guardarProd'])->name('admin.guardar');

Route::get('productos/{id}/editar', [App\Http\Controllers\ProductosController::class, 'editarprod'])->name('admin.editar');

Route::put('productos/{id}', [\App\Http\Controllers\ProductosController::class, 'actualizarProd'])->name('admin.actualizar');

Route::get('productos/{id}', [\App\Http\Controllers\ProductosController::class, 'buscarProd'])->name('admin.detalle');

Route::get('productos/{id}/eliminar', [\App\Http\Controllers\ProductosController::class, 'deleteProd'])->name('admin.delete');

Auth::routes();