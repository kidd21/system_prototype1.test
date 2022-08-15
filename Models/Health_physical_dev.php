<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health_physical_dev extends Model
{
    //protected $table = 'health_physical_dev';
    use HasFactory;

    public function personal_info() {
        return $this->belongsTo(Listing::class, 'personal_info_id');
    }
}
