<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorApply extends Model
{
    protected $fillable = [
        'sponsor_icon','e_card','sponsor_name',
        'contact_name','contact_name',
        'contact_email','project_class',
        'contact_number','student_number',
        'description','website'
    ];
}
