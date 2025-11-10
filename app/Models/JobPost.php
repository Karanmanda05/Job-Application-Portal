<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = ['company_name' , 'company_address' , 'company_contact' , 'job_title' , 'job_type' , 'job_category' , 'job_description' , 'job_responsibility' , 
    'job_skills' , 'job_experience' , 'job_qualification' , 'job_salary' , 'job_perks' , 'job_city' , 'job_state' , 'job_country'];
}
