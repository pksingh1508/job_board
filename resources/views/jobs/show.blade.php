<x-layout>
    @php
        $breadcrumbLinks = ['Jobs' => route('jobs.index'), $job->title => '#'];
    @endphp
    <x-bread-crumbs class="my-4 mx-2" :links="$breadcrumbLinks" />
    <x-job-card :$job>
        <p class="text-sm text-slate-500">{!! nl2br(e($job->description)) !!}</p>
    </x-job-card>

    <x-card class="mb-4">
        <h2 class="text-lg mb-4 font-medium">
            More Jobs from Company - {{ $job->employer->company_name }}
        </h2>
        <div class="text-sm text-slate-500">
            @foreach ($job->employer->job_posts as $otherJob)
                <div class="flex mb-4 justify-between">
                    <div>
                        <div class="text-slate-700">
                            <a href="{{ route('jobs.show', $otherJob) }}">{{ $otherJob->title }}</a>
                        </div>
                        <div class="text-sm">
                            {{ $otherJob->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="text-sm">
                        ${{ $otherJob->salary }}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>
