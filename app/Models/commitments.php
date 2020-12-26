<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commitments extends Model
{
    use HasFactory;


    protected $table = 'commitments';
    protected $fillable = ['rent_home', 'electricity_bill', 'water_bill', 'monthly_fees', 'monthly_fees_bank',
    'debts', 'monthly_fees_eco_bank', 'personal_debts', 'hospital', 'maintenance', 'gas',
    'transfer', 'supplies', 'debts_info'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
