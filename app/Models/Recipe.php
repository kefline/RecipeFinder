<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'tags',
        'video_url',
        'directions',
        'ingredients',
        'nutritions',
        'peoples',
        'cook_time',
        'category',
    ];

    protected $casts = [
        'directions' => 'array',
        'ingredients' => 'array',
        'nutritions' => 'array',
    ];

    public function searchLogs()
    {
        return $this->hasMany(SearchLog::class);
    }

    // Define an accessor to get the search count
    public function getSearchCountAttribute()
    {
        return $this->searchLogs->count();
    }
}
