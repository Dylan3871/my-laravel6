<?php
namespace App\Http\Controllers;
/* Mandamos a llamar el modelo category */
use App\category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    use SoftDeletes;
    //
    /* vamos a obtener todas las categorua de nuestra base de datos ELOQUEN ORM
    Select * from categories  */
    public function index(){

        $categories = Category::latest()->paginate(25);
        //return $categories;
        return view('categories.index',[
        'categories'=> $categories
        ]);
    }
    /* insertar datos en la tabla category con el metodo create dentro de un array  */
    public function store(Request $request){
        Category::create([
            'name'=>$request->name
        ]);
        return redirect('/category')->with('mesage', 'la categoria se ha agregado exitosamente!');
        
    }
    
    /* Updete Category */
        public function edit($id){
            $categery = Category::findOrFaild($id);
    

            return view('category/', compact('category','user'));
            
        }
    /* eliminacion de */
    public function delete(Category $category){
        
        $category->delete();
        return redirect('/category')->with('mesageDelete', 'la categoria se ha eliminado exitosamente!');
        
        
        
        }
    } 
