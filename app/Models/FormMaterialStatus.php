<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find($id)
 */
class FormMaterialStatus extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function apply_form(): HasMany
    {
        return $this->hasMany(ApplyForm::class);
    }
}
