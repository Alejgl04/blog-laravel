<x-app-layout>

  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8 py-8">
    <h1 class="text-4xl font-bold text-gray-600"> {{ $post->name }} </h1>
    <div class="text-lg text-gray-500 mb-2">
      {{ $post->extract }}
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      {{-- contenido principal --}}
      <div class="lg:col-span-2">
        <figure>
          <img class="w-full h-80 object-cover object-center " src="{{Storage::url( $post->image->url )}}" alt="{{ $post->name }}">
        </figure>
        <div class="text-base text-gray-500 mt-4">
          {{ $post->body }}
        </div>
      </div>
      {{-- contenido relacionado --}}
      <aside>
        <h1 class="text-2x1 font-bold text-gray-600 mb-4">Más en {{ $post->category->name }} </h1>
        <ul>
          @foreach ( $equalPost as $postes )
            <li class="mb-4">
              <a href="{{ route('posts.show', $postes) }}" class="flex">
                <img class="w-36 h-20 object-cover object-center" src="{{Storage::url( $postes->image->url )}}" alt="{{ $postes->name }}">
                <span class="ml-2 text-gray-600"> {{ $postes->name }} </span>
              </a>  
            </li>   
          @endforeach
        </ul>
      </aside>
    </div>
  </div>

</x-app-layout>