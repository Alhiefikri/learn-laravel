<x-layout>
  <x-slot:title>{{ $title }}</x-slot:tit>

  <article class="py-8 max-w-3xl">
    
    <h2 class="mb-1 text-3xl tracking-tight font-bold ">{{ $post['title'] }}</h2>

    <div class="text-base text-gray-300">
      <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ $post['body']}}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">Back to post &laquo;</a>
  </article>

</x-layout>