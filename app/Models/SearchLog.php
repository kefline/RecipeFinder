<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchLog extends Model
{
    use HasFactory;

    // Define the table name (optional if the model name matches the table)
    protected $table = 'search_logs';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = ['recipe_id'];

    // Define the relationship between SearchLog and Recipe models (if needed)
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
