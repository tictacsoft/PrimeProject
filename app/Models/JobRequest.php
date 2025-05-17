<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    protected $table = 'job_requests';

    protected $fillable = [
        'user_id',
        'project_title',
        'project_description',
        'client_company',
        'project_location',
        'project_start_date',
        'project_end_date',
        'duration',
        'duration_unit',
        'position_title',
        'number_of_resources',
        'job_level',
        'skill_required',
        'job_description',
        'nice_to_have_skills',
        'work_type',
        'work_location',
        'rate_type',
        'budget_range',
        'contract_type',
        'interview_required',
        'interview_method',
        'interview_slots',
        'internal_notes',
        'attachment',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
