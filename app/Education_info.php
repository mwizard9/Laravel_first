<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_info extends Model
{
    protected $fillable = [
        'institution_name',
        'passed_year',
        'symbol_number',
        'board',
        'cgpa_per'
    ];//
}
