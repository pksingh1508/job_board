<?php

namespace App\Http\Controllers;

class MyJobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('my_job_application.index', 
        [
            'applications' => auth()->user()->jobApplications()
                ->with(['job_post' => fn($query) => $query->withCount('jobApplications')
                    ->withAvg('jobApplications', 'expected_salary'), 
                    'job_post.employer'])
                ->latest()->get()
        ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
