<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location_info extends Model
{
    use HasFactory;
    protected $table = 'location_infos';
     
    protected $fillable =['user_id', 'place', 'description', 'building_num', 'building_type', 'building_ownership', 'building_rent',
    'location_N', 'location_E', 'rent_evaluate', 'room_number_all', 'room_number', 'home_status',
    'home_quality', 'bedroom_evaluate', 'kitchen_evaluate', 'bathroom_evaluate', 'store_evaluate',
    'driverroom_evaluate', 'hall_evaluate', 'dining_room_evaluate', 'living_room_evaluate', 'roof_evaluate',
    'annex_evaluate', 'outdoor_evaluate', 'evaluate_furniture', 'furnished', 'washing_machine', 'conditioner_1',
    'conditioner_2', 'conditioner_3', 'refrigerator', 'fraser', 'cleaner', 'heater', 'fan', 'fireplace',
    'water_cooler', 'category', 'home_category', 'washing_machineـevaluate', 'conditioner_1_evaluate', 'conditioner_2_evaluate','conditioner_3_evaluate',
    'refrigerator_evaluate', 'fraser_evaluate', 'cleaner_evaluate', 'heater_evaluate', 'fan_evaluate', 'fireplace_evaluate',
    'water_cooler_evaluate', 'status_reason', 'electric'];


    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
