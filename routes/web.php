<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//  routes/web.php file. exemplo:
// http://example.com/user in your browser:
// cursos

// CourseController
// get -> listar 
// post -> receber os dados do form cadastrar
// put  -> receber os dados do form editar
// delete -> apagar os dados

// criar metodos na controller: index, show, create, store, edit, update, destroy 

// pode ser colocado um nome para a rota, ex.: visualizar
//  ->name 'colocar o nome para a rota' pasta courses e nome rota 'show' 

// {course} eh o nome da model
// /show-course/{course}' 

Route::get('/index-course', [CourseController::class, 'index'])->name('courses.index'); // listar
Route::get('/show-course/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/create-course', [CourseController::class, 'create'])->name('courses.create');// carregar form cadastrar
Route::post('/store-course', [CourseController::class, 'store'])->name('courses.store'); // receber os dados do form 
Route::get('/edit-course/{course}', [CourseController::class, 'edit'])->name('courses.edit');    // carregar form e editar
Route::put('/update-course/{course}', [CourseController::class, 'update'])->name('courses.update');// receber dados form e editar
Route::delete('/destroy-course/{course}', [CourseController::class, 'destroy'])->name('courses.destroy'); // apagar dados
