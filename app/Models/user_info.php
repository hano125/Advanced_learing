<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    use HasFactory;
    protected $table = 'user_info';
    protected $guarded = [];


    public function study_info()
    {
        return $this->hasOne(study_info::class, 'user_id');
    }
}
