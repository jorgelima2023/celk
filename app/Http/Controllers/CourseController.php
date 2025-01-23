<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){   // listar os cursos
        $courses = Course::orderby('id', 'ASC')->get();
        return view('courses.index', ['courses' => $courses]);
    }

    public function show(Course $course){         
        return view('courses.show', ['course' => $course]);
    }

    public function create(){           // carregar o formulario cadastrar novo curso
        return view('courses.create');  // cadastrar o curso, view carregar o formulario
    }

    public function edit(Course $course){  // carregar o formulario editar curso
            // editar o curso, receber dados  do formulario
        return view('courses.edit', ['course' => $course]);
    }

    public function store(CourseRequest $request){   // cadastrar no banco de dados o novo curso
        $request->validate();   // validar o formulario  ,  cria e redireciona para view
       
        $course = Course::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return redirect()->route('courses.show', ['course' => $course->id])->with('success', 'Curso cadastrado com sucesso');
    }
    // public function update(Request $request, Course $course){
    public function update(CourseRequest $request, Course $course){   // recebe os dados do formulario
        //$request->validate();

        $course->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        // enviar uma msg na sessao como 'success'
        return redirect()->route('courses.show', ['course' => $course->id])->with('success', 'curso editado com sucesso');
    }
   
    public function destroy( Course $course){      // excluir o curso do banco de dados

        $course->delete();

        // redirecionar usuario, enviar msg de sucesso
        return redirect()->route('courses.index')->with('success', 'curso excluido com sucesso');

    }
}
