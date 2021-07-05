<x-app-layout>
	<div class="container py-5">
		<h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>

		<div class="text-lg text-gray-500 mb-2">
			{!! $post->extract !!}
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
			
			{{-- CONTENIDO PRINCIPAL --}}
			<div class="lg:col-span-2">
				<figure>
					@if($post->image)
						<img class="w-full h-80 object-cover object-center"
							src="{{ Storage::url($post->image->url) }}" alt="Image of {{ $post->name }}">						
					@else
						<img class="w-full h-45 object-cover object-center" src="https://images.pexels.com/photos/7292737/pexels-photo-7292737.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
					@endif
				</figure>
				
				<div class="text-base text-gray-500 mt-5">
					{!! $post->body !!}
				</div>
			</div>

			{{-- CONTENIDO RELACIONADO --}}
			<aside>
				<h1 class="text-1xl font-bold text-gray-600 mb-4">Más en {{ $post->category->name }}</h1>
				<ul>
					@foreach($similares as $similar)
						<li class="mb-4">
							<a class="flex" href="{{ route('posts.show', $similar) }}">
								@if($similar->image)
									<img class="flex-initial w-36 h-20 object-center object-cover" src="{{ Storage::url($similar->image->url) }}" />
								@else
									<img class="flex-initial w-36 h-20 object-cover object-center" src="https://images.pexels.com/photos/7292737/pexels-photo-7292737.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
								@endif

								<span class="flex-1 ml-2 text-gray-600">{{ $similar->name }}</span>
							</a>
						</li>
					@endforeach
				</ul>
			</aside>
		</div>
	</div>
</x-app-layout>
