@props(['post'])

<article class="bg-white shadow-lg rounded-lg overflow-hidden">
	@if($post->image)
		<img class="w-full h-45 object-cover object-center" src="{{ Storage::url($post->image->url) }}">
	@else
		<img class="w-full h-45 object-cover object-center" src="https://images.pexels.com/photos/7292737/pexels-photo-7292737.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
	@endif

	{{-- Titulo y extracto --}}
	<div class="p-4">
		<h1 class="font-bold text-1xl mb-2">
			<a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
		</h1>
		<div class="text-gray-700 leading-5">
			<small>{!! $post->extract !!}</small>
		</div>
	</div>

	{{-- Etiquetas --}}
	<div class="px-4 pb-4">
		@foreach($post->tags as $tag)
			<a href="{{ route('posts.tag', $tag) }}" class="bg-{{ $tag->color }}-600 text-white text-sm px-3 inline-block rounded-full">{{ $tag->name }}</a>
		@endforeach
	</div>
</article>
