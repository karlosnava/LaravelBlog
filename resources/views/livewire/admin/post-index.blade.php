<div class="card">
  <div class="card-header">
    <input wire:model="search" type="text" placeholder="Buscar publicación" class="form-control">
  </div>

  @if($posts->count())
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th colspan="2"></th>
          </tr>
        </thead>

        <tbody>
          @foreach($posts as $post)
            <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->name }}</td>
              <td width="10px"><a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-primary">Editar</a></td>
              <td width="10px">
                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="card-footer">{{ $posts->links() }}</div>
  @else
    <div class="text-center text-secondary py-3 w-100">
      <div>No hay publicaciones.</div>
      <a href="{{ route('admin.posts.create') }}" class="btn btn-success mt-3">Crear nueva</a>
    </div>
  @endif
</div>
