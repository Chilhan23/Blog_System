<x-layout :title="$title">
        {{-- <article class="py-8 max-w-3xl ">
             <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
          <div class="text-base text-gray-500">
                 <a href="/authors/{{ $post->Author->username }}" class="hover:underline">{{ $post->Author->name }}</a> | {{ $post['created_at'] }}
          </div>
          <p class="my-4 font-light">{{ $post['body'] }}</p>
         <a href="/posts" class="font-medium text-blue-500 hover:underline">Back To All Blogs &raquo;</a>
     </article> --}}

     <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white  antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
     
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          
          <header class="my-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->Author->username }}">
                      <div>
                          <a href="/posts?author={{ $post->Author->username }}" rel="author" class="text-xl font-bold text-gray-900">{{ $post->Author->name }}</a>
                           <a href="/posts?category={{ $post->Category->slug }}" class=" text-gray-600 hover:underline">
                              <p class="{{ $post->Category->color }} text-base text-gray-900">{{ $post->Category->name }}</p>
                           </a>
                          <p class="text-base text-gray-500 "><time pubdate datetime="2022-02-08" title="{{ $post->created_at->diffForHumans() }}}">{{ $post->created_at->diffForHumans() }}</time></p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl text-blue-600">{{ $post['title'] }}</h1>
          </header>
          <p>{{ $post['body'] }}</p>
              <a href="/posts" class="font-medium text-sm text-blue-500 hover:underline">Back To All Blogs &raquo;</a>
      </article>
  </div>
</main>
     
   
</x-layout>
