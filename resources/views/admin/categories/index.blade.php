@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
  <h1>Categorías</h1>
@endsection

@section('content')
  
  @if(session('info'))
    <div class="alert alert-success w-100">
      {{ session('info') }}
    </div>
  @endif

  <div class="card">
    @can('admin.categories.create')
      <div class="card-header">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Nueva categoría</a>
      </div>
    @endcan
    
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th colspan="2"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              
              {{-- Botones --}}
              <td width="10px">
                @can('admin.categories.edit')
                  <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-primary">Editar</a>
                @endcan
              </td>

              <td width="10px">
                @can('admin.categories.destroy')
                  <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                  </form>
                @endcan
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
@endsection
