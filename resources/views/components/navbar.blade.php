<nav class="bg-gray-800" x-data="{ mobileMenuOpen: false, profileOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="/linux.png" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
            
              <x-nav-link href="{{ route('home') }}" :current="request()->is('/')"> Home </x-nav-link>
              <x-nav-link href="{{ route('blog') }}" :current="request()->is('posts')"> Blogs </x-nav-link>
              <x-nav-link href="{{ route('about') }}" :current="request()->is('about')"> About</x-nav-link>
              <x-nav-link href="{{ route('contact') }}" :current="request()->is('contact')">  Contact</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <div class="relative ml-3">
              <button @click="profileOpen = !profileOpen" type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <img class="size-8 rounded-full" src="/linux.png" alt="" />
              </button>

              <div x-show="profileOpen" @click.away="profileOpen = false" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
              </div>
            </div>
          </div>
        </div>

        <div class="-mr-2 flex md:hidden">
          <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <svg x-show="!mobileMenuOpen" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
            <svg x-show="mobileMenuOpen" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
          </button>
        </div>
      </div>
    </div>

    <div x-show="mobileMenuOpen" class="md:hidden">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
       <x-nav-link href="{{ route('home') }}" :current="request()->is('/')" class="block"> Home </x-nav-link>
              <x-nav-link href="{{ route('blog') }}" :current="request()->is('blogs')" class="block"> Blogs </x-nav-link>
              <x-nav-link href="{{ route('about') }}" :current="request()->is('about')" class="block"> About</x-nav-link>
              <x-nav-link href="{{ route('contact') }}" :current="request()->is('contact')" class="block">  Contact</x-nav-link>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="/linux.png" alt="" />
          </div>
          <div class="ml-3">
            <div class="text-base font-medium text-white">Rayhan Ramadhan</div>
            <div class="text-sm font-medium text-gray-400">Rayhan@gmail.com</div>
          </div>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
        </div>
      </div>
    </div>
  </nav>