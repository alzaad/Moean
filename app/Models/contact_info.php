<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_info extends Model
{
    use HasFactory;
    protected $table = 'contact_infos';
    protected $fillable =['email', 'phone_number', 'mobile_number', 'whatsapp_number',
     'other_number', 'relative'];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
