@props(['complete'=>false])



<div class="{{ $complete ? 'bg-green-900' : 'bg-yellow-600 '}} px-4 py-1 rounded-full leading-tight text-zinc-200 font-bold tracking-wider">
    {{ $complete ? "Complete": "Continuing..." }}
</div>  


