@extends('adminlte::page')

@section('title', 'Nueva etiqueta')

@section('content_header')
  <h1>Nueva etiqueta</h1>
@endsection

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::open(['route' => 'admin.tags.store']) !!}

        @include('admin.tags.partials.form')

        <div class="d-flex align-items-center justify-content-end">
          {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-success']) !!}
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
