<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachments extends Model
{
    use HasFactory;

    protected $table = 'attachments';
    protected $fillable =['filename', 'take_image'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
