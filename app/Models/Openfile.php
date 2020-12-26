<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Openfile extends Model
{
    use HasFactory;
    protected $table = 'openfiles';
    protected $fillable =['filename', 'take_image', 'checkvalue'];


    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
