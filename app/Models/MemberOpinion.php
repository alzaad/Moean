<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberOpinion extends Model
{
    use HasFactory;
    protected $table = 'member_opinions';
    protected $fillable =['committees_note', 'committees_reason', 'committees_opinion', 'location', 'attach', 'family', 'note'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function members(){
        return $this->belongsTo('App\Models\Members');
    }
    
}
