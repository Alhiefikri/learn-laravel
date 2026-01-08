<x-layout>
  <x-slot:title>{{ $title }}</x-slot:tit>

  <article class="py-8 max-w-3xl">
    
    <h2 class="mb-1 text-3xl tracking-tight font-bold ">{{ $post['title'] }}</h2>
    <div class="">
      By
      <a  href="/authors/{{ $post->author->username}}" class="text-base text-gray-400 hover:underline">{{ $post->author->name}}</a> 
      in
       <a  href="/categories/{{ $post->category->slug}}" class="hover:underline text-base text-gray-400">{{ $post->category->name}}</a> 
       | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ $post['body']}}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">Back to post &laquo;</a>
  </article>

</x-layout>