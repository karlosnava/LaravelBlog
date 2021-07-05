<div class="form-group">
  <div class="row">
    <div class="col-4">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la publicación']) !!}

      @error('name')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="col-4">
      {!! Form::label('slug', 'Slug') !!}
      {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Vista previa del slug', 'readonly']) !!}

      @error('slug')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="col-4">
      {!! Form::label('category_id', 'Categoría') !!}
      {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

      @error('category_id')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
    <div class="col-6">
      <div><strong>Etiquetas</strong></div>
      @foreach($tags as $tag)
        <label class="mr-2">
          {!! Form::checkbox('tags[]', $tag->id, null) !!}
          {{ $tag->name }}
        </label>
      @endforeach
      
      @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="col-6">
      <div><strong>Estado</strong></div>
      <label class="mr-3">
        {!! Form::radio('status', 1, true) !!} Borrador
      </label>
      <label>
        {!! Form::radio('status', 2, false) !!} Publicado
      </label>

      @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>
</div>

<div class="row mb-3">
  <div class="col">
    <div class="image-wrapper">
      @isset($post->image)
        <img id="picture" src="{{ Storage::url($post->image->url) }}">
      @else
        <img id="picture" src="https://images.pexels.com/photos/7292737/pexels-photo-7292737.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
      @endisset
    </div>
  </div>
  
  <div class="col">
    <div class="form-group">
      {!! Form::label('file', 'Imagen de portada') !!}
      {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
    </div>
    @error('file')
      <small class="text-danger">{{ $message }}</small>
    @enderror

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, facere perferendis. Deserunt eius vitae dolorem veritatis esse magnam ea. Voluptates ea laborum harum iure soluta iste molestiae neque alias amet?</p>
  </div>
</div>

<div class="form-group">
  {!! Form::label('extract', 'Extracto') !!}
  {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

  @error('extract')
    <small class="text-danger">{{ $message }}</small>
  @enderror
</div>

<div class="form-group">
  {!! Form::label('body', 'Cuerpo de la publicación') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

  @error('body')
    <small class="text-danger">{{ $message }}</small>
  @enderror
</div>
