<nav class="bg-gray-800" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-center">
        <div class="flex items-center">
          <a href="#skill" class="mt-0 px-6 py-3 text-lg bg-white-600 text-white rounded-lg hover:bg-blue-700 transition-all">
            Explore My Work →
        </a>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
             <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
             <x-nav-link href="/about" :active="request()->is('about')">Tentang</x-nav-link>
             <x-nav-link href="/skill" :active="request()->is('skill')">Skill</x-nav-link>
             <x-nav-link href="pengalaman" :active="request()->is('pengalaman')">Pengalaman</x-nav-link>
             <x-nav-link href="/pendidi" :active="request()->is('pendidi')">Pendidikan</x-nav-link>
             <x-nav-link href="/sertif" :active="request()->is('sertif')">Sertifikat</x-nav-link>
             <x-nav-link href="/projek" :active="request()->is('projek')">My Project</x-nav-link>
             <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
          </div>
        </div>
       
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg 
            :class="{'hidden ': isOpen, 'block': !isOpen 'bg-gray-200': !isOn }"
            class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg 
             :class="{'block ': isOpen, 'hidden': !isOpen 'bg-gray-200': !isOn }"
            class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">Tentang</x-nav-link>
        <x-nav-link href="/skill" :active="request()->is('skill')">Skill</x-nav-link>
        <x-nav-link href="pengalaman" :active="request()->is('pengalaman')">Pengalaman</x-nav-link>
        <x-nav-link href="/pendidi" :active="request()->is('pendidi')">Pendidikan</x-nav-link>
        <x-nav-link href="/sertif" :active="request()->is('sertif')">Sertifikat</x-nav-link>
        <x-nav-link href="/projek" :active="request()->is('projek')">My Project</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
      </div>
    </div>
  </nav>