<div class="row">
  <div class="col-4">
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

  <div class="col-4">
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

  <div class="col-4">
    <div class="form-group">
      {!! Form::label('color', 'Color') !!}
      {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

      @error('color')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
  </div>
</div>
