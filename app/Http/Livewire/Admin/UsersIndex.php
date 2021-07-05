<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\User;
use Livewire\withPagination;

class UsersIndex extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch(){ $this->resetPage(); }

    public function render()
    {
        $users = User::where('name', 'LIKE', '%'. $this->search .'%')
                    ->orWhere('email', 'LIKE', '%'. $this->search .'%')
                    ->paginate();

        return view('livewire.admin.users-index', compact('users'));
    }
}
