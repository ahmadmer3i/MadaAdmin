<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @method static insert(array $array)
 * @method static find($id)
 * @method static findOrFail($id)
 */
class ApplyFormService extends Model
{
    use HasFactory;

    protected $guarded = [];

    function apply_form(): HasMany
    {
        return $this->hasMany(ApplyForm::class, 'application_type_id');
    }

    function apply_services(): HasManyThrough
    {
        return $this->hasManyThrough(ApplyForm::class, ServicesCategory::class);
    }

    public function form_services(): HasMany
    {
        return $this->hasMany(ServicesCategory::class, 'service_id');
    }
}
