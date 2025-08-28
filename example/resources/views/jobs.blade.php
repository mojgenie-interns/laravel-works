<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
        <ul>
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id']}} " class="text-blue-500 hover:underline">
            <li>
                <strong>{{$job['title']}}</strong>
            </li>
        </a>
        @endforeach
        </ul>
</x-layout>
