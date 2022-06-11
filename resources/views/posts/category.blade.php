<x-app-layout>

  <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
    <h1 class="uppercase text-center text-3xl font-bold">Categoría: {{ $category->name }}</h1>
    @if ( $posts->count() )

      @foreach ($posts as $post)
        <x-card-post :post="$post"/>
      @endforeach

      <div class="mt-4">
        {{ $posts->links() }}
      </div>
    @else
      <div class="text-center">
        We are sorry, but at this moment there aren't posts to show with this category
      </div>
    @endif
  </div>

</x-app-layout>