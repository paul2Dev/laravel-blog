<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug', 'image', 'user_id', 'is_published'];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($project) {
            // Delete the associated image file
            if ($project->image && Storage::exists($project->image)) {
                Storage::delete($project->image);
            }
        });
    }

}
