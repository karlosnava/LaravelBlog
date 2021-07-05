@extends('adminlte::page')

@section('title', 'Editar rol')

@section('content_header')
  <h1>Editar rol</h1>
@endsection

@section('content')
  @if(session('info'))
    <div class="alert alert-success w-100">{{ session('info') }}</div>
  @endif

  <div class="card">
    <div class="card-body">
      {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'PUT']) !!}
        
        @include('admin.roles.partials.form')

        {!! Form::submit('Actualziar rol', ['class' => 'btn btn-success']) !!}
      {!!  Form::close()!!}
    </div>
  </div>
@endsection