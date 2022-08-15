<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Personal_info extends Model
{
    use HasFactory;

    public function family_bg() {
        return $this->hasMany(Family_bg::class, 'personal_info_id');
    }
    public function siblings() {
        return $this->hasMany(Sibling::class, 'personal_info_id');
    }
    public function healh_physical_dev() {
        return $this->hasMany(Health_physical_dev::class, 'personal_info_id');
    }
}
