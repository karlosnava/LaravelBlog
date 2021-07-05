@extends('adminlte::page')

@section('title', 'Editar etiqueta')

@section('content_header')
  <h1>Editar etiqueta</h1>
@endsection

@section('content')
  
  @if(session('info'))
    <div class="alert alert-success w-100">
      {{ session('info') }}
    </div>
  @endif

  <div class="card">
    <div class="card-body">
      {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'PUT']) !!}

        @include('admin.tags.partials.form')

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
