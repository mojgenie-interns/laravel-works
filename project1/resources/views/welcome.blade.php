<x-layout>
    <title>Project 1</title>
    <h1>Project 1</h1>
    @if ($greeting=="Hello")
    <p>{{$greeting}}, welcome to Project 1</p>
    @endif
    <a href="/superheroes">Do you what to know my favorite superheroes?</a>
</x-layout>