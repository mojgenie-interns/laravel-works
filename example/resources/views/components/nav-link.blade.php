@props(['active'=>'false'])

<a {{$attributes->merge(['class'=>$active?'bg-gray-950/50 text-white px-3 py-2 block rounded-md':'text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium'])}}
    aria-current="{{request()->is('/')?'page':'false`'}}">
{{$slot}}
</a>
