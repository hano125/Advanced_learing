<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study_info extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'study_infos';

    public function userInfo()
    {
        return $this->belongsTo(user_info::class, 'userInfoId');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'universityId');
    }

    public function college()
    {
        return $this->belongsTo(College::class, 'collegeId');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'departmentId');
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degreeId');
    }
}
