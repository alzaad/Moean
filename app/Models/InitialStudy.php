<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitialStudy extends Model
{
    use HasFactory;
    protected $table = 'initial_studies';
    protected $fillable =['family', 'salary', 'social_security', 'retirement',
     'other', 'home'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
