<x-layout :title="$title">



<div class="py-4 px-4 mx-auto max-w-7xl lg:px-6">
<form class="mb-8 max-w-md mx-auto">   
  @if (request('category'))
    <input type="hidden" name="category" value="{{ request('category') }}">
  @endif
  @if (request('author'))
    <input type="hidden" name="author" value="{{ request('author') }}">
  @endif
    <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="search" class="block w-full p-3 ps-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm placeholder-gray-400" placeholder="Search post title..." autocomplete="off" autofocus name="keyword" />
        
        <button type="submit" class="absolute end-2 bottom-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 focus:outline-none">
            Search
        </button>
    </div>
</form>

      {{ $posts->links() }}
      <div class="mt-4 grid gap-8 lg:grid-cols-3 md:grid-cols-2">
        @forelse ( $posts as $post )
          <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                <a href="/posts?category={{ $post->Category->slug }}" class=" text-gray-600 hover:underline">
                  <span class="{{ $post->Category->color }} text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                      {{ $post->Category->name }}
                  </span>
                  </a>
                  <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
              <p class="mb-5 font-light text-gray-500">{{ Str::limit($post['body'],40) }}</p>
              <div class="flex justify-between items-center">
                  <div class="flex items-center space-x-4">
                      <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->Author->name }}" />
                      <a href="/posts?author={{ $post->Author->username }}" class=" text-gray-900 hover:underline ">
                      <span class="font-medium text-sm">
                         {{ $post->Author->name }}
                      </span>
                      </a> 
                  </div>
                  <a href="/posts/{{ $post['slug'] }}" class="inline-flex text-sm items-center font-medium text-primary-600 hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </article>  
          @empty
          <div>
            <p class="font-semibold text-xl my-4">Article not found</p>
            <a href="/posts" class="block text-blue-500 hover:underline">&laquo; Back To All Post</a>
          </div>
        @endforelse
      </div>  
  </div>

    
     
   
</x-layout>
