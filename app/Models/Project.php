<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Model;
use App\Models\User;
use App\Models\Technology;

class Project extends Model
{
    use HasFactory;

    protected $filable = ['title', 'content', 'image', 'user_id', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'technology_project', 'project_id', 'technology_id');
    }

}
