@extends('Layout/app')
@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                <th>Clave</th>
                <th>nombre</th>
                <th>email</th>
                <th>opiones</th>
                </tr>  
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <form action="{{ route('user.destroy', $user) }}" method="POST">
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
  