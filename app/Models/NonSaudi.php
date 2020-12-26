<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonSaudi extends Model
{
    use HasFactory;
    protected $table = 'non_saudis';
    protected $fillable =['name', 'age', 'national_id', 'national_id'];

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
