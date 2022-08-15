<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    use HasFactory;
    
    public function personal_info() {

        return $this->belongsTo(Personal_info::class, 'personal_info_id');
    }
}
