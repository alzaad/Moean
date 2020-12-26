<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attach extends Model
{
    use HasFactory;
    protected $table = 'attaches';
    protected $fillable =['', ''];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}