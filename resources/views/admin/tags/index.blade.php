@extends('adminlte::page')

@section('title', 'Etiquetas')

@section('content_header')
  <h1>Etiquetas</h1>
@endsection

@section('content')
  
  @if(session('info'))
    <div class="alert alert-success w-100">
      {{ session('info') }}
    </div>
  @endif

  <div class="card">
    @can('admin.tags.create')
      <div class="card-header">
        <a href="{{ route('admin.tags.create') }}" class="btn btn-success">Nueva etiqueta</a>
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
          @foreach($tags as $tag)
            <tr>
              <td>{{ $tag->id }}</td>
              <td>{{ $tag->name }}</td>
              
              {{-- Botones --}}
              <td width="10px">
                @can('admin.tags.edit')
                  <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-sm btn-primary">Editar</a>
                @endcan
              </td>

              <td width="10px">
                @can('admin.tags.destroy')
                  <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
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
