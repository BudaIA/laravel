<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCursos;
use App\Models\Curso;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCursos $request)
    {
        
    /*     $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        // Para crear de manera masiva
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);

        // return $request->all();
    }

    public function show($id){
        //compact('curso'); --> esta es otra manera de enviar las
        // return view('cursos.show',compact(''curso));
        $curso = Curso::find($id);

        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){      

        return view('cursos.edit',compact('curso'));

    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);
        
        /* $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        $curso->update($request->all());

        return redirect()->route('cursos.show',$curso->id);       
    }

    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');

    }
}
