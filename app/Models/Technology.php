<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image'];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($technology) {
            // Delete the associated image file
            if ($technology->image && Storage::exists($technology->image)) {
                Storage::delete($technology->image);
            }
        });
    }

}
