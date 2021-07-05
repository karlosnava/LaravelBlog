@extends('adminlte::page')

@section('title', 'Publicaciones')

@section('content_header')
  <div class="d-flex align-items-center justify-content-between">
    <h1>Publicaciones</h1>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Nueva publicación</a>
  </div>
@endsection

@section('content')
  @if(session('info'))
    <div class="alert alert-success w-100">
      {{ session('info') }}
    </div>
  @endif

  @livewire('admin.post-index')
@endsection
