@extends('adminlte::page')

@section('title', 'Lista de usuarios')

@section('content_header')
  <h1>Lista de usuarios</h1>
@endsection

@section('content')
  @livewire('admin.users-index')
@endsection
