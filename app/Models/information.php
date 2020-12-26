<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    use HasFactory;

    protected $table = 'information';
    protected $fillable =['disease', 'patient_name', 'patient_gender', 'related', 'disease_name', 'disease_date', 'social_status',
    'family_number', 'wife_number', 'male_number', 'female_number', 'who_spend', 
    'other_person', 'other_person_num', 'other_person_reason', 'primary_school', 'middle_school', 'high_school',
    'university', 'graduated', 'children_informations'];

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
