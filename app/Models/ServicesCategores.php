<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static findOrFail($id)
 */
class ServicesCategores extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services(): BelongsTo
    {
        return $this->belongsTo(Services::class);
    }

    public function services_categories_list(): HasMany
    {
        return $this->hasMany(ServicesCategoresLists::class);
    }
}
