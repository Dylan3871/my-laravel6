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
    public function store(){


    }
    public function delete(){


    }
}
