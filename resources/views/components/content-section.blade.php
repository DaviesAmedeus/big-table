@props([
  'content',
  'subcontent'
])

<div class="px-32 md:flex py-10 items-center justify-center">
      <div><h2 class="font-bold  text-solidTextColor">{{ $content }}</h2></div>
      <div class="flex-1  text-end "> <x-card.underlined-text><a href="">{{ $subcontent }}>></a></x-card.underlined-text></div>
    </div>