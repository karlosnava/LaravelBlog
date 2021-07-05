@extends('adminlte::page')

@section('title', 'Lista de roles')

@section('content_header')
  <a href="{{ route('admin.roles.create') }}" class="btn btn-sm btn-success float-right">Crear nuevo rol</a>
  <h1>Lista de roles</h1>
@endsection

@section('content')
  @if(session('info'))
    <div class="alert alert-success w-100">{{ session('info') }}</div>
  @endif

  <div class="card">    
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Rol</th>
            <th colspan="2"></th>
          </tr>
        </thead>

        <tbody>
          @foreach($roles as $role)
            <tr>
              <td>{{ $role->id }}</td>
              <td>{{ $role->name }}</td>
              <td width="10px">
                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-primary">Editar</a>
              </td>
              <td width="10px">
                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
