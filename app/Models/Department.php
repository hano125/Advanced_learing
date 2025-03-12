<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $guarded = [];
    protected $primaryKey = 'departmentId';

    public function college()
    {
        return $this->belongsTo(College::class, 'collegeId');
    }

    public function studyInfos()
    {
        return $this->hasMany(Study_Info::class, 'departmentId');
    }
}
