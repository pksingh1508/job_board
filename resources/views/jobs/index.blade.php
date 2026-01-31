<x-layout>
    @php
        $breadcrumbLinks = ['Jobs' => route('jobs.index')];
    @endphp
    <x-bread-crumbs class="my-4 mx-2" :links="$breadcrumbLinks" />

    {{-- filter goes here --}}
    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="{{ request('search') }}" placeholder="Search for any text" />
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From" />
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="To" />
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                    <x-radio-group name="experience" :options="\App\Models\JobPost::$experience" />
                </div>
                <div>
                    <div class="mb-1 font-semibold">Category</div>
                    <x-radio-group name="category" :options="\App\Models\JobPost::$category" />
                </div>
            </div>
            <div class="flex space-x-5">
                <x-button class="flex-1">Filter</x-button>
                <x-link-button :href="route('jobs.index')">Reset</x-link-button>
            </div>
        </form>
    </x-card>

    {{-- all the jobs Post --}}
    @foreach ($jobs as $job)
        <x-job-card class="mb-4" :$job>
            <div class="mt-5">
                <x-link-button :href="route('jobs.show', $job)">See Details</x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
