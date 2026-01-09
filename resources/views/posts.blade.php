<x-layout>
    <x-slot:title>{{ $title }}</x-slot:tit>

   <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Search Our Blog</h2>
            <p class="mt-4 text-lg leading-8 text-gray-300">Find articles, tutorials, and insights from our agile team.</p>
            
            <form class="mt-10">
                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                

                <div class="relative mx-auto flex max-w-md gap-x-4">
                    <label for="search" class="sr-only">Search articles</label>
                    
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <input id="search" name="search" type="text" value="{{ request('search') }}"
                        placeholder="Search for topics..." autocomplete="off"
                        class="block w-full rounded-md border-0 bg-white/5 py-3 pl-10 pr-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" />
                    
                    <button type="submit"
                        class="flex-none rounded-md bg-indigo-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


    <div class="py-4 px-4 mx-auto max-w-7xl lg:py-8 lg:px-0">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Blog
            </h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test
                assumptions and connect with the needs of your audience early and often.</p>
        </div>
        <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
            @forelse ($posts as $post)
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/posts?category={{ $post->category->slug }}">
                            <span
                                class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-bg-{{ $post->category->color }}-100 dark:text-primary-800">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>

                    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $post['title'] }}
                        </h2>
                    </a>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body']), 150 }}</p>
                    <div class="flex justify-between items-center">
                        <a href="/posts?author={{ $post->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img class="w-7 h-7 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                    alt="{{ $post->author->name }}" />
                                <span class="font-medium text-xs dark:text-white">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                        </a>
                        <a href="/posts/{{ $post['slug'] }}"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                @empty
                <div class="">
                <p class="font-semibold text-xl my-4">No posts found</p>
                    
              
                <a href="/posts" class="block text-blue-600 hover:underline">&laquo; Back to all posts</a>
  </div>
            @endforelse
        </div>
    </div>

</x-layout>
