@props(['post'])
<article class="mb-6 bg-white shadow-lg rounded-lg overflow-hidden">
  @if ( $post->image )
    <img class="w-full h-72 object-cover object-center" src="{{Storage::url( $post->image->url )}}" alt="{{$post->name}}">
  @else
    <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/01/22/09/42/buildings-6956678_960_720.jpg" alt="">

  @endif
  <div class="px-6 py-8">
    <h1>
      <a class="font-bold text-xl mb-2" href="{{ route('posts.show', $post )}}">
        {{ $post->name }}
      </a>
    </h1>
    <div class="text-gray-700 text-base">
      {!!$post->extract!!}
    </div>
    <div class="pt-4 pb-2">
      @foreach ($post->tags as $tag)
        <a href="{{ route('posts.tag', $tag)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2" href="">{{ $tag->name }}</a>
      @endforeach
    </div>
  </div>
</article>