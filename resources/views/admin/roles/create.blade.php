@extends('adminlte::page')

@section('title', 'Crear nuevo rol')

@section('content_header')
  <h1>Crear nuevo rol</h1>
@endsection

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::open(['route' => 'admin.roles.store']) !!}
        
        @include('admin.roles.partials.form')

        {!! Form::submit('Crear rol', ['class' => 'btn btn-success']) !!}
      {!!  Form::close()!!}
    </div>
  </div>
@endsection