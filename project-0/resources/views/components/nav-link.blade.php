@props(['active'=>false])

<a {{ $attributes->merge(['class'=>$active ? 'bg-gray-950/50 text-white block rounded-md px-3 py-2 text-base font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white' ])}}>
{{$slot}}
</a>

