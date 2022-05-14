<x-app-layout>

  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($posts as $post)
        <article class="w-full h-80 bg-cover bg-center @if ( $loop->first ) md:col-span-2 @endif" 
                 style="background-image: url(@if ( $post->image ) {{Storage::url( $post->image->url )}} @else https://cdn.pixabay.com/photo/2022/01/22/09/42/buildings-6956678_960_720.jpg @endif)">

          <div class="w-full h-full px-4 flex flex-col justify-center">
            <div>
              @foreach ($post->tags as $tag)
                <a href="{{ route('posts.tag', $tag)}}" class="inline-block px-4 h-6 bg-{{ $tag->color }}-600 text-white">
                  {{ $tag->name }}
                </a>                  
              @endforeach
            </div>
            <h1 class="text-white text-4xl leading-7 font-bold mt-4">
              <a href="{{ route('posts.show', $post) }}">
                {{ $post->name }}
              </a>
            </h1>
          </div>
        </article>
      @endforeach
    </div>
    <div class="mt-4">
      {{$posts->links()}}
    </div>
  </div>

</x-app-layout>