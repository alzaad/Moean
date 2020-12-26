<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_info extends Model
{
    use HasFactory;
    protected $table = 'job_infos';
    protected $fillable =['job', 'job_place', 'phone_number', 'education', 'salary', 'salary_month'];



    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
