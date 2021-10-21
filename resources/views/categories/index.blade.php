@extends('Layout/app')
    @section('content')
    <div class="container">
      <div class="row">
          <table class="table">
              <thead>
                  <tr>
                  <th>Clave</th>
                  <th>nombre</th>
                  <th>Opciones</th>
                  </tr>  
              </thead>
              <tbody>
                  @foreach($categories as $category)
                  <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input 
                            type="submit"
                            value="Eliminar" 
                            class="btn btn-sm btn-danger"
                            onClick="return confirm('estas seguro  a eliminar el registro?')">
                        </form>
                    </td>
                  </tr>
                  @endforeach
              </tbody>

          </table>
      </div>
  </div> 
    @endsection
  

  