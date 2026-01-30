<x-layout>
    @php
        $breadcrumbLinks = ['Jobs' => route('jobs.index'), $job->title => '#'];
    @endphp
    <x-bread-crumbs class="my-4 mx-2" :links="$breadcrumbLinks" />
    <x-job-card :$job />
</x-layout>
