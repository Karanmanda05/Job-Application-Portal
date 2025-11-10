<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeerProfile extends Model
{
    protected $fillable = ['company_name' , 'company_email' , 'company_phone' , 'company_address' , 
    'company_city' , 'company_state' , 'company_country' , 'company_zipcode'];
}
