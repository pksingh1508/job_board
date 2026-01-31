<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    /** @use HasFactory<\Database\Factories\JobApplicationFactory> */
    use HasFactory;

    protected $fillable = ['expected_salary', 'user_id', 'job_posts_id'];

    // defining the relationship
    public function job_posts(): BelongsTo {
        return $this->belongsTo(JobPost::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
