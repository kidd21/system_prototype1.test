<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family_bg extends Model
{
    //protected $table = "Family_bg";
    use HasFactory;

        public function personal_info(): BelongsTo
        {
            return $this->belongsTo(Personal_info::class, 'personal_info_id');
        }
}
