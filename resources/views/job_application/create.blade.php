<x-layout>
    @php
        $breadcrumbLinks = ['Jobs' => route('jobs.index'), $job->title => route('jobs.show', $job), 'Apply ' => '#'];
    @endphp
    <x-bread-crumbs class="my-4 mx-2" :links="$breadcrumbLinks" />

    <x-job-card :$job />

    <x-card>
        <h2 class="text-lg mb-4 font-medium">
            Your Job Application
        </h2>

        <form action="{{ route('job.application.store', $job) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="expected_salary" class="mb-2 block text-sm font-medium text-slate-900">Expected Salary</label>
                <x-text-input type="number" name="expected_salary" />
            </div>

            <x-button class="w-full">Apply</x-button>
        </form>
    </x-card>
</x-layout>
