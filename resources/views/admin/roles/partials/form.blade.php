

<div class="form-group">
  {!! Form::label('name', 'Nombre', ['class' => 'label-control']) !!}
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del rol']) !!}

  @error('name')
    <small class="text-danger">{{ $message }}</small>
  @enderror
</div>

<div class="form-group">
  @foreach($permissions as $permission)
    <div>
      <label>
        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-2']) !!}
        {{ $permission->description }}
      </label>
    </div>
  @endforeach
</div>
