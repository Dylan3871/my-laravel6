<?php

namespace App\Http\Controllers;
/* Mandamos a llamar el modelo category */
use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    /* vamos a obtener todas las categorua de nuestra base de datos ELOQUEN ORM
        Select * from categories  */
    public function index(){

        $categories = Category::all();
        return view('categories.index',[
        'categories'=> $categories
        ]);


    }
    /* insertar datos en la tabla category con el metodo create dentro de un array  */
    public function store(Request $request){
        Category::create([

            'name'=>$request->name
        ]);
        return back();

    }
    public function delete(Category $category){

        $category->delete();
        return back();


    }
}
