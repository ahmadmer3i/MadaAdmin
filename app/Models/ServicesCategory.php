<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find($id)
 */
class ServicesCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function form_service_category(): BelongsTo
    {
        return $this->belongsTo(ApplyFormService::class, 'service_id');
    }

    public function apply_form_services(): HasMany
    {
        return $this->hasMany(ApplyForm::class);
    }
}
