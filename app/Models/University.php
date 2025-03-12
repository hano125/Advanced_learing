<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $table = 'universities';
    protected $guarded = [];

    protected $primaryKey = 'universityId'; // Custom primary key

    public function colleges()
    {
        return $this->hasMany(College::class, 'universityId');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'universityId');
    }

    public function studyInfos()
    {
        return $this->hasMany(Study_info::class, 'universityId');
    }
}
