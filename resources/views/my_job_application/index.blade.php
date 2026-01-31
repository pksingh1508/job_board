<x-layout>
    @php
        $breadcrumbLinks = ['My Dashboard' => '#'];
    @endphp
    <x-bread-crumbs class="my-4 mx-2" :links="$breadcrumbLinks" />

    @forelse ($applications as $application)
        <x-job-card :job="$application->job_post">
            <div class="flex items-center justify-between text-xs text-slate-500">
                <div>
                    <div>
                        Applied {{ $application->created_at->diffForHumans() }}
                    </div>

                    <div>
                        Other {{ Str::plural('applicant', $application->job_post->job_applications_count - 1) }}
                        {{ $application->job_post->job_applications_count - 1 }}
                    </div>

                    <div>
                        Your asking salary is {{ number_format($application->expected_salary) }}
                    </div>

                    <div>
                        Average asking salary is
                        {{ number_format($application->job_post->job_applications_avg_expected_salary) }}
                    </div>

                </div>

                <div>

                </div>
            </div>
        </x-job-card>
    @empty
    @endforelse
</x-layout>
