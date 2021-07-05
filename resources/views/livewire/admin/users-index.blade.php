<div>
  <div class="card">
    <div class="card-header">
      <input wire:model="search" type="text" class="form-control" placeholder="Buscar usuario">
    </div>

    @if($users->count())
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td width="10px">
                  <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-primary">Editar</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">{{ $users->links() }}</div>
    @else
      <span class="text-danger text-center my-4 w-100">No hay registros.</span>
    @endif
  </div>
</div>
