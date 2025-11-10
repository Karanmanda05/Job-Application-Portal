<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantProfile extends Model
{
    protected $fillabel=['applicant_name' , 'applicant_email' , 'applicant_contact' , 'applicant_dob' , 
    'applicant_gender' , 'applicant_address' , 'applicant_qualification' , 'applicant_experience' , 'applicant_skills' , 'applicant_photo'
    , 'applicant_resume' , 'applicant_linkedin' , 'applicant_github'];
}
