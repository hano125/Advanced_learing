<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $table = 'colleges';
    protected $guarded = [];
    protected $primaryKey = 'collegeId';

    public function university()
    {
        return $this->belongsTo(University::class, 'universityId');
    }

    public function departments()
    {
        return $this->hasMany(Department::class, 'collegeId');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'collegeId');
    }

    public function studyInfos()
    {
        return $this->hasMany(Study_Info::class, 'collegeId');
    }
}
