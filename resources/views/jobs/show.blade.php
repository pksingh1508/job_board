<x-layout>
    @php
        $breadcrumbLinks = ['Jobs' => route('jobs.index'), $job->title => '#'];
    @endphp
    <x-bread-crumbs class="my-4 mx-2" :links="$breadcrumbLinks" />
    <x-job-card :$job>
        <p class="text-sm text-slate-500">{!! nl2br(e($job->description)) !!}</p>
    </x-job-card>
</x-layout>
