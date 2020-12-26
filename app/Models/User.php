<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function initialstudy(){
        return $this->hasMany('App\Models\InitialStudy');
    }

    public function beneficiary_info(){
        return $this->hasMany('App\Models\beneficiary_info');
    }
    public function job_info(){
        return $this->hasMany('App\Models\job_info');
    }
    public function contact(){
        return $this->hasMany('App\Models\contact_info');
    }

    public function information(){
        return $this->hasMany('App\Models\information');
    }

    public function commitment(){
        return $this->hasMany('App\Models\commitments');
    }

    public function attachments(){
        return $this->hasMany('App\Models\attachments');
    }

    public function Openfile(){
        return $this->hasMany('App\Models\Openfile');
    }

    public function BankInformation(){
        return $this->hasMany('App\Models\BankInformation');
    }

    public function location_info(){
        return $this->hasMany('App\Models\location_info');
    }
    public function memberOpinion(){
        return $this->hasMany('App\Models\MemberOpinion');
    }

    public function Profile(){
        return $this->hasMany('App\Models\Profile');
    }
    public function nonsaudi(){
        return $this->hasMany('App\Models\NonSaudi');
    }
    public function attach(){
        return $this->belongsTo('App\Models\Attach');
    }
}
