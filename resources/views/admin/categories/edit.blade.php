@extends('adminlte::page')

@section('title', 'Editar categoría')

@section('content_header')
  <h1>Editar categoría</h1>
@endsection

@section('content')
  
  @if(session('info'))
    <div class="alert alert-success w-100">
      {{ session('info') }}
    </div>
  @endif

  <div class="card">
    <div class="card-body">
      {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              {!! Form::label('name', 'Nombre') !!}
              {!! Form::text('name', null, [
                'class' => 'form-control',
                'placeholder' => 'Ejemplo: Desarrollo web'
              ]) !!}

              @error('name')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              {!! Form::label('slug', 'Slug') !!}
              {!! Form::text('slug', null, [
                'class' => 'form-control',
                'placeholder' => 'Vista prvia del slug',
                'readonly'
              ]) !!}

              @error('slug')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-end">
          {!! Form::submit('Guardar ediciones', ['class' => 'btn btn-primary']) !!}
        </div>

      {!! Form::close() !!}
    </div>
  </div>
@endsection

@section('js')
  <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
  <script>
    $(document).ready( function() {
      $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
      });
    });
  </script> 
@endsection
