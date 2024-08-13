@props([
    'title',
    'author'
])

<div class="font-bold text-lg md:text-xl text-solidTextColor">{{ $title }}</div>
<div class="font-bold text-sm  text-gray-400 ">By <span>{{ $author }}</span></div>