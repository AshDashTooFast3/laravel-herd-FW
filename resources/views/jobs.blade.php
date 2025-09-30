<x-layout>
    <x-slot name="heading">Job Listings</x-slot>

<div class="space-y-4">
    @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
               <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong> Pays: €{{ $job['salary'] }} per year. Location: {{ $job['location'] }}
                </div>
            </a>
    @endforeach

    <div class="mt-4">
        {{ $jobs->links() }}
</div>

</x-layout>
