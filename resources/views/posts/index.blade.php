<x-app-layout>
	<div class="container py-5">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
			@foreach($posts as $post)
				<article class="w-100 h-60 bg-cover bg-center @if($loop->first) md:col-span-2 @endif"
					style="background-image: url(@if($post->image) {{ Storage::url($post->image->url) }} @else https://images.pexels.com/photos/7292737/pexels-photo-7292737.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 @endif);">
					
					<div class="w-full h-full px-8 flex flex-col justify-center">
						<div>
							@foreach($post->tags as $tag)
								<div class="bg-{{ $tag->color }}-600 text-white inline-flex items-center justify-center px-2 py-1 mr-1 leading-none rounded-full">
									<a href="{{ route('posts.tag', $tag) }}">{{ $tag->name }}</a>
								</div>
							@endforeach
						</div>

						<h1 class="text-4xl text-white leading-8 font-bold mt-2"><a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a></h1>
					</div>
				</article>
			@endforeach
		</div>

		{{-- PAGINACIÓN --}}
		<div class="mt-4">
			{{ $posts->links() }}
		</div>
	</div>
</x-app-layout>
