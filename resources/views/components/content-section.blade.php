@props([
  'content',
  'subcontent'
])





    <div class="flex flex-col md:flex-row m-auto items-center justify-center  w-full  px-[88px] py-10  resize-x">

        <div><h2 class="font-bold  text-solidTextColor">{{ $content }}</h2></div>
        <div class="flex-1  text-end "> <x-card.underlined-text><a href="">{{ $subcontent }}</a></x-card.underlined-text></div>
      </div>