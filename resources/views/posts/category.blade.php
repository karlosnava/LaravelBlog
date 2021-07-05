<x-app-layout>
	<div class="container py-5">
		<h1 class="uppercase text-center text-3xl font-bold">Categoria: {{ $category->name }}</h1>

		<div class="grid grid-cols-4 gap-2 mt-5">
			@foreach($posts as $post)
				<x-card-post :post="$post" />
			@endforeach
		</div>

		{{-- Paginación --}}
		<div class="mt-5">{{ $posts->links() }}</div>
	</div>
</x-app-layout>
