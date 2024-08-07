<nav class="flex bg-gradient-to-r from-green-900 via-green-600 to-green-800 p-5 md:p-10">
    
    <div class="md:pl-10">
      <div class="text-5xl font-bold md:text-6xl  md:font-bold">BiG <span class="font-outline-4">TABLE</span></div>
      <div class="hidden text-center pt-1 tracking-widest md:block">We Make <span class="px-1">Contents</span> That Matter!</div>
    </div>
      
      
      <div class="flex items-center flex-1 justify-end gap-5 md:pr-10">

        {{-- Search icon --}}
       <div>
        <div class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-zinc-200 size-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </div>
       </div>

        {{-- Menu button --}}
        <div>
            <div id="hamburger-menu-button" class="cursor-pointer group peer">
              <div
              class="relative top-0 h-1 w-8 rounded-full bg-zinc-200 transition-all group-open:top-3 group-open:rotate-45"
            ></div>
            <div
              class="my-2  h-1 w-8 rounded-full bg-zinc-200 opacity-100 transition-all group-open:opacity-0"
            ></div>
            <div
              class="relative top-0 mt-1 h-1 w-8 rounded-full bg-zinc-200 transition-all group-open:-top-3 group-open:-rotate-45 "
            ></div>
            </div>

            <div class="absolute hidden  bg-gradient-to-r  font-bold py-3 text-center  from-green-900 via-green-600  to-green-800 top-[88px]  w-full  left-0 z-10 justify-center gap-20 md:text-2xl md:peer-open:flex peer-open:block md:top-[168px]">
                <x-nav-link>Stories</x-nav-link>
                <x-nav-link>Poetry</x-nav-link>
                <x-nav-link>Videos</x-nav-link>
                <x-nav-link>More</x-nav-link>   
            </div>
          
          
        </div>
      </div>

</nav>