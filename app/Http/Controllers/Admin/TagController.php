<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODELOS
use App\Models\Tag;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.tags.index')->only('index');
        $this->middleware('can:admin.tags.create')->only('create', 'store');
        $this->middleware('can:admin.tags.edit')->only('edit', 'update');
        $this->middleware('can:admin.tags.destroy')->only('destroy');
    }

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        $colors = [
            'red' => 'Rojo',
            'yellow' => 'Amarillo',
            'green' => 'Verde',
            'blue' => 'Azul',
            'indigo' => 'Indigo',
            'purple' => 'Purpura',
            'pink' => 'Pink',
        ];

        return view('admin.tags.create', compact('colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'min:1'],
            'slug' => ['required', 'max:255', 'min:1', 'unique:tags'],
            'color' => ['required', 'max:50', 'min:1']
        ]);
        
        $tag = Tag::create($request->all());
        return redirect()
                ->route('admin.tags.edit', $tag)
                ->with('info', 'Etiqueta creada correctamente.');
    }

    public function edit(Tag $tag)
    {
        $colors = [
            'red' => 'Rojo',
            'yellow' => 'Amarillo',
            'green' => 'Verde',
            'blue' => 'Azul',
            'indigo' => 'Indigo',
            'purple' => 'Purpura',
            'pink' => 'Pink',
        ];

        return view('admin.tags.edit', compact('tag', 'colors'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'min:1'],
            'slug' => ['required', 'max:255', 'min:1', "unique:tags,slug,{$tag->id}"],
            'color' => ['required', 'max:50', 'min:1']
        ]);

        $tag->update($request->all());
        return redirect()
                ->route('admin.tags.edit', compact('tag'))
                ->with('info', 'Etiqueta editada correctamente.');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()
                ->route('admin.tags.index')
                ->with('info', 'Etiqueta eliminada correctamente.');
    }
}
